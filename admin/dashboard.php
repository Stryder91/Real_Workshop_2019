<?php
    include("../admin/fonctions.php");
    if (!isset($_SESSION["admin"]))
    {
        header("location:../site/connexion.php");
    }
    if (isset($_POST["message"])){
        $addmessage = $_POST["message"];
        $sql = "insert into messages (message_admin, message_user, message_contenu) values(1,'isaure','$addmessage')";
        $query = mysqli_query($lien,$sql);
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <style>
        body {
                color : white;
                background: #39393A;
            }
            header{
                height: 12vh;
                background: #333334;
                width:100vw;
            }
            .main {
                background : #464646;
                padding : 5%;
                border-radius: 3px;
            }
            .hidden{
                display:none;
            }
    </style>
</head>
<body class="d-flex flex-wrap">
    <!-- J'ai du mettre le style dans le head, car, sans savoir pourquoi cela ne marche dans une feuille à part,
    et ce malgré les !important -->

    <header class="col-12 px-5 d-flex justify-content-between"> 
        <div class="col-2 m-auto">
            <img src="../images/logo.svg" alt="logo">
        </div>
        <a href="../site/connexion.php" class="px-5 pt-3 logout">
            Log out
        </a>
    </header>
        
    <section class="col-12 col-md-6 mt-md-5 ml-md-5 d-flex flex-wrap justify-content-center">
        <!-- ADD new oeuvre -->
        <a href="add.php" class="my-3">
            <button class="text-center btn btn-add m-auto">Add an artwork</button>
        </a>
        <!----------------------------------------->

        <div class="col-10 justify-content-center">
        <?php

            $sql_annonce = "select _id_oeuvre, nom_oeuvre from oeuvre";
            $query_annonce = mysqli_query($lien,$sql_annonce);


            while ($result_annonce = mysqli_fetch_assoc($query_annonce))
            {
                echo ("<div class=\"row main d-flex justify-content-between\">");
                    echo ("<div> ID".$result_annonce["_id_oeuvre"]."</div>");
                    echo ("<div>".$result_annonce["nom_oeuvre"]."</div>");
                    echo ("<div>");
                        echo("<a style=\"color:white!important;\" href=\"edit.php?_id_oeuvre=".$result_annonce["_id_oeuvre"]."\">");
                            echo("Edit");
                        echo("</a>");
                        echo("<a class=\"mx-2\" style=\"color:white!important;\" href=\"delete_post.php?_id_oeuvre=".$result_annonce["_id_oeuvre"]."\">");
                            echo("Delete");
                        echo("</a>");
                    echo("</div>");
                echo ("</div>");
            }
        ?>
        </div>
    </section>

    <section class="col-md-5 d-flex flex-wrap justify-content-center text-center mt-5">
        <h3 class="col-12 pb-5  ">Messages</h3>
        <div class="zone-blanche p-3">
            <?php

                $sql_annonce = "select * from messages";
                $query_message = mysqli_query($lien,$sql_annonce);


                echo ("<div class=\"d-flex flex-column zone-grise-message py-3 pr-5 pl-2 text-left\">");
                while ($result_message = mysqli_fetch_assoc($query_message))
                {
                    echo ("<span>".$result_message["message_contenu"]."</span>");
                }
                echo ("</div>");
            ?>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <form class="col-8 d-flex mt-5" method="post" action="dashboard.php">
                <input name="message" type="text" class="form-control mytextarea col-8"></input>
                <button type="submit" class="btn col-2" style="color:white !important;">Send</button>
            </form>
        </div>
    </section>

</body>
</html>
