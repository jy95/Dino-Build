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
            <?php $i=0; ?>
            <?php if ($_SESSION ['choix'] == 'air') {?>

                <tr>
                    <td rowspan="4">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Agilité') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Agilité</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Esquive') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Esquive</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Elasticité') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Elasticité</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Disque Vacuum') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Disque Vacuum</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Trou Noir ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Trou Noir</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                </tr>
                <tr>
                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Saut') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Saut</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Attaque Plongeante') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Attaque Plongeante</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>

                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Maître Lévitateur ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Lévitateur</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Furtivité') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Furtivité</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Stratégie') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Stratégie</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Analyse') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Analyse</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Spécialiste') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Spécialiste</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Talon d\'Achille ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Talon d'Achille</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Cueillette') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cueillette</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Oeil de Lynx ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Oeil de Lynx</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Nuage Toxique ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Nuage Toxique</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Haleine Fétive ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Haleine Fétive</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="5">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Mistral') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Mistral</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td rowspan="3">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Tai-Chi ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Tai-Chi</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Éveil') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Éveil</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Professeur') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Professeur</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Méditation Solitaire') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Méditation Solitaire</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Méditation Transcend') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Méditation Trans.</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Forme Etherale ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Forme Etherale</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Paumes Éjectables ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paumes Éjectables</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Tornade') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Tornade</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Vent Vif ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vent Vif</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Souffle de Vie ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Souffle de Vie</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php foreach($table as $i => $competence) {?>
                            <?php if ( $competence->nom() == 'Forme Vaporeuse ') { ?>
                                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Forme Vaporeuse</a>
                                <?php break; } ?>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>

        <fieldset>
            <br> <DIV ALIGN=CENTER> <input type="submit" class="bouton" name="mieux"
                                           value="Obtenir les compétences disponibles"> </DIV> <br>
        </fieldset>
    </form>

    <ul style="text-align:left; margin-bottom:70px;">
        <li>A : Cette compétence peut remplacer une attaque.</li>
        <li>P : Cette compétence s'applique à tout moment.</li>
        <li>C : Cette compétence permet de récolter des ingrédients dans différents lieux.</li>
        <li>E : Cette compétence peut se déclencher avant chaque attaque.</li>
        <li>S : Cette compétence a un effet particulier.</li>
        <li>U : Cette compétence est unique et s'applique à tous vos Dinoz.</li>
    </ul>

<?php }?>

<?php if (!empty($competencesdispo)){ ?>

    <h2>Voici les compétences disponibles avec vos compétences</h2>

    <ul style="text-align:left; margin-bottom:70px;">
        <li>A : Cette compétence peut remplacer une attaque.</li>
        <li>P : Cette compétence s'applique à tout moment.</li>
        <li>C : Cette compétence permet de récolter des ingrédients dans différents lieux.</li>
        <li>E : Cette compétence peut se déclencher avant chaque attaque.</li>
        <li>S : Cette compétence a un effet particulier.</li>
        <li>U : Cette compétence est unique et s'applique à tous vos Dinoz.</li>
    </ul>

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
