<?php if (!empty($dinos) &&empty($_POST['numeroDino'])) { ?>
    <p>Cocher le dino que vous voulez mettre à jour + sélectionne l'élément</p>
    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post" class="form-group">
        <select name="element" class="form-control">
            <option value="eau">EAU</option>
            <option value="feu">FEU</option>
            <option value="air">AIR</option>
            <option value="foudre">FOUDRE</option>
            <option value="bois">BOIS</option>
        </select>
            <table class="table">
                <thead>
                <th>Nom du dino</th>
                <th>Choix</th>
                <th>A SUPPRIMER</th>
                </thead>
                <tbody>
                <?php foreach($dinos as $element) { ?>
                    <td><?php echo $element->getNom()?></td>
                    <td><input type="radio" name="numeroDino" value="<?php echo $element->getId()?>" class="form-control"></td>
                    <td><input type="radio" name="aSupprimer" value="<?php echo $element->getId()?>" class="form-control"></td>
                <?php } ?>
                </tbody>
            </table>
        <input type="submit" name="Valider" class="btn btn-default">
    </form>
<?php } ?>

<?php if (!empty($_POST['numeroDino'])) { ?>
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

    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post" role="form">
        <div class="form-group">
        <input type="hidden" name="numeroDino" value="<?php echo $_POST['numeroDino']?>">
        <input type="hidden" name="element" value="<?php echo $_POST['element'] ?>">
        <p>METTEZ A JOUR</p>
        <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>

            <table id=<?php echo $_POST['element'] ?> class="table">
                <thead>
                <tr>
                    <td class="head">niv.1</td>
                    <td class="head">niv.2</td>
                    <td class="head">niv.3</td>
                    <td class="head">niv.4</td>
                    <td class="head">niv.5</td>
                    <?php if (!empty($_POST['element'])&& $_POST['element'] == 'air') echo '<td class="head">niv.6</td>'; ?>
                </tr>
                </thead>
                <tbody>

                <?php
                require_once(CHEMIN_VUES . 'table/formulaires/form_' . $_POST['element'] . '.php');
                ?>

                </tbody>

            </table>
        <iframe name="compétence" id="fenêtre" scrolling="no" height="230px" frameBorder="0"></iframe>
        <input type="submit" class="btn btn-default">
        </div>
    </form>
<?php } ?>


<?php if (empty($dino)) { ?>
    <p> <?php echo $nombreInscrits?>/20 Dinos enregistrés</p>

    <p>ENREGISTER un nouveau dino</p>
    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post" role="form">
        <div class="form-group">
        Nom de votre dino : <input type="text" name="nouveauDino" maxlength="20" class="form-control"> <br>
        Race :

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <ul>
                        <li id="image1">
                            <label>
                                <input type="radio" name="race" value="kabuki"/>
                                <img class="img-responsive" src="views/images/Dinozs/Kabuki.png">
                            </label>
                        </li>
                        <li id="image2">
                            <label>
                                <input type="radio" name="race" value="castivore"/>
                                <img class="img-responsive" src="views/images/Dinozs/Castivore.png">
                            </label>
                        </li>
                        <li id="image3">
                            <label>
                                <input type="radio" name="race" value="winks"/>
                                <img class="img-responsive" src="views/images/Dinozs/Winks.png">
                            </label>
                        </li>
                        <li id="image4">
                            <label>
                                <input type="radio" name="race" value="quetzu"/>
                                <img class="img-responsive" src="views/images/Dinozs/Quetzu.png">
                            </label>
                        </li>
                        <li id="image5">
                            <label>
                                <input type="radio" name="race" value="sirain"/>
                                <img class="img-responsive" src="views/images/Dinozs/Sirain.png">
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="item">
                    <ul>
                        <li id="image6">
                            <label>
                                <input type="radio" name="race" value="moueffe"/>
                                <img class="img-responsive" src="views/images/Dinozs/Moueffe.png">
                            </label>
                        </li>
                        <li id="image7">
                            <label>
                                <input type="radio" name="race" value="pigmou"/>
                                <img class="img-responsive" src="views/images/Dinozs/Pigmou.png">
                            </label>
                        </li>
                        <li id="image8">
                            <label>
                                <input type="radio" name="race" value="santaz"/>
                                <img class="img-responsive" src="views/images/Dinozs/Santaz.png">
                            </label>
                        </li>
                        <li id="image9">
                            <label>
                                <input type="radio" name="race" value="wanwan"/>
                                <img class="img-responsive" src="views/images/Dinozs/Wanwan.png">
                            </label>
                        </li>
                        <li id="image10">
                            <label>
                                <input type="radio" name="race" value="feross"/>
                                <img class="img-responsive" src="views/images/Dinozs/Feross.png">
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="item">
                    <ul>
                        <li id="image11">
                            <label>
                                <input type="radio" name="race" value="gorilloz"/>
                                <img class="img-responsive" src="views/images/Dinozs/Gorilloz.png">
                            </label>
                        </li>
                        <li id="image12">
                            <label>
                                <input type="radio" name="race" value="nuagoz"/>
                                <img class="img-responsive" src="views/images/Dinozs/Nuagoz.png">
                            </label>
                        </li>
                        <li id="image13">
                            <label>
                                <input type="radio" name="race" value="toufufu"/>
                                <img class="img-responsive" src="views/images/Dinozs/Toufufu.png">
                            </label>
                        </li>
                        <li id="image14">
                            <label>
                                <input type="radio" name="race" value="rocky"/>
                                <img class="img-responsive" src="views/images/Dinozs/Rocky.png">
                            </label>
                        </li>
                        <li id="image15">
                            <label>
                                <input type="radio" name="race" value="soufflet"/>
                                <img class="img-responsive" src="views/images/Dinozs/Soufflet.png">
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="item">
                    <ul>
                        <li id="image16">
                            <label>
                                <input type="radio" name="race" value="hippoclamp"/>
                                <img class="img-responsive" src="views/images/Dinozs/Hippoclamp.png">
                            </label>
                        </li>
                        <li id="image17">
                            <label>
                                <input type="radio" name="race" value="smog"/>
                                <img class="img-responsive" src="views/images/Dinozs/Smog.png">
                            </label>
                        </li>
                        <li id="image18">
                            <label>
                                <input type="radio" name="race" value="mahamuti"/>
                                <img class="img-responsive" src="views/images/Dinozs/Mahamuti.png">
                            </label>
                        </li>
                        <li id="image19">
                            <label>
                                <input type="radio" name="race" value="pteroz"/>
                                <img class="img-responsive" src="views/images/Dinozs/Pteroz.png">
                            </label>
                        </li>
                        <li id="image20">
                            <label>
                                <input type="radio" name="race" value="planaille"/>
                                <img class="img-responsive" src="views/images/Dinozs/Planaille.png">
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <input type="submit" class="btn btn-default">
        </div>
    </form>
<?php } ?>
