

<?php if (!empty($message)) echo "<p>" . $message . "</p>"?>

<?php if (empty($table) && empty($competencesdispo) && empty($_POST)) { ?>

    <form action="/helper" method="post">
        <section class="pagedImages">
            <input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
            <input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
            <input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
            <label for="page1">1</label>
            <label for="page2">2</label>
            <label for="page3">3</label>

            <ul>
                <li id="image1">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
                <li id="image2">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image3">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image4">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image5">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
            </ul>

            <!--
            <select name="choix" id="cd-dropdown" class="cd-select">
                <option value="-1" selected>Elément du up</option>
                <option value="feu" class="icon-feu">Feu</option>
                <option value="eau" class="icon-eau">Eau</option>
                <option value="bois" class="icon-bois">Bois</option>
                <option value="air" class="icon-air">Air</option>
                <option value="foudre" class="icon-foudre">Foudre</option>
                -->
        </section>
        <DIV ALIGN=CENTER> <input type="submit" class="bouton" value="Valider"> </DIV>
    </form>

<?php }?>

<?php if (!empty($table)) {?>
    <form action="/helper" method="post">

        <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>

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

    <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>

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