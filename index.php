<?php
//ob_start("ob_gzhandler");
session_start ();
// Variables globales
define ( 'CHEMIN_VUES', 'views/' );
define('PATH_ABSOLUTE' , '/dinoBuildV2');

function chargerClasse($classe) {
    if (file_exists('models/' . $classe . '.class.php')){
        require 'models/' . $classe . '.class.php';
    }
}
spl_autoload_register ( 'chargerClasse' );

// Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (!empty ( $_GET ['action'] )) ? htmlentities ( $_GET ['action'] ) : 'default';

if ($action != 'info'){
    require_once (CHEMIN_VUES . 'header.php');
}

// Quelle action est demandée ?

switch ($action) {
    case 'dino' :
        if (is_numeric($_GET['dino']) && !empty(Donnees::getInstance()->getDinoUser($_GET['dino']))) {
            require_once('controllers/DinoController.php');
            $controller = new DinoController();
        }
        break;

    case 'helper' :
        require_once ('controllers/HelperController.php');
        $controller = new HelperController ();
        break;

    case 'demon' :
        require_once('controllers/CalculDemonController.php');
        $controller = new CalculDemonController ();
        break;

    case 'info' :
        try {
            if (!empty($_GET['element']) && !empty($_GET['competence']) && is_numeric($_GET['competence']) && Db::getInstance()->select_competence($_GET['element'], $_GET['competence']) != null) {
                require_once('controllers/InfoController.php');
                $controller = new InfoController ();
            }
        }catch (Exception $e){
        }
        break;

    case 'proba':
        require_once('controllers/ProbaController.php');
        $controller = new ProbaController ();
        break;

    case 'connexion':
        require_once ('controllers/ConnexionController.php');
        $controller = new ConnexionController ();
        break;

    case 'gestion':
        if (!empty($_SESSION['id'])) {
            require_once('controllers/GestionController.php');
            $controller = new GestionController ();
            $controller->run();
            break;
        }

    case 'deconnexion':
        if (!empty($_SESSION['id'])) {
            $_SESSION = array();
            require_once ('controllers/HelperController.php');
            $controller = new HelperController ();
            break;
        }

    default :
        require_once('controllers/HelperController.php');
        $controller = new HelperController ();
        break;
}

$controller->run ();
require_once (CHEMIN_VUES . 'footer.php');
//ob_flush();
?>