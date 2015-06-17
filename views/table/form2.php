<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Carapace') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Carapace</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sympathique') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sympathique</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Planificateur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Planificateur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Héritage Faroe') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Héritage Faroe</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Esprit Gorilloz') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Esprit Gorilloz</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Vignes') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vignes</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Etat Primal') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Etat Primal</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Printemps Précoce') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Printemps Précoce</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Garde Forestier') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Garde Forestier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Endurance') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Endurance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Fouille') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Fouille</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Détective') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Détective</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Archéologue') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archéologue</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Expert en Fouilles') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Expert en Fouilles</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Croissance') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Croissance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Cocon') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cocon</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Géant') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Géant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Colosse') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Colosse</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Large Machoire') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Large Machoire</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sauvagerie') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sauvagerie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Tenacité') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ténacité</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Charisme') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Charisme</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Leader') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Leader</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Résistance à la Magi') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Résistance à la</br>Magie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Renforts korgons') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Renforts Korgon</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Acrobate') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Acrobate</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Instinct Sauvage') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Instinct Sauvage</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Ingénieur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ingénieur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>