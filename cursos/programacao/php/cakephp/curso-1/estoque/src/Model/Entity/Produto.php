<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

// nome de entidade sempre no singular
class Produto extends Entity {

	public function calculaDesconto() {
		return $this->preco * 0.9;
	}
}