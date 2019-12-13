<?php
    include("../admin/fonctions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add page</title>    
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <header class="col-12 px-5 d-flex justify-content-between"> 
        <div class="col-2 m-auto">
            <img src="../images/logo.svg" alt="logo">
        </div>
        <a href="../site/connexion.php" class="col-12 px-5 pt-4  logout">
            Log out
        </a>
    </header>
    
    <div class="d-flex justify-content-start">
        <div class="col-md-6 m-auto mt-md-5 d-flex main p-5">
            <div class="row d-flex justify-content-center text-center">
                <form action="../admin/add_post.php" method="post">
                    <h5>Add new Artwork</h5>
                <div class="d-flex flex-wrap justify-content-between"> 
                    <input name="addtitre" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Title">
                    <input name="adddate" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Date">
                    <input name="addpoids" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Weight">
                    <input name="addhauteur" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Height">
                    <input name="addlongueur" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Length">
                    <input name="addimg" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Image name">
                    <input name="addpays" type="text" class="form-control col-12 col-md-5 my-2 mx-1" placeholder="Country">
                </div>
                    <textarea class="col-12 my-3 form-control" name="adddescription" cols="30" rows="10"
                    palceholder="Description here"></textarea>
                    <div class="col-12 mt-5 d-flex justify-content-around">
                    <button type="submit" class="btn btn-add col-4">Submit</button>
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