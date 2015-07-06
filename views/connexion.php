
<h1>TEST</h1>

Bonjour <?php if(!empty($_SESSION['user'])) echo $_SESSION['user']?> <br>
Image <?php if(!empty($_SESSION['photo'])) ?> <img src="<?php echo $_SESSION['photo']?>" alt="photo">  <br>
Id <?php if(!empty($_SESSION['id'])) echo $_SESSION['id']?>
