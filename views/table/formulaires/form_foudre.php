<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 1) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Focus</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 4) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Concentration</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 10) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Voie de Kaos</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 22) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Crépuscule Flamboyant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 28) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archange Corrosif</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 11) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Voie de Gaïa</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 23) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aube Feuillue</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 29) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Archange Génésif</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 5) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Régénérescence</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 12) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Purée Salvatrice</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 24) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Bénédiction</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 30) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Prêtre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 13) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aura Hermétique</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 2) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Intelligence</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 6) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Premiers Soins</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 14) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Médecine</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 25) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Brancardier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 15) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Adrénaline</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 7) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paratonnerre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 16) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Fission élémentaire</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 26) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Marchand</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 17) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Croc-Diamant</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 3) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Célérité</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="3">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 8) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coup Double</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 18) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Foudre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 19) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Danse Foudroyante</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 20) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Plan de Carrière</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 27) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Réincarnation</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 9) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Attaque-éclair</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 21) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/foudre/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Embuche</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>