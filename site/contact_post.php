<?php

include("../admin/fonctions.php");

$addmail = $_POST["mail"];
$addname = $_POST["name"];
$addarea = $_POST["area"];

$sql = "insert into commentaires (email,prenom,nom,message) values('$addmail','$addname','$addname','$addarea')";
$query = mysqli_query($lien,$sql);

//header("location:../site/contact.php");


?>