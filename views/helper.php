<?php if (!empty($_SESSION ['dino'])) { ?>
    <p>Attention ! Le système utilise actuellement le plan up d'un de vos dinos <br>
        Pour arrêter, il vous suffit d'appuyer sur ce <a href="<?php echo PATH_ABSOLUTE . "/helper/stop" ?>">lien</a>
    </p>
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
        <input type="hidden"  name="race" value="<?php echo $race?>"/>

        <!-- Wrapper for slides -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <ul class="selector">
                        <li id="image1">
                            <label>
                                <input type="radio" name="element" value="feu"/>
                                <img class="img-responsive" src="<?php echo PATH_ABSOLUTE . "/views/images/Elements/Feu.png"?>" alt="Feu">
                            </label>
                        </li>
                        <li id="image2">
                            <label>
                                <input type="radio" name="element" value="eau"/>
                                <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Elements/Eau.png"?>" alt="Eau">
                            </label>
                        </li>
                        <li id="image3">
                            <label>
                                <input type="radio" name="element" value="air"/>
                                <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Elements/Air.png"?>" alt="Air">
                            </label>
                        </li>
                        <li id="image4">
                            <label>
                                <input type="radio" name="element" value="foudre"/>
                                <img class="img-responsive" src="<?php echo PATH_ABSOLUTE . "/views/images/Elements/Foudre.png"?>" alt="Foudre">
                            </label>
                        </li>
                        <li id="image5">
                            <label>
                                <input type="radio" name="element" value="bois"/>
                                <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Elements/Bois.png"?>" alt="Bois">
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
        <DIV ALIGN="CENTER">
            <input type="submit" class="btn btn-primary">
        </DIV>

    </form>
<?php } ?>

<?php if (empty($race) && empty($table) && empty($competencesdispo)) { ?>

    <form action="<?php echo PATH_ABSOLUTE . "/helper" ?>" method="post">
        <div class="form-group">

            <!-- Wrapper for slides -->
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
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Kabuki.png"?>" alt="kabuki">
                                </label>
                            </li>
                            <li id="image2">
                                <label>
                                    <input type="radio" name="race" value="castivore"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Castivore.png"?>" alt="castivore">
                                </label>
                            </li>
                            <li id="image3">
                                <label>
                                    <input type="radio" name="race" value="winks"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Winks.png"?>" alt="winks">
                                </label>
                            </li>
                            <li id="image4">
                                <label>
                                    <input type="radio" name="race" value="quetzu"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Quetzu.png"?>" alt="quetzu">
                                </label>
                            </li>
                            <li id="image5">
                                <label>
                                    <input type="radio" name="race" value="sirain"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Sirain.png"?>" alt="sirain">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image6">
                                <label>
                                    <input type="radio" name="race" value="moueffe"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Moueffe.png"?>" alt="moueffe">
                                </label>
                            </li>
                            <li id="image7">
                                <label>
                                    <input type="radio" name="race" value="pigmou"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Pigmou.png"?>" alt="pigmou">
                                </label>
                            </li>
                            <li id="image8">
                                <label>
                                    <input type="radio" name="race" value="santaz"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Santaz.png"?>" alt="santaz">
                                </label>
                            </li>
                            <li id="image9">
                                <label>
                                    <input type="radio" name="race" value="wanwan"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Wanwan.png"?>" alt="wanwan">
                                </label>
                            </li>
                            <li id="image10">
                                <label>
                                    <input type="radio" name="race" value="feross"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Feross.png"?>" alt="feross">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image11">
                                <label>
                                    <input type="radio" name="race" value="gorilloz"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Gorilloz.png"?>" alt="gorilloz">
                                </label>
                            </li>
                            <li id="image12">
                                <label>
                                    <input type="radio" name="race" value="nuagoz"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Nuagoz.png"?>" alt="nuagoz">
                                </label>
                            </li>
                            <li id="image13">
                                <label>
                                    <input type="radio" name="race" value="toufufu"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Toufufu.png"?>" alt="toufufu">
                                </label>
                            </li>
                            <li id="image14">
                                <label>
                                    <input type="radio" name="race" value="rocky"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Rocky.png"?>" alt="rocky">
                                </label>
                            </li>
                            <li id="image15">
                                <label>
                                    <input type="radio" name="race" value="soufflet"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Soufflet.png"?>" alt="soufflet">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="item">
                        <ul class="selector">
                            <li id="image16">
                                <label>
                                    <input type="radio" name="race" value="hippoclamp"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Hippoclamp.png"?>" alt="hippoclamp">
                                </label>
                            </li>
                            <li id="image17">
                                <label>
                                    <input type="radio" name="race" value="smog"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE . "/views/images/Dinozs/Smog.png"?>" alt="smog">
                                </label>
                            </li>
                            <li id="image18">
                                <label>
                                    <input type="radio" name="race" value="mahamuti"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Mahamuti.png"?>" alt="mahamuti">
                                </label>
                            </li>
                            <li id="image19">
                                <label>
                                    <input type="radio" name="race" value="pteroz"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Pteroz.png"?>" alt="pteroz">
                                </label>
                            </li>
                            <li id="image20">
                                <label>
                                    <input type="radio" name="race" value="planaille"/>
                                    <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/Dinozs/Planaille.png"?>" alt="planaille">
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
            <DIV ALIGN="CENTER">
                <input type="submit" class="btn btn-primary">
            </DIV>
        </div>
    </form>

<?php }?>

