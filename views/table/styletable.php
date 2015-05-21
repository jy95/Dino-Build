
<?php if (!empty($_SESSION['choix'])) {?>

<style type="text/css">

    table#<?php echo $_SESSION['choix']?> td:not(.head){
        background-image:url(<?php echo "views/images/competences/fd_table" . $_SESSION['choix'] . ".bmp"?>);
        <?php switch($_SESSION['choix']) {
            case 'air':
                echo "background-color:rgba(206,226,224,0.8); \n";
                echo "border: 2px solid rgb(120,166,156);";
                break;
            case 'eau':
                echo "background-color:rgba(153,180,223,0.8); \n";
                echo "border: 2px solid rgb(23,90,160);";
                break;
            case 'bois':
                echo "background-color:rgba(160,130,122,0.8); \n";
                echo "border: 2px solid rgb(113,35,25);";
                break;
            case 'feu':
                echo "background-color:rgb(228,166,168); \n";
                echo "border: 2px solid rgb(159,8,40);";
                break;
            default :
                echo "background-color:rgba(226,201,161,0.8); \n";
                echo "border: 2px solid rgb(157,80,12);";
                break;

        } ?>
    }

</style>

<?php } ?>