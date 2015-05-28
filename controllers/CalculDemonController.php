<?php
class CalculDemonController
{

    function __construct()
    {
    }

    public function run()
    {
        $total = 0;
        if(!empty($_POST['td'])){
            $user_data = $_POST['td'];
            $GainsLvl = array(1, 2, 3, 4, 5, 7, 8, 10, 12, 17, 18, 19, 22, 25, 28, 31, 35, 39, 43, 48, 53, 58, 64,
                70, 77, 84, 92, 101, 110, 120, 131, 142, 155, 168, 183, 199, 216, 234, 254, 275, 298, 323, 350, 379,
                410, 443, 479, 519, 563, 608
            );

            for($compteur = 0 ; $compteur < 50 ; $compteur++){

                $total += $GainsLvl[$compteur] * $user_data[$compteur];

            }

        }
        require_once(CHEMIN_VUES . 'demon.php');

    }
}
?>