<iframe name="compétence" id="fenêtre" scrolling="no" height="230px" frameBorder="0"></iframe>

<?php if (!empty($table)) { ?>
    <div class="test">
        <form action="<?php echo PATH_ABSOLUTE . "/helper" ?>" method="post" role="form">

            <?php
            require_once(CHEMIN_VUES . 'table/styletable.php');
            ?>
            <div class="table-responsive">
                <table id=<?php echo $_SESSION ['element'] ?> class="table">
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
            </div>
            <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/competences/description.png"?>" alt="informations">
            <DIV ALIGN="CENTER">
                <input type="submit" class="btn btn-primary" name="mieux" value="Obtenir les compétences disponibles">
            </DIV>
        </form>

    </div>

<?php }?>

<?php if (!empty($competencesdispo)){ ?>

    <?php require_once(CHEMIN_VUES . 'table/styletable.php'); ?>
    <div class="test">
        <div class="table-responsive">
            <table id="<?php echo $_SESSION ['element'] ?>" class="table">
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
                require_once(CHEMIN_VUES . 'table/resultat/res_' . $_SESSION['element'] . '.php');
                ?>

                </tbody>

            </table>
        </div>
        <img class="img-responsive" src="<?php echo PATH_ABSOLUTE ."/views/images/competences/description.png"?>" alt="informations">
    </div>
    <?php if(!empty($meilleurUp)) { ?>
        <div class="result">
            <div class="meilleurUp">
                <div class="ui">
                    <button class="btn btn-primary">Afficher la meilleur compétence à choisir</button>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.result .meilleurUp button').onclick = function(){ swal("Up conseillé : " ,
                "<?php echo $meilleurUp->nom(); ?>");};
        </script>


    <?php } else { ?>
        <div class="result">
            <div class="meilleurUp">
                <div class="ui">
                    <button>Afficher la meilleur compétence à choisir</button>
                </div>
            </div>
        </div>


        <script>
            document.querySelector('.result .meilleurUp button').onclick = function(){ swal("Désolé , Vous avez toutes les compétences recommandés du plan Up de ce dino (il reste peut-etre les autres compétences (double,racials,etc) ");};
        </script>
    <?php } ?>

    <?php if(!empty($invocation)) { ?>
        <div class="result">
            <div class="invocation">
                <div class="ui">
                    <button class="btn btn-primary">Afficher l'invocation du dino </button>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.result .invocation button').onclick = function(){
                swal({
                    title: "<?php echo $invocation->nom(); ?>",
                    html: '<?php echo $invocation->description() . utf8_encode($parents) ?>'
                });
            };
        </script>

    <?php } ?>

<?php } ?>


<footer id="Bas">
    <?php echo $footer ?>
</footer>