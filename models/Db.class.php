<?php
class Db {
    private static $instance = null;
    private $_db;


    public function __construct() {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=dinorpg;charset=UTF8','root','toor');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (PDOException $e) {
            die("Erreur d'acces à la base de données : " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public  function select_toutcompetences($element , $dino){

        $query = "SELECT *   FROM " . $element ;

        if ($dino != "quetzu" && ($element == "eau" || $element == "feu")) {
            $query = $query . " WHERE quetzu != 1";
        }
        $result = $this->_db->query($query);
        $tableau = array();
        if ($result->rowCount() == 0){
            return $tableau;
        } else {
            while($row = $result->fetch()) {
                $tableau[] = new Competence($row->num, $row->niv, $row->nom, $row->type, $row->description, $row->energie, $row->idparent);
            }
            return $tableau;
        }
    }

    public function select_competencesdispo($race, $choix, $table) {

        $query = "SELECT *   FROM " . $choix . " WHERE ";

        if(!empty($table)) {
            if ($race != 'quetzu' && ($choix == 'eau' || $choix = 'feu')) {
                $query = $query . " quetzu != 1 AND idparent IN (".implode(',',$table).")";
                $query = $query . " AND num NOT IN (".implode(',',$table).") OR (niv = 1 AND num NOT IN (".implode(',',$table)."))";
            } else{
                $query = $query . " idparent IN (".implode(',',$table).") AND num NOT IN (".implode(',',$table).") OR (niv = 1 AND num NOT IN (".implode(',',$table)."))";
            }
        } else {
            $query = $query . "niv = 1 ";
            if ($race != 'quetzu' && ($choix == 'eau' || $choix = 'feu')) {
                $query = $query . " AND quetzu != 1";
            }
        }

        $result = $this->_db->query($query);
        $tableau = array();
        if ($result->rowCount() == 0){
            return $tableau;
        } else {
            while($row = $result->fetch()) {
                $tableau[] = new Competence($row->num, $row->niv, $row->nom, $row->type, $row->description, $row->energie, $row->idparent);
            }
            return $tableau;
        }
    }

    public function select_numcompetencesdispo($choix, $table) {
        if(!empty($table)) {
            $query = "SELECT num   FROM " . $choix . "  WHERE idparent IN (".implode(',',$table).") AND num NOT IN (".implode(',',$table).") OR (niv = 1 AND num NOT IN (".implode(',',$table)."))";
        } else {
            $query = "SELECT num   FROM " . $choix . "  WHERE niv = 1";
        }
        $tableau = array();
        $result = $this->_db->query($query);

        if ($result->rowCount() == 0){
            return $tableau;
        } else {
            while ($row = $result->fetch()) {
                $tableau[] = $row->num;
            }
        }
        return $tableau;
    }

    public function conseil($tableau,$dino,$element) {
        // chercher plans ups selon dino et element
        $planup = Db::getInstance()->planUp($dino,$element);
        // 1) parcourir les compétences du plan up de la race du dino
        if(!empty($planup)){
            foreach($planup as $i=> $element) {
                // vérifier si la compétence courante du plan up est présente dans celles disponibles.
                if(in_array($element,$tableau)){
                    return $element;
                }
            }
        }

        // aucune compétence trouvé :(
        return false;
    }

    public function meilleurUp($choix, $element) {
        $query = "SELECT *  FROM " . $choix . " WHERE num = " . $element;
        $result = $this->_db->query($query);

        if ($result->rowCount() == 1){
            $row = $result->fetch();
            $competence = new Competence($row->num, $row->niv, $row->nom, $row->type, $row->description, $row->energie, $row->idparent);
            return $competence;
        } else {
            return false;
        }
    }

    public function select_competence($element, $num){
        $query = "SELECT * FROM `" . $element . "` WHERE num = " . $this->_db->quote($num) . "";
        $result  = $this->_db->query($query);
        if ($result->rowCount() == 1){
            $row = $result->fetch();
            return new Competence($row->num, $row->niv, $row->nom, $row->type, $row->description, $row->energie, $row->idparent);
        } else {
            return null;
        }
    }

    public function planUp($dino,$element){
            switch($dino) {
                case "sirain" :
                    switch($element) {
                        case "eau" :
                            return array(3,2,1,5,4,8,9,6,7,19,21,22,12,13,18,14,16,24,29,26,30);
                        case "feu" :
                            return array(3,10,24,23,30,31);
                        case "bois" :
                            return array(1,4,5,11,12);
                        case "air" :
                            return array(3,9,21);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "winks" :
                    switch($element) {
                        case "eau" :
                            return array(3,2,1,5,4,8,9,6,7,19,21,22,12,13,18,14,16,24,29,26,30);
                        case "feu" :
                            return array(3,10);
                        case "bois" :
                            return array(1,5);
                        case "air" :
                            return array(3,9,21);
                        case "foudre":
                            return array(3,2,8,9,6,20,21,15,18,27);
                        default :
                            return array();
                    }
                case "gorilloz" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,19);
                        case "feu" :
                            return array(3,10,24,23,30);
                        case "bois" :
                            return array(1,2,3,5,9,4,7,8,11,12,13,16,17,20,21,18,22,23,25);
                        case "air" :
                            return array(3,8,19);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "castivore" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,10,19,21,20);
                        case "feu" :
                            return array(3,10,24);
                        case "bois" :
                            return array(1,2,3,4,5,7,9,11,12,20,21,22,17);
                        case "air" :
                            return array(1,3,4,8,9,21,20,11,19,27,22);
                        case "foudre":
                            return array(3,8,20,19);
                        default :
                            return array();
                    }
                case "feross" :
                    switch($element) {
                        case "eau" :
                            return array(3,2,8,9,6,19,21,22,16,26,30);
                        case "feu" :
                            return array(2,3,10,9,8,24,22,21,20,23,29,28,30,31);
                        case "bois" :
                            return array(1,3,5,4,9,11,12,20,21,22);
                        case "air" :
                            return array(1,4);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "moueffe" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,19,2);
                        case "feu" :
                            return array(1,2,3,5,6,8,9,10,13,20,21,22,23,24,28,29,30,31);
                        case "bois" :
                            return array(2,7,16,25,28);
                        case "air" :
                            return array(2,6,14,15);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "rocky" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,19,9,21);
                        case "feu" :
                            return array(3,1,10,6,24,16);
                        case "bois" :
                            return array(1,5,12);
                        case "air" :
                            return array(1,4,10);
                        case "foudre":
                            return array(3,2,1,8,9,4,6,20,21,15,19,10,11,22,23,28,29);
                        default :
                            return array();
                    }
                case "wanman" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,19,9,21);
                        case "feu" :
                            return array(3,1,10,6,16,24,23,30,31);
                        case "bois" :
                            return array(1,3,9,5,20,12);
                        case "air" :
                            return array(1,4,10);
                        case "foudre":
                            return array(1,2,3,8,9,4,6,20,21,15,10,11,22,23,28,29);
                        default :
                            return array();
                    }
                case "kabuki" :
                    switch($element) {
                        case "eau" :
                            return array(1,3,8,9,5,4,19,21,22,14,13,12,24,29);
                        case "feu" :
                            return array(3,10,24);
                        case "bois" :
                            return array(1,5);
                        case "air" :
                            return array(1,2,3,4,6,9,21,20,14,10,11,27,22,15);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "toufufu" :
                    switch($element) {
                        case "eau" :
                            return array(3,2,8,19);
                        case "feu" :
                            return array(3,10,24);
                        case "bois" :
                            return array(1,3,5,9,12,20,21);
                        case "air" :
                            return array(1,2,3,4,6,8,14,19,10);
                        case "foudre":
                            return array(3,2,1,8,9,4,6,20,21,15,11,23,29);
                        default :
                            return array();
                    }
                case "soufflet" :
                    switch($element) {
                        case "eau" :
                            return array();
                        case "feu" :
                            return array();
                        case "bois" :
                            return array();
                        case "air" :
                            return array();
                        case "foudre":
                            return array();
                        default :
                            return array();
                    }
                case "pigmou" :
                    switch($element) {
                        case "eau" :
                            return array(3,2,8,19);
                        case "feu" :
                            return array(3,1,2,5,10,6,7,8,9,13,18,20,11,22,24,23,28,29,30,31);
                        case "bois" :
                            return array(2,7,16,25,28);
                        case "air" :
                            return array(2,6,14,15);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                case "nuagoz" :
                    switch($element) {
                        case "eau" :
                            return array(3,1,8,9,5,4,18,20,21,13,12,11,22,27,19,2,6,15,24,28);
                        case "feu" :
                            return array(3,10,24);
                        case "bois" :
                            return array(1,5);
                        case "air" :
                            return array(1,3,4,9,21,20,11,27,22,10,2,6,14);
                        case "foudre":
                            return array(3,8,9,20,21,18,19,2,6,15);
                        default :
                            return array();
                    }
                case "planaille" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,9,19,21,22);
                        case "feu" :
                            return array(3,10,24);
                        case "bois" :
                            return array(1,5,12);
                        case "air" :
                            return array(1,3,4,9,21,20,10,11,27,22);
                        case "foudre":
                            return array(3,1,2,8,4,9,6,20,21,18,19,10,11,22,23,28,29,27);
                        default :
                            return array();
                    }
                case "pteroz" :
                    switch($element) {
                        case "eau" :
                            return array(3,8,19);
                        case "feu" :
                            return array(1,2,3,10,5,8,9,24,23,22,21,20,13,28,29,30,31);
                        case "bois" :
                            return array(1,5,4,11);
                        case "air" :
                            return array(1,2,3,4,6,7,9,21,20,14,17,11,15,27,24,22);
                        case "foudre":
                            return array(3,8,20);
                        default :
                            return array();
                    }
                //REPRENDRE ICI
                case "quetzu" :
                    switch($element) {
                        case "eau" :
                            return array(1,2,3,8,9,5,4,6,19,21,22,13,11,12,14,16,24,29);
                        case "feu" :
                            return array();
                        case "bois" :
                            return array(2,7);
                        case "air" :
                            return array();
                        case "foudre":
                            return array(3,8,18);
                        default :
                            return array();
                    }
                default :
                    return array();
            }

    }

}
?>