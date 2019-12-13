<?php
    include("../admin/fonctions.php");
    if ($_SESSION["user"] =! "lionel.tran@eemi.com")
    {
        header("location:../site/login.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="../styles/connexion.css">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
</head>
    <body>
    <?php include 'headersite.php';?> 
        <div class="justify-content-center text-center comptePersoMain my-5">
            <div class="banner-img"></div>
            <h2 class="self_bloc col-2 m-auto p-2">Isaure</h2>
            <section class="d-flex justify-content-around mt-5">
                <div class="col-2 col-profil d-flex flex-column"> 
                    <img src="#" alt="change_password">
                    <h4>Change my password</h4>
                </div>
                <div class="col-2 col-profil d-flex flex-column">
                    <img src="#" alt="search_history">
                    <a href="messagerie.php">
                        <h4>Your messages</h4>
                    </a>
                </div>
                <div class="col-2 col-profil d-flex flex-column">
                    <img src="#" alt="Log out">
                    <a href="login.php">
                        <h4>Log out</h4>
                    </a>
                </div>
            </section>
        </div>
    <?php include 'footersite.php';?> 
    </body>
</html>

    