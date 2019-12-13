<?php

    include("../admin/fonctions.php");

if (!empty($_POST))
{
    $sql = "select * from users";
    $query = mysqli_query($lien,$sql);
    $result = mysqli_fetch_assoc($query);
	// Récupération des données de formulaires
	
	$identifiant = change($_POST["identifiant"]);
	$password = change($_POST["password"]);
	
    // Limite de l'exercice : un seul compte est valable
	if (($identifiant != $result["email"]) or ($password != $result["mot_passe"]))
	{
		echo("<p>Erreur d'authentification pour le user !</p>");
	}
	
	// L'utilisateur existe
	
	else
	{
		// Création d'une variable session
		
		$_SESSION["user"] = $identifiant;
		echo $_SESSION["user"];
		// Redirection vers la page d'accueil privée
		header("location:../site/comptePerso.php");
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/connexion.css">
</head>
<body>
    <?php include 'headersite.php';?> 
    <section class="d-flex flex-wrap justify-content-center text-center">
        <h1 class="col-12 py-5">Profile</h1>
        <div class="col-12">
            <a href="inscription.php">
                <button class="btn btn-Black p-2 px-5">Sign UP</button>
            </a>
            <p class="mt-5 pt-2">Or</p>
        </div>
        <div class="col-md-7">
            <form class="d-flex flex-wrap justify-content-center mt-5" method="post" action="login.php">
                <input type="email" name="identifiant" class="form-control col-md-6 m-md-3 jauneBorder" placeholder="Email" required>
                <input type="password" name="password" class="form-control col-md-6 mt-2 m-md-3 bleuBorder" placeholder="Password">
                <div class="col-10 my-2 mb-4"
                    <a href="#">Forgot password ?</a>
                </div>
                <div class="col-6 mt-3">
                    <input type="submit" class="btn btn-go" value="Login" required/>   
                </div>
            </form>
        </div>
    </section> 
    <?php include 'footersite.php';?>
</body>
</html>