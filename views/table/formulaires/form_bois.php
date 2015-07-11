<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 1) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Carapace</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 4) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sympathique</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 10) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Planificateur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 11) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Héritage Faroe</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 22) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Esprit Gorilloz</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 5) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vignes</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 12) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Etat Primal</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 13) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Printemps Précoce</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 23) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Garde Forestier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 2) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Endurance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 6) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Fouille</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 14) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Détective</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 24) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archéologue</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 15) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Expert en Fouilles</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 7) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Croissance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 16) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cocon</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 25) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Géant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 28) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Colosse</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 17) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Large Machoire</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 3) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sauvagerie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 8) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ténacité</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 18) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Charisme</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 26) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Leader</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 19) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Résistance à la</br>Magie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 9) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Renforts Korgon</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 20) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Acrobate</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 21) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Instinct Sauvage</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 27) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/bois/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Ingénieur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>

