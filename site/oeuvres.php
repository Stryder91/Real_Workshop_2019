<?php

include("../admin/fonctions.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Oeuvre</title>

        <!--- css --->
        <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <body>
        <?php include 'headersite.php'; ?>
        <ul class="nav justify-content-center mt-md-5 pt-5">
            <li class="nav-item">
                <a class="nav-link active" href="#">Venezuela</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Colombia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mexico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Others</a>
            </li>
        </ul>

    
        <div class="d-flex">
        <?php
            $sql = "select * from oeuvre";
            $query = mysqli_query($lien,$sql);

            //--------Retour à la page annonce si id incongru---------//
            if (!mysqli_num_rows($query))
            {
                header("location:annonce.php");
            }
            //--------Retour à la page annonce si id incongru---------//

            while ($result = mysqli_fetch_assoc($query)){
                echo("<div class=\"col-12 d-flex flex-wrap justify-content-center my-5\">");
                    echo("<div class=\"col-12 col-md-6 d-md-flex\">");
                        echo("<img id=\"myImg\" class=\"col-12 col-md-5\" src=\"../images/".$result["image_oeuvre"]."\" alt=\"oeuvre\"");
                    echo("</div>");
                    echo("<div class=\"col-12 col-md-7\">");
                        echo("<h2>".$result["nom_oeuvre"]."</h2>");
                        echo("<p class=\"m-0\">Date : ".$result["date_oeuvre"]."</p>");
                        echo("<p class=\"m-0\">".$result["description_oeuvre"]."</p>");
                        echo("<p class=\"m-0\">Weight : ".$result["poids_oeuvre"]."</p>");
                        echo("<p class=\"m-0\">Length :  ".$result["longueur_oeuvre"] . " x " . $result["hauteur_oeuvre"] . " </p>");
                        echo("<div class=\"d-flex justify-content-end\">");
                            echo("<a href=\"inscription.php\">");
                                echo("<button class=\"btn btn-go mr-5\">Contact</button>");
                            echo("</a>");
                        echo("</div>");
                    echo("</div>");
                echo("</div>");
            } 
        ?>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
        <!-- <button style="col-12">Read More</button> -->
        <?php include 'footersite.php'; ?>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }
        </script>
    </body>
</html>