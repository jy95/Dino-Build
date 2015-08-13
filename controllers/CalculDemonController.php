<?php
class CalculDemonController
{

    function __construct()
    {
    }

    public function run()
    {
        $total = 0;

        $GainsLvl = array(1, 2, 3, 4, 5, 7, 8, 10, 12, 17, 18, 19, 22, 25, 28, 31, 35, 39, 43, 48, 53, 58, 64,
            70, 77, 84, 92, 101, 110, 120, 131, 142, 155, 168, 183, 199, 216, 234, 254, 275, 298, 323, 350, 379,
            410, 443, 479, 519, 563, 608, 657, 711, 768, 803, 897, 969, 1047, 1131, 1222, 1320, 1425, 1539, 1662,
            1795, 1938, 2092, 2259, 2439, 2633, 2842
        );

        if(!empty($_POST['level']) && !empty($_POST['count'])){

            foreach ($_POST['level'] as $i=>$element){
                if (is_numeric($element) && $element > 0 && $element < 71 && is_numeric($_POST['count'][$i]) && $_POST['count'][$i] > 0){
                    $total += $GainsLvl[$element -1 ] * $_POST['count'][$i];
                } else {
                    $_POST['level'][$i] = 1;
                    $_POST['count'][$i] = 0;
                }

            }


        }
        require_once(CHEMIN_VUES . 'demon.php');

    }
}
?>