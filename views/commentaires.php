
<style>
    /* commentlist */
    .commentlist {
        margin: 0;
        padding: 0;
    }
    .commentlist li {
        margin: 0 0 10px;
        list-style: none;
        overflow: hidden;
        clear: both;
    }
    .commentlist ul {
        padding: 0;
        margin-top: 20px;
        margin-left: 11%;
    }
    .commentlist .comment-text {
        overflow: hidden;
    }
    .commentlist img {
        float: left;
        margin: 0 20px 20px 0;
    }
    .commentlist cite {
        font-size: 140%;
        font-weight: bold;
    }

</style>

<script type="text/javascript">

    $(document).ready(function() {
        $(".cancel").hide();

        $(".reply").click(function(event) {
            <?php if (!empty($_SESSION['id'])) { ?>

            var select1= event.target.id;
            var select3= "ul.";
            var select2= " li:first:first-child";
            var select = (select3.concat(select1).concat(select2));

            $(".comment-perso").remove();
            $("button").hide();
            $(".cancel").show();
            $(select).before('<li><img class="img-circle img-responsive" height="125" width="125" src="<?php echo Donnees::getInstance()->getUser($_SESSION['id'])[1] ?>" alt="avatar"> <div class="comment-text"><cite><?php echo $_SESSION['user'] ?></cite> le TEST<textarea class="form-control" rows="3" id="comment" name="comment"></textarea><input type="hidden" name="reply" value="' + event.target.id + '"></div><input type="submit" class="btn btn-primary"></li>');
            <?php } ?>
        });

        $(".edit").click(function(event){
            var id = event.target.value;
            var selecttext = ".text".concat(id);
            var text = $(selecttext).text();
            var inserttext = "ul.commentlist li:last .comment-text textarea";
            $(inserttext).val(text);
            $(inserttext).after('<input type="hidden" name="edit" value="' + id + '">');
            $(".cancel").show();
            $("button").hide();
        });

    });

