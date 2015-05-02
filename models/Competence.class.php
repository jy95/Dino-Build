<?php

class Competence {
	private $_niveau;
	private $_nom;
	private $_num;
	public function __construct($num,$niveau,$nom) {
		$this->_num = $num;
		$this->_niveau = $niveau;
		$this->_nom = $nom;
	}
	
	public function niveau() {
		return $this->_niveau;
	}
	
	public function nom() {
		return $this->_nom;
	}
	
	public function num() {
		return $this->_num;
	}
}

?>