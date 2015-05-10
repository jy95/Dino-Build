<p>Bienvenue à l'outil de gestion des ups</p>

<p>Sélectionner la race de votre dino et l'élément du up</p>
<form action="index.php?action=helper" method="post">
	<br> <select name="race">
		<option value="-1" selected>Sélectionner la race de votre dino </option>
		<option value="winks">Winks</option>
		<option value="sirain">Sirain</option>
		<option value="kabuki">Kabuki</option>
		<option value="wanman">Wanman</option>
		<option value="moueffe">Moueffe</option>
		<option value="castivore">Castivore</option>
		<option value="feross">Feross</option>
		<option value="nuagoz">Nuagoz</option>
		<option value="planaille">Planaille</option>
		<option value="pteroz">Pteroz</option>
		<option value="toufufu">Toufufu</option>
		<option value="gorilloz">Gorilloz</option>
		<option value="rocky">Rocky</option>
		<option value="quetzu">Quetzu</option>
	</select> <select name="choix">
		<option value="-1" selected>Sélectionner l'élément du up</option>
		<option value="feu">Feu</option>
		<option value="eau">Eau</option>
		<option value="bois">Bois</option>
		<option value="air">Air</option>
		<option value="foudre">Foudre</option>
	</select><input type="submit" value="Valider">
</form>

<?php if (!empty($table)) {?>
<form action="index.php?action=helper" method="post">
	<h3>Voici toutes les compétences disponibles en <?php echo $_POST['choix']?></h3>

	<h2>Sélectionner vos compétences acquises</h2>
	<div id="wrapper">
<?php $compteur = 1;?>
<?php $i = 0;?>
<?php $true = TRUE?>

 <?php while ($i < count($table) ) { ?>
 		<?php if ($i < count($table) && $true == TRUE) {?>
 		<div id="cl<?php echo $compteur;?>">
			<div class="card3">
				<label><h2>Niveau <?php echo $compteur ;?></h2></label>
			</div>
			<?php $true = FALSE?>
			<br>
			<br>
 		<?php }?>
 		<?php while($i < count($table) && $table[$i]->niveau() == $compteur) {?>
		<div class="card2">
				<input type="checkbox" name="competences[]"
					value="<?php echo $table[$i]->num();?>"
					id="<?php echo $table[$i]->num();?>" /> <label
					for="<?php echo $table[$i]->num();?>"><p1><?php echo $table[$i]->nom()?></p1></label>
			</div>
			</br> </br>
			<?php $i++;?>
		<?php }?>
		</div>
		</br> </br>
		<?php $compteur++;?>
		<?php $true = TRUE;?>
<?php } ?>
</div>

	<fieldset>
		<br> <input type="submit" name="mieux"
			value="Obtenir les compétences disponibles"> <br>
	</fieldset>
</form>

<?php }?>

<?php if (!empty($competencesdispo)){ ?>

<h2>Voici les compétences disponibles avec vos compétences</h2>

<div id="wrapper">
<?php $compteur = 1;?>
<?php $i = 0;?>
<?php $true = TRUE?>

 <?php while ($i < count($competencesdispo) ) { ?>
 		<?php if ($i < count($competencesdispo) && $true == TRUE) {?>
 		<div id="cl<?php echo $compteur;?>">
		<div class="card3">
			<label><h2>Niveau <?php echo $compteur ;?></h2></label>
		</div>
			<?php $true = FALSE?>
			<br>
		<br>
 		<?php }?>
 		<?php while($i < count($competencesdispo) && $competencesdispo[$i]->niveau() == $compteur) {?>
		<div class="card2">
			<p1><?php echo $competencesdispo[$i]->nom()?></p1>
		</div>
		</br> </br>
			<?php $i++;?>
		<?php }?>
		</div>
	</br> </br>
		<?php $compteur++;?>
		<?php $true = TRUE;?>
<?php } ?>
</div>

<?php if(!empty($competence)) { ?>
<div class="result">
	<div class="message">
		<div class="ui">
			<button>Afficher la meilleur compétence à choisir</button>
		</div>
	</div>
</div>

<script>
    document.querySelector('.result .message button').onclick = function(){ swal("Selon le plan UP encodé , le meilleur UP à choisir pour l'élément <?php echo $_SESSION['choix'];?> pour un dino de race <?php echo $_SESSION['race'];?> est :" , 
		"<?php echo $competence->nom(); ?>");};
</script>


<?php } else { ?>
<div class="result">
	<div class="message">
		<div class="ui">
			<button>Afficher la meilleur compétence à choisir</button>
		</div>
	</div>
</div>

<script>
    document.querySelector('.result .message button').onclick = function(){ swal("Désolé , Vous avez toutes les compétences recommandés du plan Up de ce dino (il reste peut-etre les autres compétences (double,racials,etc) ");};
</script>
<?php } ?>
  

<?php } ?>