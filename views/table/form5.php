<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Canon à eau') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Canon à eau</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Gel') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Gel</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Zéro absolu') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Zéro Absolu</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Pétrification') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Pétrification</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Rayon Kaar-Sher') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Rayon Kaar-Sher</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Douche Ecossaise') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Douche Ecossaise</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Accuponcture') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Accuponcture</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sapeur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sapeur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Magasinier') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Magasinier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Perception') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Perception</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Coups sournois') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coups Sournois</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Coup Fatal') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coup Fatal</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Entrainement S-M') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Entraînement</br>sous-marin</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'EntrainementSMavancé') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Entraînement</br>Sous-Marin Avancé</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Maitre nageur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Nageur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Apprenti pecheur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Apprenti Pêcheur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Pecheur confirmé') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Pêcheur Confirmé</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Maitre pêcheur') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Pêcheur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Marécage') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Marecage</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="5">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Mutation') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Mutation</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Poche Ventrale') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Poche Ventrale</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sumo') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sumo</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Cuisinier') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cuisinier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sans pitié') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sans-Pitié</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Karaté Sous-Marin') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Karaté sous-marin</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Clone Aqueux') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Clone Aqueux</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Griffes Empoissonées') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes empoisonnées</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sang Acide') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sang-Acide</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Ecailles luminescent') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ecailles luminescentes</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Peau de Serpent') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Peau de serpent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>