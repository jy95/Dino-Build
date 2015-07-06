<?php
session_start ();
// Variables globales
define ( 'CHEMIN_VUES', 'views/' );

function chargerClasse($classe) {
    if (file_exists('models/' . $classe . '.class.php')){
        require 'models/' . $classe . '.class.php';
    }
}
spl_autoload_register ( 'chargerClasse' );


// Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (isset ( $_GET ['action'] )) ? htmlentities ( $_GET ['action'] ) : 'default';
// Quelle action est demandée ?
switch ($action) {
    case 'helper' :
        require_once (CHEMIN_VUES . 'header.php');
        require_once ('controllers/HelperController.php');
        $controller = new HelperController ();
        $controller->run ();
        require_once (CHEMIN_VUES . 'footer.php');
        break;
    case 'demon' :
        require_once (CHEMIN_VUES . 'header.php');
        require_once('controllers/CalculDemonController.php');
        $controller = new CalculDemonController ();
        $controller->run ();
        require_once (CHEMIN_VUES . 'footer.php');
        break;
    case 'info' :
        try {
            if (!empty($_GET['element']) && !empty($_GET['competence']) && is_numeric($_GET['competence']) && Db::getInstance()->select_competence($_GET['element'], $_GET['competence']) != null) {
                require_once('controllers/InfoController.php');
                $controller = new InfoController ();
                $controller->run();

            }
        }catch (Exception $e){
        }
        break;
    case 'proba':
        require_once (CHEMIN_VUES . 'header.php');
        require_once('controllers/ProbaController.php');
        $controller = new ProbaController ();
        $controller->run ();
        require_once (CHEMIN_VUES . 'footer.php');
        break;
    case 'connexion':
        require_once (CHEMIN_VUES . 'header.php');
        require_once ('controllers/ConnexionController.php');
        $controller = new ConnexionController ();
        $controller->run ();
        require_once (CHEMIN_VUES . 'footer.php');
        break;
    case 'gestion':
        if (!empty($_SESSION['id'])) {
            require_once(CHEMIN_VUES . 'header.php');
            require_once('controllers/GestionController.php');
            $controller = new GestionController ();
            $controller->run();
            require_once(CHEMIN_VUES . 'footer.php');
            break;
        }
    default :
        require_once (CHEMIN_VUES . 'header.php');
        require_once ('controllers/HelperController.php');
        $controller = new HelperController ();
        $controller->run ();
        require_once (CHEMIN_VUES . 'footer.php');
        break;
}

?>