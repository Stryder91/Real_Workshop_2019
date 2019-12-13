<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venezuela</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/annonce.css">
    <link rel="stylesheet" href="../styles/connexion.css">
</head>
<body>
<?php include 'headersite.php';?>
    <section class="row d-flex justify-content-center pt-5">
        <div class="col-2 offset-10 mt-3 text-center"> 
            <a href="venezuela.php">EN</a> |
            <a href="#">ES</a>
        </div>
        <h1 class=" col-md-4 text-center my-5">Venezuela</h1>
        <div class="col-md-2 my-3 px-4">
            <img style="border-radius: 8px;" src="../images/venezuela.png" alt="venezuelian flag">
        </div>
        <div class="col-md-7 p-4">
            <h6 class="retour">Nuestro país</h6>
            <p class="textOeuvre">
            <?php include '../model/venezuela.php';?>
            </p>
        </div>
        <div class="col-md-7 p-4">
            <h6 class="retour">Características</h6>
            <p class="textOeuvre">
              <?php include '../model/venezuela2.php';?>
            </p>
        </div>
        <div class="col-md-7 p-4">
            <h6 class="retour">Idiomas y presentación</h6>
            <p class="textOeuvre">
                <?php include '../model/venezuela3.php';?>
            </p>
        </div>
        <div class="col-md-7 p-4">
            <h6 class="retour">Climas y ciudades</h6>
            <p class="textOeuvre">
                <?php include '../model/venezuela4.php';?>
            </p>
        </div>
        <div class="col-md-7 p-4">
            <h2 class="retour">Caracas</h6>
            <p class="textOeuvre">
                <?php include '../model/venezuela2.php';?>
            </p>
        </div>
        <div class="col-md-7 p-4">
            <img style="border-radius: 8px;" src="../images/caracas.jpg" alt="caracas flag">
        </div>
        <div class="col-md-7 p-4">
            <h2 class="retour">Para saber más sobre Caracas</h6>
            <p class="textOeuvre">
                <?php include '../model/venezuela5.php';?>
            </p>
        </div>
        <a href="inscription.php" class="col-12 d-flex justify-content-center">
            <button class="btn btn-go">Contactemos nosotrus!</button>
        </a>
    </section>
<?php include 'footersite.php';?>

</body>
</html>