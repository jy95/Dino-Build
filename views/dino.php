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
    });

</script>
<style type="text/css">
    table#feu td:not(.head){

        background:radial-gradient(#e1a465, #d4893d);
        border: 2px solid #823b16;
    }

    table#foudre td:not(.head){

        background:radial-gradient(#efe46f, #ffc649);
        border: 2px solid rgb(157,80,12);
    }

    table#air td:not(.head){

        background:radial-gradient(#c1cdd9, #a0b4c3);
        border: 2px solid rgb(120,166,156);
    }

    table#bois td:not(.head){

        background:radial-gradient(#d18054, #a36050);
        border: 2px solid rgb(113,35,25);
    }

    table#eau td:not(.head){

        background:radial-gradient(#12a1ec, #0082c6);
        border: 2px solid rgb(23,90,160);
    }

    #section0, #section1 , #section2 , #section3, #section4 , #section5 {
        display: none;
    }

    #bouton0, #bouton1 , #bouton2 , #bouton3, #bouton4 , #bouton5 {
        cursor: pointer;
    }

</style>

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
            <td rowspan="6">
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
                    <img class="img-responsive" id="<?php echo "bouton" . $i?>" src="<?php echo "../views/images/competences/" . $element . ".jpg"?>" alt="<?php $element ?>">
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

        </tbody>

    </table>
</div>


<iframe name="compétence" id="fenêtre" scrolling="no" height="230px" frameBorder="0"></iframe>