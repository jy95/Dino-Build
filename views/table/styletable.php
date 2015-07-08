
<?php if (!empty($_SESSION['choix'])) {?>

    <style type="text/css">

        table#<?php echo $_SESSION['element']?> td:not(.head){

        <?php switch($_SESSION['element']) {
            case 'air':
                echo "background:radial-gradient(#c1cdd9, #a0b4c3); \n";
                echo "border: 2px solid rgb(120,166,156);";
                break;
            case 'eau':
                echo "background:radial-gradient(#12a1ec, #0082c6); \n";
                echo "border: 2px solid rgb(23,90,160);";
                break;
            case 'bois':
                echo "background:radial-gradient(#d18054, #a36050); \n";
                echo "border: 2px solid rgb(113,35,25);";
                break;
            case 'feu':
                echo "background:radial-gradient(#e1a465, #d4893d); \n";
                echo "border: 2px solid #823b16;";
                break;
            default :
                echo "background:radial-gradient(#efe46f, #ffc649); \n";
                echo "border: 2px solid rgb(157,80,12);";
                break;

        } ?>
        }

    </style>

<?php } ?>
