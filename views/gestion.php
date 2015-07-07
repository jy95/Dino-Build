
<?php if (empty($dino)) { ?>
    <p> <?php echo $nombreInscrits?>/20 Dinos enregistrés</p>

    <p>ENREGISTER un nouveau dino</p>
    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post">
        Nom de votre dino : <input type="text" name="nouveauDino"> <br>
        Race :
        <section class="pagedImages">
            <input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
            <input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
            <input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
            <input id="page4" accesskey="4" type="radio" name="pagedImages1" title="Images page 4" />
            <label for="page1">1</label>
            <label for="page2">2</label>
            <label for="page3">3</label>
            <label for="page4">4</label>

            <ul>
                <li id="image1">
                    <label>
                        <input type="radio" name="race" value="kabuki"/>
                        <img src="views/images/Dinozs/Kabuki.png">
                    </label>
                </li>
                <li id="image2">
                    <label>
                        <input type="radio" name="race" value="castivore"/>
                        <img src="views/images/Dinozs/Castivore.png">
                    </label>
                </li>
                <li id="image3">
                    <label>
                        <input type="radio" name="race" value="winks"/>
                        <img src="views/images/Dinozs/Winks.png">
                    </label>
                </li>
                <li id="image4">
                    <label>
                        <input type="radio" name="race" value="quetzu"/>
                        <img src="views/images/Dinozs/Quetzu.png">
                    </label>
                </li>
                <li id="image5">
                    <label>
                        <input type="radio" name="race" value="sirain"/>
                        <img src="views/images/Dinozs/Sirain.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image6">
                    <label>
                        <input type="radio" name="race" value="moueffe"/>
                        <img src="views/images/Dinozs/Moueffe.png">
                    </label>
                </li>
                <li id="image7">
                    <label>
                        <input type="radio" name="race" value="pigmou"/>
                        <img src="views/images/Dinozs/Pigmou.png">
                    </label>
                </li>
                <li id="image8">
                    <label>
                        <input type="radio" name="race" value="santaz"/>
                        <img src="views/images/Dinozs/Santaz.png">
                    </label>
                </li>
                <li id="image9">
                    <label>
                        <input type="radio" name="race" value="wanwan"/>
                        <img src="views/images/Dinozs/Wanwan.png">
                    </label>
                </li>
                <li id="image10">
                    <label>
                        <input type="radio" name="race" value="feross"/>
                        <img src="views/images/Dinozs/Feross.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image11">
                    <label>
                        <input type="radio" name="race" value="gorilloz"/>
                        <img src="views/images/Dinozs/Gorilloz.png">
                    </label>
                </li>
                <li id="image12">
                    <label>
                        <input type="radio" name="race" value="nuagoz"/>
                        <img src="views/images/Dinozs/Nuagoz.png">
                    </label>
                </li>
                <li id="image13">
                    <label>
                        <input type="radio" name="race" value="toufufu"/>
                        <img src="views/images/Dinozs/Toufufu.png">
                    </label>
                </li>
                <li id="image14">
                    <label>
                        <input type="radio" name="race" value="rocky"/>
                        <img src="views/images/Dinozs/Rocky.png">
                    </label>
                </li>
                <li id="image15">
                    <label>
                        <input type="radio" name="race" value="soufflet"/>
                        <img src="views/images/Dinozs/Soufflet.png">
                    </label>
                </li>
            </ul>

            <ul>
                <li id="image16">
                    <label>
                        <input type="radio" name="race" value="hippoclamp"/>
                        <img src="views/images/Dinozs/Hippoclamp.png">
                    </label>
                </li>
                <li id="image17">
                    <label>
                        <input type="radio" name="race" value="smog"/>
                        <img src="views/images/Dinozs/Smog.png">
                    </label>
                </li>
                <li id="image18">
                    <label>
                        <input type="radio" name="race" value="mahamuti"/>
                        <img src="views/images/Dinozs/Mahamuti.png">
                    </label>
                </li>
                <li id="image19">
                    <label>
                        <input type="radio" name="race" value="pteroz"/>
                        <img src="views/images/Dinozs/Pteroz.png">
                    </label>
                </li>
                <li id="image20">
                    <label>
                        <input type="radio" name="race" value="planaille"/>
                        <img src="views/images/Dinozs/Planaille.png">
                    </label>
                </li>
            </ul>

        </section>
        <input type="submit">
    </form>
<?php } ?>

<?php if (!empty($dinos)) { ?>
    <p>Cocher le dino que vous voulez mettre à jour + sélectionne l'élément</p>
    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post">
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
    <form action="<?php echo PATH_ABSOLUTE . "/gestion"?>" method="post">
        <input type="hidden" name="numeroDino" value="$_POST['numeroDino']">
        <input type="hidden" name="element" value="$_POST['element']">
        <p>METTEZ A JOUR</p>
    </form>
<?php } ?>