<?php if (!empty($message)) { ?>
    <DIV ALIGN="CENTER" style="background-color: red;">
        <?php echo $message; ?>
    </DIV>
    <br>
<?php } ?>

<DIV ALIGN="CENTER">
    <form action="index.php?action=proba" method="post">
        <table>
            <tr>
                <th>
                    Informations à fournir
                </th>
                <th>
                    Vos données
                </th>
            </tr>
            <tr>
                <td>
                    <label for="niveau">Votre niveau actuel: </label>
                </td>
                <td>
                    <input id="niveau" type="number" min="1" name="niveau1" <?php if (!empty($_POST['niveau1'])) echo 'value="' . $_POST['niveau1'] . '"'?> > <br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="niveau2">Le niveau souhaité: </label>
                </td>
                <td>
                    <input id="niveau2" type="number" min="2" max="70" name="niveau2" <?php if (!empty($_POST['niveau2'])) echo 'value="' . $_POST['niveau2'] . '"'?> > <br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="feu">Nombre de ups voulus en feu: </label>
                </td>
                <td>
                    <input id="feu" type="number" min="0" max="69" name="feu" <?php if (!empty($_POST['feu'])) echo 'value="' . $_POST['feu'] . '"'?>> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="eau">Nombre de ups voulus en eau: </label>
                </td>
                <td>
                    <input id="eau" type="number" min="0" max="69" name="eau" <?php if (!empty($_POST['eau'])) echo 'value="' . $_POST['eau'] . '"'?>> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="foudre">Nombre de ups voulus en foudre: </label>
                </td>
                <td>
                    <input id="foudre" type="number" min="0" max="69" name="foudre" <?php if (!empty($_POST['foudre'])) echo 'value="' . $_POST['foudre'] . '"'?>> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="air">Nombre de ups voulus en air: </label>
                </td>
                <td>
                    <input id="air" type="number" min="0" max="69" name="air" <?php if (!empty($_POST['air'])) echo 'value="' . $_POST['air'] . '"'?>> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="bois">Nombre de ups voulus en bois: </label>
                </td>
                <td>
                    <input id="bois" type="number" min="0" max="69" name="bois" <?php if (!empty($_POST['bois'])) echo 'value="' . $_POST['bois'] . '"'?>> <br>
                </td>
            </tr>

            <tr>
                <td>
                    La race de votre dino :
                </td>
                <td>
                    <select name="dino">
                        <option value="winks" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'winks') echo "selected"?>>Winks</option>
                        <option value="sirain" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'sirain') echo "selected"?>>Sirain</option>
                        <option value="kabuki" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'kabuki') echo "selected"?>>Kabuki</option>
                        <option value="wanman" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'wanman') echo "selected"?>>Wanman</option>
                        <option value="moueffe" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'moueffe') echo "selected"?>>Moueffe</option>
                        <option value="castivore" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'castivore') echo "selected"?>>Castivore</option>
                        <option value="feross" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'feross') echo "selected"?>>Feross</option>
                        <option value="nuagoz" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'nuagoz') echo "selected"?>>Nuagoz</option>
                        <option value="planaille" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'planaille') echo "selected"?>>Planaille</option>
                        <option value="pteroz" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'pteroz') echo "selected"?>>Pteroz</option>
                        <option value="toufufu" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'toufufu') echo "selected"?>>Toufufu</option>
                        <option value="gorilloz" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'gorilloz') echo "selected"?>>Gorilloz</option>
                        <option value="rocky" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'rocky') echo "selected"?>>Rocky</option>
                        <option value="quetzu" <?php if (!empty($_POST['dino']) && $_POST['dino'] == 'quetzu') echo "selected"?>>Quetzu</option>
                    </select>
                </td>
            </tr>

        </table>
        <input type="submit" value="Calculer la probabilité d'avoir les ups voulus">
    </form>
</DIV>