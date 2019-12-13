<?php
include("../admin/fonctions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messenger</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/connexion.css">
    <script src="../scripts/jquery.js"></script>
</head>
<body>
    <?php include 'headersite.php';?>  
        <div class="noirBorder col-md-8 p-md-5 pt-3 mt-5 text-center contain-messages">
            <div class="col-12 m-auto p-md-3 jauneBorder d-flex flex-column whiteBG">
            <?php
                echo $_SESSION["user"];
                $sql_annonce = "select * from messages where message_user = \"isaure\"";
                $query_annonce = mysqli_query($lien,$sql_annonce);


                while ($result_annonce = mysqli_fetch_assoc($query_annonce))
                {
                    echo ("<span class=\"col-md-3 btn-go px-1 py-1 my-3\">".$result_annonce["message_contenu"]."</span>");
                }
            ?>
            </div>
        </div>
        <div class="col-6 m-auto d-flex justify-content-center">
            <form action="comptePerso_post.php" method="post">
                <input type="text" placeholder="Write your message here" name="message" class="btn mt-5 inputWrite">
                <button type="submit" class="btn mt-5">Send</button>
            </form>
        </div>

    <!-- <section class="main row d-flex justify-content-center text-center">
        <h1 class="col-12 align-bottom">Your messages</h1>
        <h3 class="col-12 dashboard dashboard2">Send a message</h3>
        <div class="formcontainer col-s-10 col-md-4">
            <form class="form-control" method="post" action="messagerie_post.php">
                <label for="area">Your message</label>
                <textarea name="area" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn">Send</button>
            </form>
        </div>
    </section> -->
    <?php include 'footersite.php';?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.buttonContact').click(function(){
                alert('Merci pour votre message!');
            })
        });
    </script>
</body>
</html>
