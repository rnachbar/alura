<?php

class Ebook extends Livro {

	private $waterMark;

	public function getWaterMarker() {
		return $this->waterMark;
	}

	public function setWaterMarker($waterMark) {
		$this->waterMark = $waterMark;
	}
	
	public function atualizaBaseadoEm($params) {
		$this->setIsbn($params['isbn']);
		$this->setWaterMarker($params['waterMarker']);
	}
}