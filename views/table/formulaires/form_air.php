<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 1) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Agilité</a>
                <?php break; } ?>
        <?php } ?>
    </td>

    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 4) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Esquive</a>
                <?php break; } ?>
        <?php } ?>
    </td>

    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 10) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Elasticité</a>
                <?php break; } ?>
        <?php } ?>
    </td>

</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 11) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Disque Vacuum</a>
                <?php break; } ?>
        <?php } ?>
    </td>

    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 22) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Trou Noir</a>
                <?php break; } ?>
        <?php } ?>
    </td>

</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 5) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Saut</a>
                <?php break; } ?>
        <?php } ?>
    </td>

    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 12) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Attaque Plongeante</a>
                <?php break; } ?>
        <?php } ?>
    </td>

    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 23) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Maître Lévitateur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 13) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Furtivité</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 2) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Stratégie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 6) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Analyse</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 14) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Spécialiste</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 15) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Talon d'Achille</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 7) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Cueillette</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 16) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Oeil de Lynx</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 17) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Nuage Toxique</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 24) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Haleine Fétive</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="5">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 3) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Mistral</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="3">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 8) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Tai-Chi</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 18) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Éveil</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 25) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Professeur</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 26) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Méditation Solitaire</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 28) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Méditation Trans.</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 29) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Forme Etherale</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 19) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paumes Éjectables</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 9) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Tornade</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 20) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vent Vif</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 27) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Souffle de Vie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->num() == 21) { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>" <?php if (!empty($competences_Acquises)&& in_array($competence->num(),$competences_Acquises)) { echo "checked"; }?>>
                <a href="<?php echo PATH_ABSOLUTE . "/info/air/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Forme Vaporeuse</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
