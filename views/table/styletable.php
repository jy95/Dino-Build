
<?php if (!empty($_SESSION['element'])) {?>

    <style type="text/css">

        .test {
            background: #eb811a url(<?php echo 'views/images/Fond/' . ucfirst($_SESSION['element']) . '.png'?>) no-repeat;
            -webkit-background-size: auto;
            -moz-background-size: auto;
            -o-background-size: auto;
            background-size: auto;
            opacity: 0.75;
        }

    </style>

<?php } ?>
