<?php

class Ebook extends Livro {

	private $waterMark;

	public function getWaterMarker() {
		return $this->waterMark;
	}

	public function setWaterMarker($waterMark) {
		$this->waterMark = $waterMark;
	}
	
}