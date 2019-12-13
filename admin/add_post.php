<?php
    include("../admin/fonctions.php");

    echo $addtitre = $_POST['addtitre'];
    echo("<br>");
    echo $adddate = $_POST['adddate'];
    echo("<br>");
    echo $addimg = $_POST['addimg'];
    echo("<br>");
    echo $addpoids = $_POST['addpoids'];
    echo("<br>");
    echo $addhauteur = $_POST['addhauteur'];
    echo("<br>");
    echo $addlongueur = $_POST['addlongueur'];
    echo("<br>");
    echo $adddesc = $_POST['adddescription'];
     echo("<br>");
    echo $addpays = $_POST['addpays'];

    //$sql = "insert into oeuvre (nom_oeuvre, date_oeuvre, description_oeuvre) values('$addtitre','$adddate','$addimg')";
    $sql = "insert into oeuvre (nom_oeuvre,date_oeuvre,description_oeuvre, poids_oeuvre, hauteur_oeuvre, longueur_oeuvre, image_oeuvre, pays_oeuvre) values('$addtitre','$adddate','$addimg', '$addpoids', '$addhauteur', '$addlongueur', '$adddesc', '$addpays')";
    $query = mysqli_query($lien,$sql);

    header("location:../admin/dashboard.php");
?>
