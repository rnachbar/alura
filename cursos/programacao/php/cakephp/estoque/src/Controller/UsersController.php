<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Event\Event; // informar que esta usando um Event

// a classe tem que ter o mesmo nome do arquivo e todo controller estende de AppController
class UsersController extends AppController {

	// todo controller tem um metodo antes de ser invocado
	// podemos utiliza-lo para informar o metodo de autenticacao para habilitar algumas coisas
	public function beforeFilter(Event $event) {

		// AppControlle também tem um beforeFiltre então é uma boa prática sempre chamar o pai
		parent::beforeFilter($event);

		// liberando acesso de autenticação para as páginas informadas
		$this->Auth->allow([
			'adicionar',
			'salvar'
		]);

	}

	public function index() {

	}

	public function adicionar() {

		$userTable = TableRegistry::get('Users');
		$user = $userTable->newEntity();
		
		$this->set('user', $user);
	}

	public function salvar () {

		$userTable = TableRegistry::get('Users');
		$user = $userTable->newEntity($this->request->data());

		if ($userTable->save($user)) {
			// flash é um componente
			$this->Flash->set('Usuário cadastrado com sucesso!', ['element' => 'success']);
		} else {
			$this->Flash->set('Erro ao salvar usuário!', ['element' => 'error']);
		}

		$this->redirect('Users/adicionar');
	}

	public function login () {

		// se a requisição for post
		if ($this->request->is('post')) {
			
			// pedindo para o sistema de autenticação identificar o usuário
			$user = $this->Auth->identify();

			if ($user) {
				$this->Auth->setUser($user); // setando o usuário encontrado
				// redirecionando para url setada no AppController (loginRedirect)
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->set('Usuário ou senha inválidos', ['element' => 'error']);
			}
		}
	}

	public function logout() {
		// deslogar
		return $this->redirect($this->Auth->logout());
	}
}