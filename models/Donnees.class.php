<?php

class Donnees {
    private static $instance = null;
    private $_db;

    public function __construct() {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=dinorpg;charset=UTF8','root','toor');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (PDOException $e) {
            die("Erreur d'acces à la base de données ");
        }
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Donnees();
        }
        return self::$instance;
    }

    public function misAJour(Dino $dino){

        $query = $this->_db->prepare("UPDATE donnees_users SET eau= :eau , feu= :feu, air= :air, foudre= :foudre, bois= :bois WHERE id= :id");
        $query->bindValue(':eau', implode(',',$dino->getEau()));
        $query->bindValue(':feu', implode(',',$dino->getFeu()));
        $query->bindValue(':air', implode(',',$dino->getAir()));
        $query->bindValue(':foudre', implode(',',$dino->getFoudre()));
        $query->bindValue(':bois', implode(',',$dino->getBois()));
        $query->bindValue(':id', $dino->getId());

        return $query->execute();
    }

    public function insererNouveauDino($nom, $race, $user){

        var_dump($this->estPasPresent($nom, $race, $user));
        if ($this->nombreInscrits($user) < 20 && !$this->estPasPresent($nom, $race, $user)){
        $query = $this->_db->prepare("INSERT INTO donnees_users(nom, race, user) VALUES(:nom , :race, :user)");
        $query->bindValue(':user', $user);
        $query->bindValue(':nom', htmlentities($nom));
        $query->bindValue(':race', $race);
        return $query->execute();
        } else {
            return false;
        }

    }

    public function estPasPresent($nom, $race, $user){
        $query = $this->_db->prepare("SELECT * FROM donnees_users WHERE nom = :nom AND race = :race AND user = :user LIMIT 1");
        $query->bindValue(':user', $user);
        $query->bindValue(':nom', htmlentities($nom));
        $query->bindValue(':race', $race);
        $query->execute();

        return $query->rowCount() != 0;
    }

    public function getDinosUser($user){

        $query = $this->_db->prepare("SELECT * FROM donnees_users WHERE user = :user");
        $query->bindValue(':user', $user);
        $query->execute();

        if($query->rowCount() > 0) {
            $dinos = array();

            while ($row = $query->fetch()){
                $dinos[] = new Dino($row->id, $row->user, $row->nom, $row->race, explode(",",$row->eau), explode(",",$row->feu), explode(",",$row->air), explode(",",$row->bois), explode(",",$row->foudre));
            }
            return $dinos;
        } else {
            return null;
        }

    }

    public function nombreInscrits($user){
        $query = $this->_db->prepare("SELECT COUNT(*) as nombre FROM donnees_users WHERE user = :user");
        $query->bindValue(":user", $user);
        $query->execute();
        $nombre = $query->fetch()->nombre;

        return $nombre;
    }

    public function getDinoUser($id){

        $query = $this->_db->prepare("SELECT * FROM donnees_users WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        if($query->rowCount() == 1) {
            $dino = array();
            while ($row = $query->fetch()){
                $dino[] = new Dino($row->id, $row->user, $row->nom, $row->race, explode(",",$row->eau), explode(",",$row->feu), explode(",",$row->air), explode(",",$row->bois), explode(",",$row->foudre));
            }
            return $dino;
        } else {
            return null;
        }
    }
}