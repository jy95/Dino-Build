<script type="text/javascript">

    $( function() {

        $('#cd-dropdown').dropdown( {
            gutter : 5
        } );

        $('#id-dropdown').dropdown( {
            gutter : 14
        } );
    });

</script>

<script type="text/javascript">
    function ouvrir(){
        $("#fenêtre").animate({opacity:1});
        $("#fenêtre2").animate({opacity:1});
    }
    function fermer(){
        $("#fenêtre").animate({opacity:0});
        $("#fenêtre2").animate({opacity:0});
    }
</script>

<p>Bienvenue à l'outil de gestion des ups</p>

<?php if (empty($table) && empty($competencesdispo)) { ?>

    <p>Sélectionner la race de votre dino et l'élément du up</p>
    <form action="index.php?action=helper" method="post">
        <br> <select name="race" id="id-dropdown" class="cd-select" >
            <option value="-1" selected>Race de votre dino </option>
            <option value="winks">Winks</option>
            <option value="sirain">Sirain</option>
            <option value="kabuki">Kabuki</option>
            <option value="wanman">Wanman</option>
            <option value="moueffe">Moueffe</option>
            <option value="castivore">Castivore</option>
            <option value="feross">Feross</option>
            <option value="nuagoz">Nuagoz</option>
            <option value="planaille">Planaille</option>
            <option value="pteroz">Pteroz</option>
            <option value="toufufu">Toufufu</option>
            <option value="gorilloz">Gorilloz</option>
            <option value="rocky">Rocky</option>
            <option value="quetzu">Quetzu</option>
        </select> <select name="choix" id="cd-dropdown" class="cd-select">
            <option value="-1" selected>Elément du up</option>
            <option value="feu" class="icon-feu">Feu</option>
            <option value="eau" class="icon-eau">Eau</option>
            <option value="bois" class="icon-bois">Bois</option>
            <option value="air" class="icon-air">Air</option>
            <option value="foudre" class="icon-foudre">Foudre</option>
        </select> <DIV ALIGN=CENTER> <input type="submit" class="bouton" value="Valider"> </DIV>
    </form>

<?php }?>

<iframe name="compétence" id="fenêtre" scrolling="no" ></iframe>

<?php if (!empty($table)) {?>
    <form action="index.php?action=helper" method="post">
        <h3>Voici toutes les compétences disponibles en <?php echo $_POST['choix']?></h3>

        <h2>Sélectionner vos compétences acquises</h2>

        <table border="1" id=<?php echo $_SESSION ['choix'] ?>>
            <thead>
            <tr>
                <td class="head">niv.1</td>
                <td class="head">niv.2</td>
                <td class="head">niv.3</td>
                <td class="head">niv.4</td>
                <td class="head">niv.5</td>
                <?php if (!empty($_SESSION ['choix'])&& $_SESSION ['choix'] == 'air') echo '<td class="head">niv.6</td>'; ?>
            </tr>
            </thead>

            <tbody>

            <?php
            switch($_SESSION ['choix']) {
                case 'feu' :
                    require_once(CHEMIN_VUES . 'table/form4.php');
                    break;
                case 'eau' :
                    require_once(CHEMIN_VUES . 'table/form5.php');
                    break;
                case 'foudre' :
                    require_once(CHEMIN_VUES . 'table/form3.php');
                    break;
                case 'bois' :
                    require_once(CHEMIN_VUES . 'table/form2.php');
                    break;
                default :
                require_once(CHEMIN_VUES . 'table/form1.php');
            }
            ?>

            </tbody>

        </table>

        <fieldset>
            <br> <DIV ALIGN=CENTER> <input type="submit" class="bouton" name="mieux"
                                           value="Obtenir les compétences disponibles"> </DIV> <br>
        </fieldset>
    </form>

    <?php require_once(CHEMIN_VUES . 'table/message.php');?>

<?php }?>

<?php if (!empty($competencesdispo)){ ?>

    <h2>Voici les compétences disponibles avec vos compétences</h2>

    <table border="1" id=<?php echo $_SESSION ['choix'] ?>>
        <thead>
        <tr>
            <td class="head">niv.1</td>
            <td class="head">niv.2</td>
            <td class="head">niv.3</td>
            <td class="head">niv.4</td>
            <td class="head">niv.5</td>
            <?php if (!empty($_SESSION ['choix'])&& $_SESSION ['choix'] == 'air') echo '<td class="head">niv.6</td>'; ?>
        </tr>
        </thead>

        <tbody>

        <?php
        switch($_SESSION ['choix']) {
            case 'feu' :
                require_once(CHEMIN_VUES . 'table/res4.php');
                break;
            case 'eau' :
                require_once(CHEMIN_VUES . 'table/res5.php');
                break;
            case 'foudre' :
                require_once(CHEMIN_VUES . 'table/res3.php');
                break;
            case 'bois' :
                require_once(CHEMIN_VUES . 'table/res2.php');
                break;
            default :
                require_once(CHEMIN_VUES . 'table/res1.php');
        }
        ?>

        </tbody>

    </table>

    <?php require_once(CHEMIN_VUES . 'table/message.php');?>

    <?php if(!empty($competence)) { ?>
        <div class="result">
            <div class="message">
                <div class="ui">
                    <button>Afficher la meilleur compétence à choisir</button>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.result .message button').onclick = function(){ swal("Selon le plan UP encodé , le meilleur UP à choisir pour l'élément <?php echo $_SESSION['choix'];?> pour un dino de race <?php echo $_SESSION['race'];?> est :" ,
                "<?php echo $competence->nom(); ?>");};
        </script>


    <?php } else { ?>
        <div class="result">
            <div class="message">
                <div class="ui">
                    <button>Afficher la meilleur compétence à choisir</button>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.result .message button').onclick = function(){ swal("Désolé , Vous avez toutes les compétences recommandés du plan Up de ce dino (il reste peut-etre les autres compétences (double,racials,etc) ");};
        </script>
    <?php } ?>


<?php } ?>
