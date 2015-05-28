<tr>
    <td rowspan="5">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Force') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Force</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="3">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Arts Martiaux') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Arts Martiaux</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Waïkikidô') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Waïkikidô</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Vigilance ') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vigilance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Chef de guerre') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chef de guerre</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Paume Chalumeau') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Paume Chalumeau</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Charge') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Charge</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Kamikaze') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Kamikaze</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Bélier') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>"  target="compétence" onclick='ouvrir();'>Bélier</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Propulsion Divine') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Propulsion Divine</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Griffes Infernales') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes Infernales</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Griffes Enflammées') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Griffes Enflammées</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Chasseur goupignon') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Goupignons</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Chasseur de Géant') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Géants</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Chasseur de Dragon') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Chasseur de Dragons</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Coulée de Lave') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coulée de lave</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Souffle Ardent') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Souffle Ardent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Boule de Feu') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Boule de Feu</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == ' Combustion') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Combustion</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Torche') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Torche</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="4">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Colère') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Colère</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Furie') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Furie</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Aura Incandescante') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Aura Incandescante</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Météores') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Météores</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Vengeance') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Vengeance</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td rowspan="2">
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sang Chaud') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sang Chaud</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Sieste') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Sieste</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Self-Control') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Self-Control</a>
                <?php break; } ?>
        <?php } ?>
    </td>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Brave') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Brave</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td>
        <?php foreach($table as $i => $competence) {?>
            <?php if ( $competence->nom() == 'Coeur Ardent') { ?>
                <input type="checkbox" name="competences[]" value="<?php echo $competence->num();?>">
                <a href="<?php echo "/info/" .$competence->num(); ?>" target="compétence" onclick='ouvrir();'>Coeur Ardent</a>
                <?php break; } ?>
        <?php } ?>
    </td>
</tr>