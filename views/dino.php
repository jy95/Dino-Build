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

<script type="text/javascript">
    $(document).ready(function() {

        $("#bouton0").click(function() {
            $("#section0").slideToggle("slow");
        });

        $("#bouton1").click(function() {
            $("#section1").slideToggle("slow");
        });

        $("#bouton2").click(function() {
            $("#section2").slideToggle("slow");
        });

        $("#bouton3").click(function() {
            $("#section3").slideToggle("slow");
        });

        $("#bouton4").click(function() {
            $("#section4").slideToggle("slow");
        });

        $("#bouton5").click(function() {
            $("#section5").slideToggle("slow");
        });

    });

</script>

<p>Voici les compétences du dino <?php echo $dino->getNom(); ?>, de race <?php echo $dino->getRace(); ?> de l'user <?php echo $dino->getUser();?></p>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th colspan="2">
                Dino-Build
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td rowspan="8">
                <img class="img-responsive" src="<?php echo "../views/images/Dinozs/" . ucfirst($dino->getRace()) . ".png"?>" alt="dino">
            </td>
        </tr>
        <?php
        foreach ($elements as $i=>$element) {
            $_SESSION['element'] = $element;
            $funcname = "get" . ucfirst($_SESSION['element']);
            foreach($dino->$funcname() as $numero) {
                $competencesdispo[] = new Competence($numero, null, null, null, null, null, null, null);
            }
            ?>
            <tr>
                <td>
                    <img class="img-responsive" id="<?php echo "bouton" . $i?>" src="<?php echo "../views/images/competences/" . $element . ".png"?>" alt="<?php $element ?>">
                    <div class="table-responsive" id="<?php echo "section" . $i ?>">
                        <table id="<?php echo $element ?>" class="table">
                            <thead>
                            <tr>
                                <td class="head">niv.1</td>
                                <td class="head">niv.2</td>
                                <td class="head">niv.3</td>
                                <td class="head">niv.4</td>
                                <td class="head">niv.5</td>
                                <?php if (!empty($element)&& $element == 'air') echo '<td class="head">niv.6</td>'; ?>
                            </tr>
                            </thead>

                            <tbody>

                            <?php
                            require_once(CHEMIN_VUES . 'table/resultat/res_' . $element . '.php');
                            ?>

                            </tbody>

                        </table>
                    </div>
                </td>
            </tr>
            <?php
            $competencesdispo = null;
            $_SESSION['element'] = null;
        } ?>
        <tr>
            <td>
                <img class="img-responsive" id="bouton5"  src="../views/images/competences/double.png" alt="double">
                <div class="table-responsive" id="section5">
                    <table id="double" class="table">
                        <thead>
                        <tr>
                            <td class="head"></td>
                            <td class="reste">Foudre</td>
                            <td class="reste">Air</td>
                            <td class="reste">Eau</td>
                            <td class="reste">Bois</td>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="reste">Feu</td>
                            <td class="<?php echo $codeCouleur[6];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/7" ?>" alt="competence" target="compétence" onclick="ouvrir();">Sprint </a></td>
                            <td class="<?php echo $codeCouleur[8];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/9" ?>" alt="competence" target="compétence" onclick="ouvrir();">Vendetta</a></td>
                            <td class="<?php echo $codeCouleur[1];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/2" ?>" alt="competence" target="compétence" onclick="ouvrir();">Maitre Elementaire</a></td>
                            <td class="<?php echo $codeCouleur[5];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/6" ?>" alt="competence" target="compétence" onclick="ouvrir();">Armure de Basalte</a></td>
                        </tr>
                        <tr>
                            <td class="reste">Bois</td>
                            <td class="<?php echo $codeCouleur[4];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/5" ?>" alt="competence" target="compétence" onclick="ouvrir();">Choc</a></td>
                            <td class="<?php echo $codeCouleur[3];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/4" ?>" alt="competence" target="compétence" onclick="ouvrir();">Secousse</a></td>
                            <td class="<?php echo $codeCouleur[7];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/8" ?>" alt="competence" target="compétence" onclick="ouvrir();">Infatiguable</a></td>
                            <td class="reste"></td>
                        </tr>
                        <tr>
                            <td class="reste">Eau</td>
                            <td class="<?php echo $codeCouleur[0];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/1" ?>" alt="competence" target="compétence" onclick="ouvrir();">Electrolyse</a></td>
                            <td class="<?php echo $codeCouleur[9];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/10" ?>" alt="competence" target="compétence" onclick="ouvrir();">Bulle</a></td>
                            <td class="reste"></td>
                            <td class="reste"></td>
                        </tr>
                        <tr>
                            <td class="reste">Air</td>
                            <td class="<?php echo $codeCouleur[2];?>"><a href="<?php echo PATH_ABSOLUTE . "/info/double/3" ?>" alt="competence" target="compétence" onclick="ouvrir();">Surcharge</a></td>
                            <td class="reste"></td>
                            <td class="reste"></td>
                            <td class="reste"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <a href="<?php echo PATH_ABSOLUTE . "/info/invocations/" . $invocation->num() ?>" alt="competence" target="compétence" onclick="ouvrir();">
                    <img class="img-responsive" src="../views/images/competences/invocs.png" alt="invocations">
                </a>
            </td>
        </tr>
        </tbody>

    </table>
</div>


<iframe name="compétence" id="fenêtre" scrolling="no" frameBorder="0"></iframe>
<a href="javascript:fermer()"><img height="25px" src="<?php echo PATH_ABSOLUTE . "/views/images/close_window.png" ?>" id="fenêtre2" alt="close"/></a>