
<p> <?php echo $nombreInscrits?>/20 Dinos enregistrés</p>

<p>ENREGISTER un nouveau dino</p>
<form action="/gestion" method="post">
    Nom de votre dino : <input type="text" name="nouveauDino">
</form>

<?php if (!empty($dinos)) { ?>
    <p>Cocher le dino que vous voulez mettre à jour + sélectionne l'élément</p>
    <select name="element">
        <option value="eau">EAU</option>
        <option value="feu">FEU</option>
        <option value="air">AIR</option>
        <option value="foudre">FOUDRE</option>
        <option value="bois">BOIS</option>
    </select>
    <table>
        <thead>
            <th>Nom du dino</th>
            <th>Choix</th>
        </thead>
        <tbody>
            <?php foreach($dinos as $element) { ?>
                <td><?php echo $element->getNom()?></td>
                <td><input type="radio" name="numeroDino" value="<?php echo $element->getId()?>"></td>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>

<?php if (!empty($_POST['numeroDino'])) { ?>
    <input type="hidden" name="numeroDino" value="$_POST['numeroDino']">
    <input type="hidden" name="element" value="$_POST['element']">
    <p>METTEZ A JOUR</p>
<?php } ?>