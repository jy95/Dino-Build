<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dino-Build</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo PATH_ABSOLUTE . "/views/css/DinoBuildV2.css" ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo PATH_ABSOLUTE . "/views/css/sweetalert.css"?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo PATH_ABSOLUTE . "/views/css/bootstrap.min.css"?>"/>
    <script src="<?php echo PATH_ABSOLUTE . "/js/jquery-2.1.4.min.js"?>"></script>
    <script src="<?php echo PATH_ABSOLUTE . "/js/noty.js" ?>"></script>
    <script async src="<?php echo PATH_ABSOLUTE . "/js/bootstrap.min.js" ?>"></script>
    <script async src="<?php echo PATH_ABSOLUTE . "/js/sweet-alert.min.js" ?>"></script>
    <script async src="<?php echo PATH_ABSOLUTE . "/js/modernizr.custom.js" ?>"></script>
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
