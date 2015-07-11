<tr>
    <td rowspan="5">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 1) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Force</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="3">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 5) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Arts Martiaux</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 13) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Waïkikidô</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 14) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vigilance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 25) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chef de guerre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 15) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paume Chalumeau</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 6) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Charge</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 16) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Kamikaze</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 26) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>"  target="compétence" onclick='ouvrir();'>Bélier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 4) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Propulsion Divine</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 12) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes Infernales</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 2) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes Enflammées</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 7) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Goupignons</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 17) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Géants</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 27) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Dragons</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 18) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coulée de lave</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 8) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Souffle Ardent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 19) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Boule de Feu</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 20) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Combustion</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 28) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Torche</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 3) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Colère</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 9) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Furie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 11) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aura Incandescante</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 29) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Météores</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 22) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vengeance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 10) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sang Chaud</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 23) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sieste</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 30) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Self-Control</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 31) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Brave</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 24) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE ."/info/feu/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coeur Ardent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>