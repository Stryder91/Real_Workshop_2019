<?php

include("../admin/fonctions.php");

if (!isset($_SESSION["admin"]))
{
	header("location:exercice30.php?pirate");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_post</title>
</head>
<body>
    <?php
        $session = $_GET['edit'];

        echo $title = $_GET["title"];
        echo $date = $_GET["date"];
        echo $description = $_GET["description"];
        echo $poids = $_GET["poids"];
        echo $hauteur = $_GET["hauteur"];
        echo $longueur = $_GET["longueur"];
        echo $image = $_GET["image"];

        $sql = "update oeuvre set nom_oeuvre='$title', date_oeuvre='$date', description_oeuvre='$description', 
        poids_oeuvre='$poids' , hauteur_oeuvre='$hauteur' , longueur_oeuvre='$longueur', image_oeuvre='$image'  where _id_oeuvre='$session'";
        $query = mysqli_query($lien,$sql);

        header("location:../admin/dashboard.php");
        
    ?>
</body>
</html>