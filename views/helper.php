<?php if (!empty($error)) { ?>

<?php }  ?>

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


<?php if (!empty($race) && empty($element)) { ?>
    <form action="<?php echo PATH_ABSOLUTE . "/helper" ?>" method="post">
        <select name="element">
            <option value="feu" class="icon-feu">Feu</option>
            <option value="eau" class="icon-eau">Eau</option>
            <option value="bois" class="icon-bois">Bois</option>
            <option value="air" class="icon-air">Air</option>
            <option value="foudre" class="icon-foudre">Foudre</option>
        </select>
        <input type="hidden"  name="race" value="<?php echo $race?>"/>
        <input type="submit">
    </form>
<?php } ?>

<?php if (empty($race) && empty($table) && empty($competencesdispo)) { ?>

    <form action="<?php echo PATH_ABSOLUTE . "/helper" ?>" method="post">
        <section class="pagedImages">
            <input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
            <input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
            <input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
            <input id="page4" accesskey="4" type="radio" name="pagedImages1" title="Images page 4" />
            <label for="page1">1</label>
            <label for="page2">2</label>
            <label for="page3">3</label>
            <label for="page4">4</label>

            <ul>
                <li id="image1">
                    <label>
                        <input type="radio" name="race" value="kabuki"/>
                        <img src="views/images/Dinozs/Kabuki.png">
                    </label>
                </li>
                <li id="image2">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/Dinozs/Castivore.png">
                    </label>
                </li>
                <li id="image3">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/Dinozs/Winks.png">
                    </label>
                </li>
                <li id="image4">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/Dinozs/Quetzu.png">
                    </label>
                </li>
                <li id="image5">
                    <label>
                        <input type="radio" name="race" value="sirain"/>
                        <img src="views/images/Dinozs/Sirain.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/Dinozs/Moueffe.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="pigmou"/>
                        <img src="views/images/Dinozs/Pigmou.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="santaz"/>
                        <img src="views/images/Dinozs/Santaz.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="wanwan"/>
                        <img src="views/images/Dinozs/Wanwan.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="feross"/>
                        <img src="views/images/Dinozs/Feross.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image11">
                    <label>
                        <input type="radio" name="race" value="gorilloz"/>
                        <img src="views/images/Dinozs/Gorilloz.png">
                    </label>
                </li>
                <li id="image12">
                    <label>
                        <input type="radio" name="race" value="nuagoz"/>
                        <img src="views/images/Dinozs/Nuagoz.png">
                    </label>
                </li>
                <li id="image13">
                    <label>
                        <input type="radio" name="race" value="toufufu"/>
                        <img src="views/images/Dinozs/Toufufu.png">
                    </label>
                </li>
                <li id="image14">
                    <label>
                        <input type="radio" name="race" value="rocky"/>
                        <img src="views/images/Dinozs/Rocky.png">
                    </label>
                </li>
                <li id="image15">
                    <label>
                        <input type="radio" name="race" value="soufflet"/>
                        <img src="views/images/Dinozs/Soufflet.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image16">
                    <label>
                        <input type="radio" name="race" value="hippoclamp"/>
                        <img src="views/images/Dinozs/Hippoclamp.png">
                    </label>
                </li>
                <li id="image17">
                    <label>
                        <input type="radio" name="race" value="smog"/>
                        <img src="views/images/Dinozs/Smog.png">
                    </label>
                </li>
                <li id="image18">
                    <label>
                        <input type="radio" name="race" value="mahamuti"/>
                        <img src="views/images/Dinozs/Mahamuti.png">
                    </label>
                </li>
                <li id="image19">
                    <label>
                        <input type="radio" name="race" value="pteroz"/>
                        <img src="views/images/Dinozs/Pteroz.png">
                    </label>
                </li>
                <li id="image20">
                    <label>
                        <input type="radio" name="race" value="planaille"/>
                        <img src="views/images/Dinozs/Planaille.png">
                    </label>
                </li>
            </ul>

        </section>
        <DIV ALIGN=CENTER> <input type="submit" class="bouton" value="Valider"> </DIV>
    </form>

<?php }?>

<iframe name="compétence" id="fenêtre" scrolling="no" height="230px" frameBorder="0"></iframe>

<?php if (!empty($table)) { ?>
    <form action="<?php echo PATH_ABSOLUTE . "/helper" ?>" method="post">

        <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>

        <table id=<?php echo $_SESSION ['element'] ?>>
            <thead>
            <tr>
                <td class="head">niv.1</td>
                <td class="head">niv.2</td>
                <td class="head">niv.3</td>
                <td class="head">niv.4</td>
                <td class="head">niv.5</td>
                <?php if (!empty($_SESSION ['element'])&& $_SESSION ['element'] == 'air') echo '<td class="head">niv.6</td>'; ?>
            </tr>
            </thead>

            <tbody>

            <?php
            require_once(CHEMIN_VUES . 'table/formulaires/form_' . $_SESSION ['element'] . '.php');
            ?>

            </tbody>

        </table>

            <br> <DIV ALIGN=CENTER> <input type="submit" class="bouton" name="mieux"
                                           value="Obtenir les compétences disponibles"> </DIV> <br>

    </form>

    <?php require_once(CHEMIN_VUES . 'table/message.php');?>

<?php }?>

<?php if (!empty($competencesdispo)){ ?>

    <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>

    <table id=<?php echo $_SESSION ['element'] ?>>
        <thead>
        <tr>
            <td class="head">niv.1</td>
            <td class="head">niv.2</td>
            <td class="head">niv.3</td>
            <td class="head">niv.4</td>
            <td class="head">niv.5</td>
            <?php if (!empty($_SESSION ['element'])&& $_SESSION ['element'] == 'air') echo '<td class="head">niv.6</td>'; ?>
        </tr>
        </thead>

        <tbody>

        <?php
                require_once(CHEMIN_VUES . 'table/resultat/res_' . $_SESSION ['element'] . '.php');
        ?>

        </tbody>

    </table>

    <?php require_once(CHEMIN_VUES . 'table/message.php');?>
    <?php if(!empty($meilleurUp)) { ?>
        <div class="result">
            <div class="message">
                <div class="ui">
                    <button>Afficher la meilleur compétence à choisir</button>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.result .message button').onclick = function(){ swal("Up conseillé : " ,
                "<?php echo $meilleurUp->nom(); ?>");};
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

<div id="Bas">
    <?php echo $footer ?>
</div>