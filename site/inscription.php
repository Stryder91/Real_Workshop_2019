<?php

    include("../admin/fonctions.php");

if (!empty($_POST))
{
    if (!isset($_POST["money"]))
    {
        echo("Sorry you don't have the required amout of money to access our services");
    }   
    else {
        $email = change($_POST["email"]);
        $nom = change($_POST["nom"]);
        $prenom = change($_POST["prenom"]);
        $password = change($_POST["password"]);
        
        $sql = "insert into users (email,nom,prenom,mot_passe) values('$email','$nom','$prenom','$password')";
        $query = mysqli_query($lien,$sql);
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
        <h1 class="col-12 py-5">Sign Up</h1>
        <div class="col-md-7">
            <form class="d-flex flex-wrap justify-content-center" method="post" action="inscription.php">
                <input type="text" name="nom" class="form-control col-3 p-3 my-5 mx-2 jauneBorder" placeholder="Lastname">
                <input type="text" name="prenom" class="form-control col-3 my-5 mx-2 bleuBorder" placeholder="Firstname">
                <input type="email" name="email" class="form-control col-6 m-3 rougeBorder" placeholder="Email" required>
                <input type="password" name="password" class="form-control col-6 m-3 noirBorder" placeholder="Password">
                <div class="col-6 mt-3">
                    <p>
                        <div class="d-flex">
                            <label for="checkbox">Do you have at least 5M petrodollar ?</label>
                            <input id="checkbox" type="checkbox" class="pt-2" name="money"/>
                        </div>
                        <a href="#">
                            By submitting you accept our Web Site Terms and Conditions of Use 
                        </a>
                    </p>
                    <input type="submit" class="btn btn-go" value="Sign Up" required/>   
                </div>
            </form>
            <div class="mt-5">
                <a href="login.php">Already have an account ? Login!</a>
            </div>
        </div>
    </section>
    <?php include 'footersite.php';?>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
</body>
</html>