</script>
<button class="glyphicon glyphicon-refresh cancel" onclick="document.location.reload(true)">Annuler l'action en cours</button>
<form role="form" action="<?php echo PATH_ABSOLUTE ."/dino/" . $_GET['dino']?>" method="post">
    <ul class="commentlist">
        <h1>Zone de commentaire (En TEST)</h1>
        <?php if (!empty($commentaires)) { ?>
            <?php foreach($commentaires as $commentaire) { ?>
                <?php $info = Donnees::getInstance()->getUser($commentaire[0]->getUserId());?>
                <li>
                    <img class="img-circle img-responsive" height="125" width="125" src="<?php echo $info[1] ?>" alt="avatar">
                    <div class="comment-text">
                        <cite><?php echo $info[0] ?></cite> le <?php echo DateTime::createFromFormat('Y-m-d', $commentaire[0]->getDate())->format('d/m/Y');?>
                        <button class="glyphicon glyphicon-new-window reply" id="<?php echo $commentaire[0]->getCommentId()?>" type="button" >REPONDRE</button>
                        <?php if (!empty($_SESSION['id']) && $_SESSION['id'] == $commentaire[0]->getUserId()) { ?> <button class="glyphicon glyphicon-pencil edit" type="button" value="<?php echo $commentaire[0]->getCommentId(); ?>">EDITER</button><?php } ?>
                        <p class="<?php echo "text" . $commentaire[0]->getCommentId() ?>"><?php echo $commentaire[0]->getComment()?></p>
                    </div>
                    <ul class="<?php echo $commentaire[0]->getCommentId() ?>">
                        <li></li>
                        <?php if ( count($commentaire) > 1 ) { ?>
                            <?php foreach ($commentaire[1] as $reply) { ?>
                                <?php
                                $info = Donnees::getInstance()->getUser($reply->getUserId());
                                $chiffre=$commentaire[0]->getCommentId()+1;
                                ?>
                                <li>
                                    <img class="img-circle img-responsive" height="125" width="125" src="<?php echo $info[1] ?>" alt="avatar">
                                    <div class="comment-text">
                                        <cite><?php echo $info[0] ?></cite> le <?php echo DateTime::createFromFormat('Y-m-d', $commentaire[0]->getDate())->format('d/m/Y');?>
                                        <button class="glyphicon glyphicon-new-window reply" type="button" id="<?php echo $chiffre; ?>">REPONDRE</button>
                                        <?php if (!empty($_SESSION['id']) && $_SESSION['id'] == $commentaire[0]->getUserId()) { ?> <button type="button" class="glyphicon glyphicon-pencil edit" value="<?php echo $chiffre; ?>">EDITER</button><?php } ?>
                                        <p class="<?php echo "text" . $reply->getCommentId() ?>"><?php echo $reply->getComment()?></p>
                                    </div>
                                    <ul class="<?php echo $reply->getCommentId() ?>">
                                        <li></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        <?php } ?>
        <?php if (!empty($_SESSION['id'])) {?>
            <li class="comment-perso">
                <img class="img-circle img-responsive" height="125" width="125" src="<?php echo $_SESSION['photo'] ?>" alt="avatar">
                <div class="comment-text">
                    <cite><?php echo $_SESSION['user'] ?></cite>
                    <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
                </div>
                <input type="submit" class="btn btn-primary">
            </li>
        <?php } ?>
    </ul>
</form>



<!--<div class="tid_smileyPopUp" style="display: block;">
    <div class="tid_title">DinoRPG</div>
    <div class="tid_wrapper">
        <a href="#" class="tid_smiley">
            <img title=":drpg_map_cavern:"  src="http://www.dinorpg.com/img/forum/smiley/map_cavern.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_church:"  src="http://www.dinorpg.com/img/forum/smiley/map_church.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_default:"  src="http://www.dinorpg.com/img/forum/smiley/map_default.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_door:"  src="http://www.dinorpg.com/img/forum/smiley/map_door.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_house:"  src="http://www.dinorpg.com/img/forum/smiley/map_house.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_mountain:"  src="http://www.dinorpg.com/img/forum/smiley/map_mountain.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_map_fj:"  src="http://www.dinorpg.com/img/forum/smiley/map_fj.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_feu:"  src="http://www.dinorpg.com/img/forum/smiley/elem_0.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_bois:"  src="http://www.dinorpg.com/img/forum/smiley/elem_1.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_eau:"  src="http://www.dinorpg.com/img/forum/smiley/elem_2.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_foudre:"  src="http://www.dinorpg.com/img/forum/smiley/elem_3.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_air:"  src="http://www.dinorpg.com/img/forum/smiley/elem_4.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_neutre:"  src="http://www.dinorpg.com/img/forum/smiley/elem_5.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_vie:"  src="http://www.dinorpg.com/img/forum/smiley/small_life.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_exp:"  src="http://www.dinorpg.com/img/forum/smiley/small_xp.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_bon:"  src="http://www.dinorpg.com/img/forum/smiley/small_tix.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_mail:"  src="http://www.dinorpg.com/img/forum/smiley/small_mail.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_mana:"  src="http://www.dinorpg.com/img/forum/smiley/small_mana.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_love:"  src="http://www.dinorpg.com/img/forum/smiley/love.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_twinlove:"  src="http://www.dinorpg.com/img/forum/smiley/twinlove.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_plume_1:"  src="http://www.dinorpg.com/img/icons/collec_plume.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_clans_5:"  src="http://www.dinorpg.com/img/icons/r_mercenaire.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_tour_1:"  src="http://www.dinorpg.com/img/icons/collec_tour.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_quetzu_1:"  src="http://www.dinorpg.com/img/icons/collec_quetzu.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_pteroz_1:"  src="http://www.dinorpg.com/img/icons/collec_pteroz.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_killd_10:"  src="http://www.dinorpg.com/img/icons/small_attack.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_killm_50:"  src="http://www.dinorpg.com/img/icons/r_monster.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_deaths_10:"  src="http://www.dinorpg.com/img/icons/r_barbare.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_rocky_1:"  src="http://www.dinorpg.com/img/icons/collec_rocky.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_energy_10:"  src="http://www.dinorpg.com/img/icons/r_comp.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_healpv_500:"  src="http://www.dinorpg.com/img/icons/r_heal.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_lvlup_10:"  src="http://www.dinorpg.com/img/icons/small_lup_fix.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_fouill_10:"  src="http://www.dinorpg.com/img/icons/r_fouille.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_msg_1:"  src="http://www.dinorpg.com/img/icons/collec_msg.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_pda_1:"  src="http://www.dinorpg.com/img/icons/collec_pda.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_pmi_1:"  src="http://www.dinorpg.com/img/icons/collec_pmi.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_gdcatt_10:"  src="http://www.dinorpg.com/img/icons/r_attack.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_gdcdef_10:"  src="http://www.dinorpg.com/img/icons/r_defense.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_upfire_10:"  src="http://www.dinorpg.com/img/icons/r_fire.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_taurus_1:"  src="http://www.dinorpg.com/img/icons/collec_taurus.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_moves_10:"  src="http://www.dinorpg.com/img/icons/r_explor.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_upthun_10:"  src="http://www.dinorpg.com/img/icons/r_thunder.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_upwatr_10:"  src="http://www.dinorpg.com/img/icons/r_water.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_upwood_10:"  src="http://www.dinorpg.com/img/icons/r_wood.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_beauty_2:"  src="http://www.dinorpg.com/img/icons/r_beauty.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_brkpel_5:"  src="http://www.dinorpg.com/img/icons/r_digger.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_hippo_1:"  src="http://www.dinorpg.com/img/icons/collec_hippo.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_upair_10:"  src="http://www.dinorpg.com/img/icons/r_air.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_dicarb_1:"  src="http://www.dinorpg.com/img/icons/collec_dicarb.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_magnet_1:"  src="http://www.dinorpg.com/img/icons/collec_magnet.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_vener_1:"  src="http://www.dinorpg.com/img/icons/collec_vener.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_sbuyer_10:"  src="http://www.dinorpg.com/img/icons/r_purse.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_cueill_10:"  src="http://www.dinorpg.com/img/icons/r_gather.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_chasse_10:"  src="http://www.dinorpg.com/img/icons/r_hunt.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_market_2:"  src="http://www.dinorpg.com/img/icons/r_market.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_pdays_5:"  src="http://www.dinorpg.com/img/icons/r_plume.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_peche_10:"  src="http://www.dinorpg.com/img/icons/r_peche.gif"></a><a href="#" class="tid_smiley">
            <img title=":drpg_perle_1:"  src="http://www.dinorpg.com/img/icons/collec_perle.gif"></a></div><div class="tid_clear">

    </div>
</div>-->

