
<?php if (empty($dino)) { ?>
    <p> <?php echo $nombreInscrits?>/20 Dinos enregistrés</p>

    <p>ENREGISTER un nouveau dino</p>
    <form action="/gestion" method="post">
        Nom de votre dino : <input type="text" name="nouveauDino"> <br>
        Race :
        <section class="pagedImages">
            <input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
            <input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
            <input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
            <label for="page1">1</label>
            <label for="page2">2</label>
            <label for="page3">3</label>

            <ul>
                <li id="image1">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
                <li id="image2">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image3">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image4">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image5">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/dinos/Moueffe.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/dinos/Winks.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/dinos/Quetzu.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/dinos/Castivore.png">
                    </label>
                </li>
            </ul>

        </section>
        <input type="submit">
    </form>
<?php } ?>

<?php if (!empty($dinos)) { ?>
    <p>Cocher le dino que vous voulez mettre à jour + sélectionne l'élément</p>
    <form action="index.php?action=gestion" method="post">
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
        <input type="submit">
    </form>
<?php } ?>

<?php if (!empty($_POST['numeroDino'])) { ?>
    <input type="hidden" name="numeroDino" value="$_POST['numeroDino']">
    <input type="hidden" name="element" value="$_POST['element']">
    <p>METTEZ A JOUR</p>
<?php } ?>