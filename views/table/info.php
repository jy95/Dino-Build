<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>compétences</title>
    <style type="text/css">
        table
        {
            height:200px;
            width:284px;
            background-color:rgba(232,225,205,0.8);
            padding:5px;
            border-bottom: 3px ridge #333333;
            border-left: 3px ridge #333333;
            border-right: 3px ridge #333333;
            border-top: 3px ridge #333333;
            border-radius: 10px;
            margin-bottom:500px;
        }
        thead td
        {
            font-size:18px;
            height:30px;
            color:white;
            text-align:center;
            text-indent:0px;
            font-weight:800;
            Text-Shadow: #000000 1px 0px 0px, #000000 1px 1px 0px, #000000 1px -1px 0px, #000000 -1px 1px 0px, #000000 -1px 0px 0px, #000000 -1px -1px 0px, #000000 0px 1px 0px, #000000 0px -1px 0px;
            border: 2px solid black;
            border-radius: 7px;
            background-color:rgb(228,166,168);
            background-image: url(<?php echo "/views/images/competences/fd_table" . $element . ".bmp"?>);


            background-repeat:no-repeat;
            background-position:bottom;
            background-size:cover;
        }
        tbody td
        {
            padding-left:3px;
            padding-right:3px;
            color:black;
            Text-Shadow: white 1px 0px 1px, white 1px -1px 1px, white -1px 0px 1px, white 0px 1px 1px, white 0px -1px 1px;
            text-align:center;
            text-indent:0px;
            font-weight:800;
            font-size:16px;
            border: 2px solid rgb(120,166,156);
            border-radius: 7px;
            background-color:#EFD095;
        }
        tbody td#type
        {
            width:50px;
        }
        tbody tr#titre td
        {
            height:20px;
            background-color:gray;
            font-weight:800;
            Text-Shadow: #000000 1px 0px 0px, #000000 1px 1px 0px, #000000 1px -1px 0px, #000000 -1px 1px 0px, #000000 -1px 0px 0px, #000000 -1px -1px 0px, #000000 0px 1px 0px, #000000 0px -1px 0px;
            color:white;
        }
        td#energie
        {
            background-color: rgba(31, 76, 97, 0.76);
        //border: 2px solid rgb(0, 0, 49);
            height: 25px;
            text-shadow: 1px 1px 3px black;
            color: white;
        }
    </style>
    <script type="text/javascript" src="js/jquery-2.1.3.min"></script>
</head>
<body>
<?php if (!empty($competence)) {?>
<table>
    <thead>
    <tr>
        <td colspan="2"><?php echo $competence->nom(); ?></td>
    </tr>
    </thead>
    <tbody>
    <tr id="titre">
        <td id="type">Type</td>
        <td>Description</td>
    </tr>
    <tr>
        <td><?php echo $competence->type(); ?></td>
        <td><?php echo $competence->description(); ?></td>
    </tr>
    <tr>
        <td colspan="2" id="energie">Conso. d'énergie : <?php echo $competence->energie(); ?></td>
    </tr>
    </tbody>
</table>
<?php } ?>
</body>
</html>