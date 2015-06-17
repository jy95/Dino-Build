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

    public function select_competencesdispo($choix, $table) {
        if(!empty($table)) {
            $query = "SELECT *   FROM " . $choix . " WHERE idparent IN (".implode(',',$table).") AND num NOT IN (".implode(',',$table).") OR (niv = 1 AND num NOT IN (".implode(',',$table)."))";
        } else {
            $query = "SELECT *   FROM " . $choix . "  WHERE niv = 1 ";
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
        $query = "SELECT * FROM " . $element . " WHERE num = '$num'";
        $result = $this->_db->query($query);

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
                        return array(3,2,1,5,4,8,9,6,7,18,20,21,11,12,17,13,15,22,27,24,28);
                    case "feu" :
                        return array(59,65,77,76,83,84);
                    case "bois" :
                        return array(29,33,32,39,40);
                    case "air" :
                        return array(117,123,135);
                    case "foudre":
                        return array(87,92,104);
                }
            case "winks" :
                switch($element) {
                    case "eau" :
                        return array(3,2,1,5,4,8,9,6,7,18,20,21,11,12,17,13,15,22,27,24,28);
                    case "feu" :
                        return array(59,65);
                    case "bois" :
                        return array(29,33);
                    case "air" :
                        return array(117,123,135);
                    case "foudre":
                        return array(87,86,92,93,90,105,104,102,99);
                }
            case "gorilloz" :
                switch($element) {
                    case "eau" :
                        return array(3,8,18);
                    case "feu" :
                        return array(59,65,77,76,83);
                    case "bois" :
                        return array(29,30,31,33,37,32,35,36,39,40,41,44,45,48,49,46,50,51,53);
                    case "air" :
                        return array(116,120,128);
                    case "foudre":
                        return array(87,92,104);
                }
            case "castivore" :
                switch($element) {
                    case "eau" :
                        return array(3,8,9,18,20,19);
                    case "feu" :
                        return array(59,65,77);
                    case "bois" :
                        return array(29,30,31,32,33,35,37,39,40,48,49,50,45);
                    case "air" :
                        return array(115,117,118,122,123,125,133,134,135,136,141);
                    case "foudre":
                        return array(87,92,104,103);
                }
            case "feross" :
                switch($element) {
                    case "eau" :
                        return array(3,2,8,9,6,18,20,21,15,24,28);
                    case "feu" :
                        return array(58,59,65,64,63,77,76,75,74,73,81,82,83,84);
                    case "bois" :
                        return array(29,31,33,32,37,48,49,39,40,50);
                    case "air" :
                        return array(115,118);
                    case "foudre":
                        return array(87,92,104);
                }
            case "moueffe" :
                switch($element) {
                    case "eau" :
                        return array(3,8,18,2);
                    case "feu" :
                        return array(57,58,59,60,61,63,64,65,66,73,74,75,76,77,81,82,83,84,62,71,69,79);
                    case "bois" :
                        return array(30,35,44,53,56);
                    case "air" :
                        return array(116,120,128,129);
                    case "foudre":
                        return array(87,92,104);
                }
            case "rocky" :
                switch($element) {
                    case "eau" :
                        return array(3,8,18,9,20);
                    case "feu" :
                        return array(59,57,65,61,77,69);
                    case "bois" :
                        return array(29,33,40);
                    case "air" :
                        return array(115,118,124);
                    case "foudre":
                        return array(87,85,86,92,88,93,90,105,104,103,99,94,95,106,107,112,113);
                }
            case "wanman" :
                switch($element) {
                    case "eau" :
                        return array(3,8,18,9,20);
                    case "feu" :
                        return array(57,59,65,61,69,77,76,83,84);
                    case "bois" :
                        return array(29,31,33,37,48,40,32,39,50,49);
                    case "air" :
                        return array(115,118,124);
                    case "foudre":
                        return array(85,86,87,92,88,93,90,105,104,94,95,106,107,112,113,103);
                }
            case "kabuki" :
                switch($element) {
                    case "eau" :
                        return array(1,3,8,9,5,4,18,20,21,13,12,11,22,27);
                    case "feu" :
                        return array(59,65,64,77,75);
                    case "bois" :
                        return array(29,33);
                    case "air" :
                        return array(115,116,117,118,120,123,135,134,124,125,128,129,141,136);
                    case "foudre":
                        return array(87,92,93,104,105);
                }
            case "toufufu" :
                switch($element) {
                    case "eau" :
                        return array(3,2,8,15);
                    case "feu" :
                        return array(59,65,77);
                    case "bois" :
                        return array(29,31,33,37,36,48,46,40,49);
                    case "air" :
                        return array(116,115,117,118,120,122,128,133,124);
                    case "foudre":
                        return array(87,85,86,92,88,93,90,104,105,99,95,107,113,103);
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
                }
            case "pigmou" :
                switch($element) {
                    case "eau" :
                        return array(3,2,8,18);
                    case "feu" :
                        return array(59,57,58,65,64,63,60,61,62,77,66,75,67,71,73,74,76,81,82,83,84);
                    case "bois" :
                        return array(30,35,44,53,56);
                    case "air" :
                        return array(116,120,128,129);
                    case "foudre":
                        return array(87,92,104);
                }
            case "nuagoz" :
                switch($element) {
                    case "eau" :
                        return array(3,1,8,9,5,4,18,20,21,13,12,11,22,27,19,2,6,15,24,28);
                    case "feu" :
                        return array(59,65,77,76);
                    case "bois" :
                        return array(30,35);
                    case "air" :
                        return array(115,117,118,123,135,134,125,141,136,124,116,120,128);
                    case "foudre":
                        return array(87,92,93,104,105,102,103,86,90,99);
                }
            case "planaille" :
                switch($element) {
                    case "eau" :
                        return array(3,8,9,18,20,21);
                    case "feu" :
                        return array(59,65,77);
                    case "bois" :
                        return array(29,33,40);
                    case "air" :
                        return array(115,117,118,123,135,134,124,125,141,136);
                    case "foudre":
                        return array(87,85,86,92,88,93,90,104,105,102,103,94,95,106,107,112,113,111);
                }
            case "pteroz" :
                switch($element) {
                    case "eau" :
                        return array(3,8,18);
                    case "feu" :
                        return array(57,58,59,65,60,63,64,77,66,76,75,74,73,83,82,81,84);
                    case "bois" :
                        return array(29,33,32,39);
                    case "air" :
                        return array(115,116,117,118,120,121,123,135,134,128,131,125,129,141,138,136);
                    case "foudre":
                        return array(87,92,104);
                }
            case "quetzu" :
                	switch($element) {
                		case "eau" :
                			return array(1,2,3,8,9,5,4,6,19,21,22,13,11,12,14,16,29,24);
                		case "feu" :
                			return array(33,32,31,40,34,39,38,35,41,42,49,50,51,52,59,58,57,60,53);
                		case "bois" :
                			return array(30,35);
                		case "air" :
                			return array();
                		case "foudre":
                			return array(87,92,102);
                	}
        }

    }

}
?>
