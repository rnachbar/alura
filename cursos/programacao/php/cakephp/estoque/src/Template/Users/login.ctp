<?php
	// mensagem do componete auth
	// cake 3.4 ja vem com essa funcionalidade
	// echo $this->Flash->render('auth');
?>

<h1>Acesso ao Sistema</h1>

<?php
	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->button('Acessar');
	echo $this->Form->end();
?>
