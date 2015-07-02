<?php
/**
 * Created by PhpStorm.
 * User: jacques
 * Date: 01-07-15
 * Time: 20:42
 */

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

        $query = $this->_db->prepare("UPDATE `donnees_users` SET `eau`= :eau , `feu`= :feu, `air`= :air, `foudre`= :foudre, `bois`= :bois WHERE `id`= :id");
        $query->bindValue(":eau", implode(',',$dino->getEau()));
        $query->bindValue(":feu", implode(',',$dino->getFeu()));
        $query->bindValue(":air", implode(',',$dino->getAir()));
        $query->bindValue(":foudre", implode(',',$dino->getFoudre()));
        $query->bindValue(":bois", implode(',',$dino->getBois()));
        $query->bindValue(":id", $dino->getId());

        return $query->execute();
    }

    public function insererNouveauDino($nom, $user){

        if ($this->nombreInscrits($user) < 20){
        $query = $this->_db->prepare("INSERT INTO `donnees_users`(`nom`, `user`) VALUES(:nom , :user)");
        $query->bindValue(":user", $user);
        $query->bindValue(":nom", htmlentities($nom));
        return $query->execute();
        } else {
            return false;
        }

    }

    public function getDinosUser($user){

        $query = $this->_db->prepare("SELECT * FROM `donnees_users` WHERE user = :user");
        $query->bindValue(':user', $user);
        $result = $query->execute();

        if($result->rowCount() > 0) {
            $dinos = array();
            while ($row = $result->fetch()){
                $dinos[] = new Dino($row->id, $row->user, $row->nom, explode(",",$row->eau), explode(",",$row->feu), explode(",",$row->air), explode(",",$row->bois), explode(",",$row->foudre));
            }
            return $dinos;
        } else {
            return null;
        }

    }

    public function nombreInscrits($user){
        $query = $this->_db->prepare("SELECT COUNT(*) as nombre FROM `donnees_users` WHERE `user` = :user");
        $query->bindValue(":user", $user);

        return $query->execute()->fetch()->nombre;
    }

    public function getDinoUser($id){

        $query = $this->_db->prepare("SELECT * FROM `donnees_users` WHERE id = :id");
        $query->bindValue(':id', $id);
        $result = $query->execute();

        if($result->rowCount() == 1) {
            $dino = array();
            while ($row = $result->fetch()){
                $dino[] = new Dino($row->id, $row->user, $row->nom, explode(",",$row->eau), explode(",",$row->feu), explode(",",$row->air), explode(",",$row->bois), explode(",",$row->foudre));
            }
            return $dino;
        } else {
            return null;
        }
    }
}