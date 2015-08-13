<?php

class CompetenceSpeciale
{
    private $_nom;
    private $_num;
    private $_type;
    private $_description;
    private $_energie;
    private $_parents;

    public function __construct($num, $nom, $type, $description, $energie, $parent_eau , $parent_feu , $parent_foudre , $parent_air , $parent_bois ) {
        $this->_num = $num;
        $this->_nom = $nom;
        $this->_type = $type;
        $this->_description = $description;
        $this->_energie = $energie;
        $this->_parents = array(
            $parent_eau,
            $parent_feu,
            $parent_foudre,
            $parent_air,
            $parent_bois
        );

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

    public function parents() {
        return $this->_parents;
    }

    public function aLaCompetenceDisponible($dino){
        $competencesDisponible = array(
            $dino->getEau(),
            $dino->getFeu(),
            $dino->getFoudre(),
            $dino->getAir(),
            $dino->getBois()
        );

        foreach ($this->_parents as $i=>$element){
            if ($element != 0 && !in_array($element,$competencesDisponible[$i])){
                return false;
            }
        }

        return true;
    }

    public function peutAvoirLaCompetence($dino){
        $competencesDisponible = array(
            $dino->getEau(),
            $dino->getFeu(),
            $dino->getFoudre(),
            $dino->getAir(),
            $dino->getBois()
        );

        foreach ($this->_parents as $i=>$element){
            if ($element != 0 && in_array($element,$competencesDisponible[$i])){
                return true;
            }
        }

        return false;
    }

}

?>