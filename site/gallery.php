<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A propos</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/gallerie.css">
    <script src="../scripts/jquery.js"></script>
    <style>
                body{    
                    overflow-x: hidden;
                }
                body { background-image: url(ur.jpg);}
                h1 { margin:150px auto 30px auto; text-align:center;}

                .hi-slide { position: relative; width: 754px; height: 292px; margin: 115px auto 0; }
                
                .hi-slide .hi-next,
                .hi-slide .hi-prev 
                { position: absolute;
                top: 50%; 
                width: 40px;
                height: 40px; 
                margin-top: -20px;     
                border-radius: 50px; 
                    
                    
                line-height: 40px;
                text-align: center; 
                cursor: pointer;
                background-color: #fff; 
                color: black;               
                transition: all 0.6s;
                font-size: 20px; 
                font-weight: bold;
                }
                .hi-slide .hi-next:hover, 
                .hi-slide .hi-prev:hover 
                {
                opacity: 1; 
                background-color: #fff;  
                }
                .hi-slide .hi-prev { left: -60px; }
                .hi-slide .hi-prev::before { content: '<'; }
                .hi-slide .hi-next { right: -60px; }
                .hi-slide .hi-next::before { content: '>'; }
                .hi-slide > ul
                    { 
                        list-style: none; 
                        position: relative;
                        width: 754px; 
                        height: 292px; 
                        margin: 0;
                        padding: 0;
                }
                .hi-slide > ul > li {
                    overflow: hidden; 
                    position: absolute; 
                    z-index: 0; 
                    left: 377px;
                    top: 146px; 
                    width: 0; 
                    height: 0; 
                    margin: 0; 
                    padding: 0;
                    border: 3px solid #fff;              
                    background-color: #323232; 
                    cursor: pointer; }
            
            .hi-slide > ul > li > img { width: 100%; height: 100%; background-position: center;}
            #hero1{
                background:url("../images/gallery_big.png");
                    background-size:cover;
                    background-position:center center;
                    background-attachment:fixed;
                }
                
                .hero, .content{
                    text-align:center; 
                    position:relative;
                    width: 100%;
                }
                
                .inner{
                    min-height:800px;
                    position: relative;
                }
                
                .hero .inner{
                    background: rgba(0,0,0,0.2) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAYAAACddGYaAAAAD0lEQVQIW2NkQABjRmQOAAM+AGkQsDBSAAAAAElFTkSuQmCC) repeat;}
                
                
                .copy{
                    position:absolute; 
                    top:50%; 
                    height:10em; 
                    margin-top:-5em; 
                    width:100%;
                }
                
                .hero h1, .hero p{ 
                    color:#fff;
                }
		</style>
