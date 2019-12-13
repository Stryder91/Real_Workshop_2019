<?php
    include("../admin/fonctions.php");
    echo $_SESSION["user"];
    if ($_SESSION["user"] =! "lionel.tran@eemi.com") 
    {
        header("location:../site/login.php");
    }
    echo $user = $_SESSION["user"];
    echo $addmessage = $_POST["message"];
    $sql = "insert into messages (message_admin, message_user, message_contenu) values(1,'$user','$addmessage')";
    $query = mysqli_query($lien,$sql);
    header("location:../site/comptePerso.php");
?>
