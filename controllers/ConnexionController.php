<?php

class ConnexionController {
    public function __construct(){

    }

    public function run()
    {
        if (empty($_SESSION['id']) && empty($_GET['error'])) {
            if (empty($_GET['code'])) {
                header('Location: '.$this->authorizationURL());
                die();
            } else {
                $code = $_GET['code'];
                try {
                    $donnees = $this->request($code);
                    $donnees = $this->getInfos($donnees["access_token"]);
                    $_SESSION['user'] = $donnees["name"];
                    $_SESSION['photo'] = str_replace('//', 'http://', $donnees["picture"]["url"]);
                    $_SESSION['id'] = $donnees["id"];
                    require_once(CHEMIN_VUES . 'connexion.php');
                } catch (Exception $e) {

                }
            }
        } else {
            require_once(CHEMIN_VUES . 'connexion.php');
        }


    }

    public function authorizationURL(){
        $url = "https://twinoid.com/oauth/auth?response_type=code&";
        $url = $url . "client_id=202&";
        $url = $url . "redirect_uri=http://dino-build.zz.mu/index.php?action=connexion";
        $url = $url . "&scope=contacts";
        $url = $url . "&state=Veuillez-autoriser-la-liaison";
        return $url;
    }

    public function request($code){

        $url = 'https://twinoid.com/oauth/token';
        $postdata = http_build_query(
            array(
                'client_id' => '202',
                'client_secret' => '',
                'redirect_uri' => 'http://dino-build.zz.mu/index.php?action=connexion',
                'code' => $code,
                'grant_type' => 'authorization_code'
            )
        );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);
        $result = file_get_contents($url,false, $context);
        return json_decode($result, true);

    }

    public function getInfos($id){

        $url = 'http://twinoid.com/graph/me?access_token=' . $id;

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
            )
        );
        $context  = stream_context_create($opts);
        $result = file_get_contents($url,false, $context);
        return json_decode($result, true);

    }
}
