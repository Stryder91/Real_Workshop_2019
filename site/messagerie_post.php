<?php

include("../admin/fonctions.php");

echo $user = $_SESSION["user"] = "lionel";
echo $addmessage = $_POST["area"];

$sql = "insert into messages (message_admin, message_user, message_contenu) values(1,'$user','$addmessage')";
$query = mysqli_query($lien,$sql);

//header("location:../site/contact.php");


?>