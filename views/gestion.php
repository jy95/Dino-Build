
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
            <th>Mettre à jour</th>
            <th>A SUPPRIMER</th>
            <th>REPRENDRE PLAN UP</th>
            </thead>
            <tbody>
            <?php foreach($dinos as $element) { ?>
                <td><a href="<?php echo PATH_ABSOLUTE . '/dino/' . $element->getId() ?>"><?php echo $element->getNom()?></a> </td>
                <td><input type="radio" name="numeroDino" value="<?php echo $element->getId()?>" class="form-control"></td>
                <td><input type="radio" name="aSupprimer" value="<?php echo $element->getId()?>" class="form-control"></td>
                <td><input type="radio" name="dino" value="<?php echo $element->getId()?>" class="form-control"></td>
            <?php } ?>
            </tbody>
        </table>
        <input type="submit" name="Valider" class="btn btn-primary">
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
            <iframe name="compétence" id="fenêtre" scrolling="no"  frameBorder="0"></iframe>
            <a href="javascript:fermer()"><img height="25px" src="<?php echo PATH_ABSOLUTE . "/views/images/close_window.png" ?>" id="fenêtre2" alt="close"/></a>
            <input type="submit" class="btn btn-primary">
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
                        <ul class="selector">
                            <li id="image1">
                                <label>
                                    <input type="radio" name="race" value="kabuki"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Kabuki.png" alt="kabuki">
                                </label>
                            </li>
                            <li id="image2">
                                <label>
                                    <input type="radio" name="race" value="castivore"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Castivore.png" alt="castivore">
                                </label>
                            </li>
                            <li id="image3">
                                <label>
                                    <input type="radio" name="race" value="winks"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Winks.png" alt="winks">
                                </label>
                            </li>
                            <li id="image4">
                                <label>
                                    <input type="radio" name="race" value="quetzu"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Quetzu.png" alt="quetzu">
                                </label>
                            </li>
                            <li id="image5">
                                <label>
                                    <input type="radio" name="race" value="sirain"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Sirain.png" alt="sirain">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image6">
                                <label>
                                    <input type="radio" name="race" value="moueffe"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Moueffe.png" alt="moueffe">
                                </label>
                            </li>
                            <li id="image7">
                                <label>
                                    <input type="radio" name="race" value="pigmou"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Pigmou.png" alt="pigmou">
                                </label>
                            </li>
                            <li id="image8">
                                <label>
                                    <input type="radio" name="race" value="santaz"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Santaz.png" alt="santaz">
                                </label>
                            </li>
                            <li id="image9">
                                <label>
                                    <input type="radio" name="race" value="wanwan"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Wanwan.png" alt="wanwan">
                                </label>
                            </li>
                            <li id="image10">
                                <label>
                                    <input type="radio" name="race" value="feross"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Feross.png" alt="feross">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image11">
                                <label>
                                    <input type="radio" name="race" value="gorilloz"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Gorilloz.png" alt="gorilloz">
                                </label>
                            </li>
                            <li id="image12">
                                <label>
                                    <input type="radio" name="race" value="nuagoz"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Nuagoz.png" alt="nuagoz">
                                </label>
                            </li>
                            <li id="image13">
                                <label>
                                    <input type="radio" name="race" value="toufufu"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Toufufu.png" alt="toufufu">
                                </label>
                            </li>
                            <li id="image14">
                                <label>
                                    <input type="radio" name="race" value="rocky"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Rocky.png" alt="rocky">
                                </label>
                            </li>
                            <li id="image15">
                                <label>
                                    <input type="radio" name="race" value="soufflet"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Soufflet.png" alt="soufflet">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image16">
                                <label>
                                    <input type="radio" name="race" value="hippoclamp"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Hippoclamp.png" alt="hippoclamp">
                                </label>
                            </li>
                            <li id="image17">
                                <label>
                                    <input type="radio" name="race" value="smog"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Smog.png" alt="smog">
                                </label>
                            </li>
                            <li id="image18">
                                <label>
                                    <input type="radio" name="race" value="mahamuti"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Mahamuti.png" alt="mahamuti">
                                </label>
                            </li>
                            <li id="image19">
                                <label>
                                    <input type="radio" name="race" value="pteroz"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Pteroz.png" alt="pteroz">
                                </label>
                            </li>
                            <li id="image20">
                                <label>
                                    <input type="radio" name="race" value="planaille"/>
                                    <img class="img-responsive" src="views/images/Dinozs/Planaille.png" alt="planaille">
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

            <input type="submit" class="btn btn-primary">
        </div>
    </form>
<?php } ?>
