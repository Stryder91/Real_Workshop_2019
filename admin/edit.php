<?php
    include("../admin/fonctions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification page</title>    
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <style>
        .hidden {
            display : none;
        }
    </style>
</head>
<body>
    <header class="col-12 px-5 d-flex justify-content-between"> 
        <div class="col-2 m-auto">
            <img src="../images/logo.svg" alt="logo">
        </div>
        <a href="../site/connexion.php" class="px-5 pt-4  logout">
            Log out
        </a>
    </header>
    
    <div class="d-flex justify-content-start">

             <div class="col-6 m-auto mt-5 d-flex main">
            
                <div class="row d-flex justify-content-center text-center">
                    <?php
                    $sql = "select * from oeuvre where _id_oeuvre='".change($_GET['_id_oeuvre'])."'";
                    $query = mysqli_query($lien,$sql);
                    $result = mysqli_fetch_assoc($query);
                    
                    echo("<form action=\"../admin/edit_post.php?_id_oeuvre=\"".$result["_id_oeuvre"]."method=\"get\">");
                    echo("<div class=\"row entete d-flex justify-content-between\">");
                    echo("<div class=\"col-12 pb-4 m-auto\"> <span class=\"grey\">Artwork ID : </span> ".$result["_id_oeuvre"]."</div>");
                    ?>
                        <input name="title" type="text" class="form-control col-5 my-2 mx-1" placeholder="Title">
                        <input name="date" type="text" class="form-control col-5 my-2 mx-1" placeholder="Date">
                        <input name="poids" type="text" class="form-control col-5 my-2 mx-1" placeholder="Weight">
                        <input name="hauteur" type="text" class="form-control col-5 my-2 mx-1" placeholder="Height">
                        <input name="longueur" type="text" class="form-control col-5 my-2 mx-1" placeholder="Length">
                        <input name="image" type="text" class="form-control col-5 my-2 mx-1" placeholder="Image URL">
                    </div>
                        <textarea class="col-12 my-3 form-control" name="description" cols="30" rows="10"
                        palceholder="Description here"></textarea>
                        <div class="col-12 mt-5 d-flex justify-content-around">
                        <button type="submit" class="btn btn-add col-4">Submit</button>
                        <?php 
                            $sql = "select * from oeuvre where _id_oeuvre='".change($_GET['_id_oeuvre'])  ."'";
                            $query = mysqli_query($lien,$sql);
                            while ($result = mysqli_fetch_assoc($query))
                            {
                                echo("<input class=\"hidden\" name=\"edit\" type=\"text\" value=\"".$result["_id_oeuvre"]."\" >");
                            }

                        ?>
                        <button class="btn-add col-4 btn">
                            <a href="dashboard.php">
                                Cancel
                            </a>
                        </button>
                        </div>
                    </form>
                </div>
            </div>
    </div> 
</body>
</html>