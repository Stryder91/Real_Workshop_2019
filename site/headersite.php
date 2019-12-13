<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
</head>
<body>
    <header class="headerMain d-flex justify-content-between p-4">
        <div class="header1 d-none d-md-block col-md-2"><a href="../index.php">
            <img src='../images/logo.svg' alt="logo"/>
        </a></div>
        <div class="header2 col-md-5 d-flex justify-content-between">
            <div class="d-flex col-12 col-md-9 justify-content-between py-2">
                <div class="bton collection-link"><a class="linkHeader" href="oeuvres.php">Collection</a></div>
                <div class="bton d-none d-md-block"><a class="linkHeader" href="gallery.php">The gallery</a></div>
                <div class="bton"><a class="linkHeader" href="venezuela.php">Venezuala & Caracas</a></div>
            </div>
            <div class="d-flex col-3">
                <a href="login.php">
                    <img src="../images/mail.svg" alt="mail" class="col-12 py-2">
                </a>
                <a href="login.php">
                    <img src="../images/user.svg" alt="user" class="col-12 py-2">
                </a>
            </div>
        </div>
        <div class="col-1"></div>
    </header>
</body>
</html>