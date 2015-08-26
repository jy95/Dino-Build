<?php

class Donnees {
    private static $instance = null;
    private $_db;

    public function __construct() {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=dinorpg;charset=UTF8','root','');
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

    public function UserInformations($donnees){
        $name = $donnees["name"];
        $avatar = str_replace('//', 'http://', $donnees["picture"]["url"]);
        $id = $donnees["id"];

        $query = $this->_db->prepare("SELECT * FROM `users` WHERE id = " . $id);
        $query->execute();

        if ($query->rowCount() == 0){
            $query = $this->_db->prepare("INSERT INTO `users`(id, name, avatar) VALUES(:id , :name, :avatar)");
            $query->bindValue(':id', $id);
            $query->bindValue(':name', $name);
            $query->bindValue(':avatar', $avatar);

            return $query->execute();

        } else {

            $row = $query->fetch();

            if ($row->name != $name || $row->avatar != $avatar) {

                $query = $this->_db->prepare("UPDATE `users` SET name = :name, avatar = :avatar WHERE id= :id");
                $query->bindValue(':name', $name);
                $query->bindValue(':avatar',$avatar);
                return $query->execute();
            }

            return true;
        }
    }

    public function publishComment(Commentaire $comment){

        date_default_timezone_set("Europe/Brussels");
        $date = date(DateTime::ATOM);

        $query = $this->_db->prepare("INSERT INTO `comments` VALUES(:comment_id, :dino_id, :user_id, :comment, :date, :response_comment_id)");
        $query->bindValue(':comment_id', $comment->getCommentId());
        $query->bindValue(':dino_id', $comment->getDinoId());
        $query->bindValue(':user_id', $comment->getUserId());
        $query->bindValue(':comment', $comment->getComment());
        $query->bindValue(':date', $date);
        $query->bindValue(':response_comment_id', $comment->getResponseCommentId());
        return $query->execute();

    }

    public function getUser($id){

        $query = $this->_db->prepare("SELECT * FROM `users` WHERE id = " . $id );
        $query->execute();
        $tableau = array();

        if ($query->rowCount() == 1){
            $row = $query->fetch();
            $tableau[0] = $row->name;
            $tableau[1] = $row->avatar;
            return $tableau;
        } else {
            $tableau[0] = "Inconnu";
            $tableau[1] = "rien";
            return $tableau;
        }
    }

    public function select_commentaires($id, $page){

        $sql = "SELECT * FROM `comments` WHERE dino_id = " . $id ." ORDER BY date ASC LIMIT ";
        if ($page != 0 ){
            $chiffre = ($page * 10)+1;
            $sql = $sql . $chiffre;
        } else {
            $sql = $sql . $page;
        }

        $sql = $sql . "," . ($page +1) * 10;
        $query = $this->_db->prepare($sql);
        $query->execute();
        $tableau = array();

        if ($query->rowCount() == 0){
            return $tableau;
        } else {
            while($row = $query->fetch()){
                $tableau[] = array(new Commentaire($row->comment_id, $row->dino_id, $row->user_id, $row->comment, $row->date, $row->response_comment_id), Donnees::getInstance()->select_reply($row->comment_id));
            }
            return $tableau;
        }
    }

    public function select_reply($id){

        $sql = "SELECT * FROM `comments` WHERE response_comment_id = " . $id . " ORDER BY date ASC";
        $query = $this->_db->prepare($sql);
        $query->execute();
        $tableau = array();

        if ($query->rowCount() != 0){
            while($row = $query->fetch()){
                $tableau[] = new Commentaire($row->comment_id, $row->dino_id, $row->user_id, $row->comment, $row->date, $row->response_comment_id);
            }
            return $tableau;
        } else {
            return $tableau;
        }

    }

    public function getLastNumberComment(){
        $query = $this->_db->prepare("SELECT MAX(`comment_id`) as 'max' FROM `comments` ");
        $query->execute();

        if ($query->rowCount() == 1){
            return $query->fetch()->max;
        } else {
            return 1;
        }
    }

    public function misAJour(Dino $dino){

        $query = $this->_db->prepare("UPDATE donnees_users SET eau= :eau , feu= :feu, air= :air, foudre= :foudre, bois= :bois WHERE id= :id");

        $query->bindValue(':eau', (!empty ( implode(',',$dino->getEau()) )) ? implode(',',$dino->getEau())  : 'null');
        $query->bindValue(':feu', (!empty ( implode(',',$dino->getFeu()) )) ? implode(',',$dino->getFeu())  : 'null');
        $query->bindValue(':air', (!empty ( implode(',',$dino->getAir()) )) ? implode(',',$dino->getAir())  : 'null');
        $query->bindValue(':foudre', (!empty ( implode(',',$dino->getFoudre()) )) ? implode(',',$dino->getFoudre())  : 'null');
        $query->bindValue(':bois', (!empty ( implode(',',$dino->getBois()) )) ? implode(',',$dino->getBois())  : 'null');
        $query->bindValue(':id', $dino->getId());

        return $query->execute();
    }

    public function insererNouveauDino($nom, $race, $user){

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
            while ($row = $query->fetch()){
                $dino = new Dino($row->id, $row->user, $row->nom, $row->race, explode(",",$row->eau), explode(",",$row->feu), explode(",",$row->air), explode(",",$row->bois), explode(",",$row->foudre));
            }
            return $dino;
        } else {
            return null;
        }
    }

    public function deleteDino($id){
        $query = $this->_db->prepare("DELETE FROM `comments` WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $query = $this->_db->prepare("DELETE FROM `donnees_users` WHERE id = :id");
        $query->bindValue(':id', $id);

        return $query->execute();
    }
}