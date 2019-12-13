<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <script src="scripts/jquery.js"></script>
</head>
<body>
    <div class="col-2 offset-10 mt-3 text-center"> 
        <a href="#">EN</a> |
        <a href="site/main.es.php">ES</a>
    </div>
    <article class="hero col-12 d-md-flex pt-5" id="hero0">
    <div class="col-md-1"></div>
        <div class="col-12 col-md-4 text-left mt-5">
            <h1>Galeria de Cauca</h1>
            <div>
            <?php include 'model/galerie.eng.php';?>
            </div>
            <div class="d-flex justify-content-end">
                <a href="site/oeuvres.php">
                    <button class="btn decouvrir mt-md-3">Discover</button>
                </a>
            </div>
        </div>
        <slider class="col-12 col-md-6 slide hi-slide">
            <caca class="hi-prev "></caca>
            <div class="hi-next "></div>
            <ul class="col-12 flex-wrap">
                <li><img src="images/masque.svg" alt="Img 1" /></li>
                <li><img src="images/chien.svg" alt="Img 2" /></li>
                <li><img src="images/joug.svg" alt="Img 3" /></li>
                <li><img src="images/masque.svg" alt="Img 1" /></li>
                <li><img src="images/joug.svg" alt="Img 3" /></li>
                <li><img src="images/chien.svg" alt="Img 2" /></li>
                <li><img src="images/joug.svg" alt="Img 3" /></li>
                </ul>
        </slider>
    </article>
    <article class="hero text-center pt-5">
        <h1 class="my-4">Don Diege Casamandra</h1>
        <section class="d-flex flex-wrap justify-content-center mt-5  ">
            <div class="col-12 col-md-3">
                <img src="images/carlos4.jpg" alt="che">
            </div>
            <div class="col-12 col-md-4 p-3">
                <?php include 'model/don.eng.php';?>
            </div>    
        </section>
    </article>
    <article class="hero text-center pt-5">
        <div class="col-12 slide hi-slide d-flex justify-content-center">
            <div class="hi-prev "></div>
            <div class="hi-next "></div>
            <ul>
                <li><img src="images/paysage2.svg" alt="Img 1" /></li>
                <li><img src="images/paysage.svg" alt="Img 2" /></li>
                <li><img src="images/paysage3.svg" alt="Img 3" /></li>
                <li><img src="images/paysage2.svg" alt="Img 1" /></li>
                <li><img src="images/paysage.svg" alt="Img 2" /></li>
                <li><img src="images/paysage3.svg" alt="Img 3" /></li>
                <li><img src="images/paysage3.svg" alt="Img 3" /></li>
            </ul>
        </div>
        <h3 class="font-weight-bold py-4">Vénézuela</h3>
        <p>Région</p>
        <div class="text-center col-md-5 m-auto py-md-4">
            <?php include 'model/ven.eng.main.php';?>
        </div>
        <button class="btn decouvrir mt-3">Read more</button>
    </article>

    <script type="text/javascript" src="scripts/jquery.hislide.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slide').hiSlide();
            $('.carousel').carousel();
        });
    </script>
</body>
</html>