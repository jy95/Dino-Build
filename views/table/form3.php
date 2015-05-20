<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Focus') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Focus</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Concentration') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Concentration</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Voie de Kaos') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Voie de Kaos</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'CrépusculeFlamboyant') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Crépuscule Flamboyant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Archange Corrosif ') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archange Corrosif</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == ' Voie de Gaïa') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Voie de Gaïa</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Aube Feuillue ') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aube Feuillue</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Archange Génésif ') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archange Génésif</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Régénérescence') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Régénérescence</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Purée Salvatrice') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Purée Salvatrice</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Bénédiction') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Bénédiction</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Prêtre') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Prêtre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Aura Hermétique') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aura Hermétique</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Intelligence') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Intelligence</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Premiers Soins') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Premiers Soins</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Médecine') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Médecine</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Brancardier') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Brancardier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Adrénaline') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Adrénaline</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Paratonnerre') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paratonnerre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Fission élémentaire') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Fission élémentaire</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Marchand') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Marchand</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Croc-Diamant') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Croc-Diamant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Célérité') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Célérité</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="3">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Coup Double') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coup Double</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Foudre') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Foudre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Danse Foudroyante ') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Danse Foudroyante</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Plan de Carrière') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Plan de Carrière</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Réincarnation') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Réincarnation</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Attaque-éclair') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Attaque-éclair</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Embuche') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="index.php?action=info&amp;competence=<?php echo $competence->num(); ?>" target="compétence" onclick='ouvrir();'>Embuche</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>