</head>
<body>
<?php include 'headersite.php';?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/connexion.css">
    <section id="hero1" class="hero">
        <div class="inner">
        <div class="copy">
            <h1> Galería Cauca y son historia </h1>
        </div>
        </div>

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center">
    <h1 class="col-12" style="font-weight: bold; font-size: 25px;">GALERIA DE CAUCA</h1>
    <br>
    <p class="col-12" style="font-size: 12px;">Discover our history</p>
    <br>
    <img src="../images/Ligne_10.png" alt="" class="col-5">
    <br>
    <br>
    <p class="col-8 text-center m-auto" style="font-size: 14px; font-weight: bold; width: 100% ;">Beatriz Gil gallery linked to the arts circuit of the Las Mercedes urbanization, in Caracas, was founded in June 2004, in a space that traditionally was always connected to the city's cultural environment. For more than fifteen years, we have consolidated ourselves as a space that watches over the support, promotion and diffusion of the different plastic manifestations of the new national talents. Our mission is to build bridges of approach to the proposals of young emerging Venezuelan artists, who have continuously built a coherent discourse over time, expressed in different techniques and genres. Venezuelan art, from the country Venezuela in South America, has a long and eventful history. Venezuela's museums and galleries are well on the way to forming a new discourse in which the public can experience and interact. Capturing the Venezuelan public view and interact with the installations and collections within a museum setting, re-establishes a new base for understanding the Venezuelan patron. This considered, the museum visitor is better understood and served as it is realized that a modern Venezuela, is represented as a diverse culture, intertwined with the traditional. <br> <br> The proactive cultural center strives to reacquaint itself with its audience, who in fact, are participants and beneficiaries of such cultural and heritage organizations. An effort by the Venezuelan government to connect its people to its cultural organizations is a response to cultural diversity and changes within.
    </p>
    <br>
    <img src="../images/Ligne_10.png" alt="" class="col-5">
    <br>

    <slider class="col-12 col-md-6 slide hi-slide d-flex justify-content-center">
        <caca class="hi-prev "></caca>
        <div class="hi-next "></div>
        <ul class="col-12 flex-wrap">
            <li><img src="../images/musee.png" alt="Img 1" /></li>
            <li><img src="../images/musee2.png" alt="Img 2" /></li>
            <li><img src="../images/musee3.png" alt="Img 3" /></li>
            <li><img src="../images/musee.png" alt="Img 1" /></li>
            <li><img src="../images/musee2.png" alt="Img 2" /></li>
            <li><img src="../images/musee3.png" alt="Img 3" /></li>
            <li><img src="../images/musee .png" alt="Img 1" /></li>  
            </ul>
    </slider>
    <br>
    <img src="../images/Ligne_10.png" alt="" class="col-5">
    <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="d-flex justify-content-center flex-wrap text-center">
    
    <p class="col-12 col-md-5 mt-5" style="font-weight: bold;">Son of maria de Osaria and the lord of Rionegro del Álvaro Pérez, he embarked from an early age  to explore the Americas and will become, in turn, military, explorer, mercenary, administrator civil and ended up being an international expert in Colombian art.
He made history on July 24, 196 7 to be the founder of the port of Nuestra de Caraballeda,
the current Caraballeda in the state of Vargas and the same year on September 7, he made history to be the founder of the Cauca Gallery, which is located in the city of Caracas.

    </p>
    
    <div class="col-12 col-md-3 mt-5">
        <img src="../images/carlos4.jpg" alt="l'artiste" style="box-shadow: 1px 1px 12px #555; margin-top: -4%;">
    </div>
   
   
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="text-center">
<img src="../images/Ligne_10.png" alt="" class="col-5 text-center">
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="d-flex justify-content-center m-auto col-12 flex-wrap">



  <div class="text-center col-12 col-md-3">
    <img src="../images/carlos.png" alt="artiste1">
    <br>
    <h2>Paul Zermo</h2>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nostrum, vel facere distinctio maiores quia ipsam, aliquid quam laborum ex dicta impedit quo aperiam iusto dolor fugiat officia. Est, voluptatum!</p>
  <br>
  </div>

  <div class="text-center col-12  col-md-3">
    <img src="../images/carlos3.png" alt="artiste2">
    <br>
    <h2>Thomas Da costa</h2>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore hic, impedit quos quidem maiores consequatur! Iure excepturi quos doloremque. Ducimus, unde non magni iure mollitia dolore consequuntur corporis eum aspernatur!</p>
  </div>

  <div class="text-center col-12  col-md-3">
    <img src="../images/carlos2.png" alt="artiste3" >
    <h2>Lionel Del Riviera</h2>
    <br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque placeat maiores iure iste aperiam voluptate consequuntur, velit consequatur totam sequi architecto deleniti unde blanditiis deserunt tenetur rerum? Ad, nulla obcaecati.</p>
 </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="text-center">
<img src="../images/Ligne_10.png" alt="" class="col-5">
</div>
<script type="text/javascript" src="../scripts/jquery.hislide.js" ></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.slide').hiSlide();
        })
</script>
<?php include 'footersite.php';?>

</body>
</html>