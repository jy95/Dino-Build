<?php

class Dino {
    private $_id;
    private $_user;
    private $_nom;
    private $_eau;
    private $_feu;
    private $_air;
    private $_bois;
    private $_foudre;

    public function __construct($id, $user, $nom, $eau, $feu, $air, $bois, $foudre){
        $this->_id = $id;
        $this->_user = $user;
        $this->_nom = $nom;
        $this->_eau = $eau;
        $this->_feu = $feu;
        $this->_air = $air;
        $this->_bois = $bois;
        $this->_foudre = $foudre;
    }


    public function getFoudre()
    {
        return $this->_foudre;
    }

    public function getAir()
    {
        return $this->_air;
    }

    public function getBois()
    {
        return $this->_bois;
    }

    public function setEau($eau)
    {
        $this->_eau = $eau;
    }

    public function setFeu($feu)
    {
        $this->_feu = $feu;
    }

    public function setAir($air)
    {
        $this->_air = $air;
    }

    public function setBois($bois)
    {
        $this->_bois = $bois;
    }

    public function setFoudre($foudre)
    {
        $this->_foudre = $foudre;
    }

    public function getFeu()
    {
        return $this->_feu;
    }

    public function getEau()
    {
        return $this->_eau;
    }

    public function getUser()
    {
        return $this->_user;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getId()
    {
        return $this->_id;
    }

}