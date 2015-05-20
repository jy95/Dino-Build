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