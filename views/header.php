<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dino-Build</title>
    <link rel="stylesheet" type="text/css" media="all" href="views/css/DinoBuildV2.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="views/css/Tables.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="views/css/sweetalert.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="views/css/bootstrap.min.css"/>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweet-alert.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
</head>
<body>

<!-- MENU -->

<nav class="navbar navbar-default" id="menu">
    <div class="container-fluid">
        <div>
            <ul class="nav navbar-nav">
                <li> <a href="<?php echo PATH_ABSOLUTE . "/helper"?>">PLAN D'UP </a></li>
                <li> <a href="<?php echo PATH_ABSOLUTE . "/demon"?>">DEMON</a> </li>
                <li> <a href="<?php echo PATH_ABSOLUTE . "/probabilite"?>">PROBABILITE</a> </li>
                <?php if (empty($_SESSION['id'])) { ?>
                    <li> <a href="<?php echo PATH_ABSOLUTE . "/index.php?action=connexion"?>">SE CONNECTER</a> </li>
                <?php } else { ?>
                    <li> <a href="<?php echo PATH_ABSOLUTE . "/deconnexion"?>">SE DECONNECTER</a> </li>
                <?php } ?>
                <li> <a href="<?php echo PATH_ABSOLUTE . "/gestion"?>">MON COMPTE</a> </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENU -->
