<noscript>
    <div class="noscript_notice">
        This page requires JavaScript. Please enable JavaScript!
    </div>
</noscript>

<script>
    $(document).ready(function(){
        $("input.addRow").unbind();
        $("input.addRow").click(function(event){
            event.preventDefault();
            $("#demon_levels tr.staticRow").before('<tr><td><input type="text" name="level[]" ></td><td>x</td><td><input type="text" name="count[]" ></td><td>0 <img src="views/images/ticketD.gif" alt="demon"></td><td><input class="btn btn-primary removeRow" type="submit" value="SUPPRIMER" name="remove"></td></tr>');
            $("input.removeRow").each(function(){
                $(this).unbind();
                $(this).click(function(){
                    $(this).parent().parent().remove();
                });
            });
        });
        $("input.removeRow").each(function(){
            $(this).unbind();
            $(this).click(function(){
                $(this).parent().parent().remove();
            });
        });

    });
</script>

<form action="<?php echo PATH_ABSOLUTE . "/demon" ?>" method="post">
    <div class="table-responsive">
        <table id="demon_levels">
            <tr>
                <th>Niveau</th>
                <th></th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
            </tr>

            <?php if (!empty($_POST['level'])) { foreach($_POST['level'] as $i=> $element) { ?>
                <tr>
                    <td><input type="text" name="level[]" value="<?php echo $element?>"></td>
                    <td>x</td>
                    <td><input type="text" name="count[]" value="<?php echo $_POST['count'][$i] ?>"></td>
                    <td><?php echo $GainsLvl[$element -1] * $_POST['count'][$i]?> <img src="views/images/ticketD.gif" alt="demon"></td>
                    <td><input class="btn btn-primary removeRow" type="submit" value="SUPPRIMER" name="remove"></td>
                </tr>
            <?php } } else { ?>
                <tr>
                    <td><input type="text" name="level[]"></td>
                    <td>x</td>
                    <td><input type="text" name="count[]"></td>
                    <td>0 <img src="views/images/ticketD.gif" alt="demon"></td>
                    <td><input class="btn btn-primary removeRow" type="submit" value="SUPPRIMER" name="remove"></td>
                </tr>
            <?php } ?>

            <tr class="staticRow">
                <td colspan="4"><input class="btn btn-primary addRow" type="submit" value="AJOUTER" name="add"></td>
            </tr>
            <tr><td colspan="4">
                    Total : <?php echo $total?> <img src="views/images/ticketD.gif" alt="demon">
                </td></tr>
            <tr><td colspan="4">
                    <input class="btn btn-primary" type="submit" value="Calculer" name="calculate">
                </td></tr>
        </table>
    </div>
</form>