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


<p>Voici les compétences du dino <?php echo $dino->getNom(); ?>, de race <?php echo $dino->getRace(); ?> de l'user <?php echo $dino->getUser();?></p>

<div class="table-responsive">
<table class="table">
    <thead>
    <th colspan="2">
        Dino-Build
    </th>
    </thead>
    <tbody>
    <tr>
        <td rowspan="6">
            <img class="img-responsive" src="<?php echo "../views/images/Dinozs/" . ucfirst($dino->getRace()) . ".png"?>" alt="dino">
        </td>
    </tr>
    <?php foreach ($elements as $element) { ?>
    <tr>
        <td>
            <img class="img-responsive" src="<?php echo "../views/images/competences/" . $element . ".jpg"?>" alt="<?php $element ?>">
        </td>
    </tr>
    <?php } ?>

    </tbody>

</table>
</div>

<?php foreach ($elements as $element) { ?>
    <?php $_SESSION['element'] = $element;?>
    <?php require(CHEMIN_VUES . 'table/styletable.php'); ?>
    <?php $funcname = "get" . ucfirst($_SESSION['element']);?>
    <?php foreach($dino->$funcname() as $numero) {
        $competencesdispo[] = new Competence($numero, null, null, null, null, null, null, null);
    } ?>

    <div class="table-responsive">
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

    <?php $competencesdispo = null ?>
    <?php $_SESSION['element'] = null?>
<?php } ?>



<iframe name="compétence" id="fenêtre" scrolling="no" height="230px" frameBorder="0"></iframe>