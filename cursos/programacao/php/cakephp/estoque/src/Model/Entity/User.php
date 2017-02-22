<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

// entidade é no singular
class User extends Entity {

	// informa quais campos podem ser acessados
	// todos menos o id
	protected $_accessible = [
		'*' => true,
		'id' => false,
	];

	// invocado toda vez que colocamos um password em um usuário
	public function _serPassword($password) {
		return (new DefaultPasswordHasher)->hash($password);	
	}

}
