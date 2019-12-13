<?php

    include("../admin/fonctions.php");

if (!empty($_POST))
{
    $sql = "select * from admin";
    $query = mysqli_query($lien,$sql);
    $result = mysqli_fetch_assoc($query);

	// Récupération des données de formulaires
	
	$identifiant = change($_POST["identifiant"]);
	$password = md5(change($_POST["password"]));
	
	// Limite de l'exercice : un seul compte est valable
	if (($identifiant != $result["name_admin"]) or ($password != $result["password_admin"]))
	{
		echo("<p>Erreur d'authentification !</p>");
	}
	
	// L'utilisateur existe
	
	else
	{
		// Création d'une variable session
		
		$_SESSION["admin"] = $identifiant;
		
		// Redirection vers la page d'accueil privée
		
		header("location:../admin/dashboard.php?connection");
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/connexion.css">
</head>
<body>
    <?php include 'headersite.php';?>  
    <section class="d-flex flex-wrap justify-content-center text-center">
        <h1 class="col-12 py-5">Welcome Back</h1>
        <span class="col-12 dashboard">Dashboard Admin</span>
        <div class="col-md-7">
            <form class="d-flex flex-wrap justify-content-center mt-5" method="post" action="connexion.php">
                <input type="text" name="identifiant" class="form-control col-md-6 m-3 jauneBorder" placeholder="Email" required>
                <input type="password" name="password" class="form-control col-md-6 m-3 bleuBorder" placeholder="Password">
                <div class="col-6 mt-3">
                    <input type="submit" class="btn btn-go" value="Login" required/>   
                </div>
            </form>
        </div>
        <div class="col-10 mt-5">
            <a href="inscription.php">Want to create an account ?</a>
        </div>
        <div class="col-10 mt-5">
            <a href="#">Forgot password ?</a>
        </div>
    </section>
    <?php include 'footersite.php';?>
</body>
</html>