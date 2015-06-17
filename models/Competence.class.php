<?php

class Competence {
	private $_niveau;
	private $_nom;
	private $_num;
    private $_type;
    private $_description;
    private $_energie;
    private $_parent;

	public function __construct($num, $niveau, $nom, $type, $description, $energie , $parent) {
		$this->_num = $num;
		$this->_niveau = $niveau;
		$this->_nom = $nom;
        $this->_type = $type;
        $this->_description = $description;
        $this->_energie = $energie;
        $this->_parent = $parent;
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

    public function type() {
        return $this->_type;
    }

    public function description() {
        return $this->_description;
    }

    public function energie() {
        return $this->_energie;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function parent(){
        return $this->_parent;
    }

}

?>