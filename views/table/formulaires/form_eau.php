<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 1) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Canon à eau</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 4) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Gel</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 11) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Zéro Absolu</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 12) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Pétrification</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 24) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Rayon Kaar-Sher</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 5) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Douche Ecossaise</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 13) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Accuponcture</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 14) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sapeur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 25) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Magasinier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 2) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Perception</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 6) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coups Sournois</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 15) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coup Fatal</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 16) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Entraînement</br>sous-marin</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 26) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Entraînement</br>Sous-Marin Avancé</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 30) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Nageur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 7) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Apprenti Pêcheur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 17) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Pêcheur Confirmé</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 27) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Pêcheur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 18) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Marecage</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="5">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 3) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Mutation</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 8) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Poche Ventrale</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 19) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sumo</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 28) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cuisinier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 20) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sans-Pitié</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 9) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Karaté sous-marin</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 21) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Clone Aqueux</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 22) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes empoisonnées</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 29) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sang-Acide</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 10) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ecailles luminescentes</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 23) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/eau/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Peau de serpent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>