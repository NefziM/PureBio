<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Pure Bio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="PureBio" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);


    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
 
  <link href="css/font-awesome.min.css" rel="stylesheet">
 
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>

  <div class="banner-left-side" id="home">
    <div class="headder-top">
      <?php
session_start();
if(isset($_SESSION['user_id'])) {
?>
  <nav>
  <div id="logo">
    <h1 ><a href="index.php" style="color:white;">PB</a></h1>
  </div>
  <div class="sub-headder position-relative">
    <h6 ><a href="index.php" style="color:#F3BC48">Pure<br>Bio</a></h6>
  </div>
  <label for="drop" class="toggle">Menu</label>
  <input type="checkbox" id="drop">
  <ul class="menu mt-2">
    <li class="active"><a href="index.php">Acceuil</a></li>
    <li><a href="#about">A propos nous</a></li>
    <li><a href="#service">Catégories</a></li>
    <li><a href="your_orders.php">Mes Commandes</a></li>
    <li><a href="#blog">Actualités</a></li>
    <li><a href="logout.php">Logout</a></li>
    
  </ul>
</nav>

<?php
} else {
?>
  <nav>
    <div id="logo">
      <h1><a href="index.php" >PB</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.html">Pure<br>Bio</a></h6>
    </div>
    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop">
    <ul class="menu mt-2">
      <li class="active"><a href="index.php">Acceuil</a></li>
      <li><a href="#about">A propos nous</a></li>
      <li><a href="#service">Catégories</a></li>
      <li><a href="#blog">Actualités</a></li>
      <li>
      <a href="#">Login &#9662;</a>
      <ul class="sub-menu">
        <li><a href="loginF.php">Fournisseur</a></li>
        <li><a href="login.php">Client</a></li>
      </ul>
    </li>
    </ul>
  </nav>
<?php
}
?>

    </div>
    <div class="main-banner text-center">
      <div class="container">
        <div class="social-icons mb-lg-4 mb-3">
          <ul>
            <li class="facebook">
              <a href="#">
                <span class="fa fa-facebook"></span>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="rss">
              <a href="#">
                <span class="fa fa-instagram"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2"></h5>
          <h4> PureBio </h4>
        </div>
        <div class="slide-info-txt">
          <p style="color:white">Le pouvoir de la nature, simplement pour vous...</p>
        </div>
      </div>
    </div>
  </div>
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">à propos de nous</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Un magasin bio propose des produits naturels et biologiques, cultivés sans pesticides ni additifs
          artificiels. On y trouve des fruits, légumes, produits laitiers, viandes, poissons et articles de soins
          écologiques.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-5 video-info-img text-center position-relative">
          <div class="abut-img-w3l">
            <img src="images/bb1.jpg" alt="" class="img-fluid">
          </div>
          <div class="abut-img-two">
            <img src="images/bb3.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 left-abut-txt ">
          <div class="about-right-grid">
            <h2 class="mb-3">Notre nourriture devrait être notre médicament, nos médicaments biologiques devraient être
              notre nourriture pour votre santé</h2>
            <p>Bienvenue sur notre marché en ligne de produits biologiques ! Nous offrons une plateforme pratique pour
              les vendeurs et les acheteurs de produits naturels, biologiques et écologiques. En tant que vendeur, créez
              facilement un compte et mettez vos produits en vente pour atteindre un large public de consommateurs
              conscients. En tant qu'acheteur, parcourez une variété de produits de différents vendeurs, tout en
              soutenant les petites entreprises et les pratiques écologiques. Rejoignez notre communauté dès aujourd'hui
              pour vivre un mode de vie plus sain et durable !</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 
  <section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Catégories</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab2.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=1" > Fruits Et Légumes Biologiques </a>
              </h4>
              <p class="mt-2"> Cela pourrait inclure une large gamme de produits frais, tels que des pommes, des oranges, du brocoli, de la laitue, des carottes, etc. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab5.jpg" alt="news image" class="img-fluid" style="width: 1000px; height: 175px;">

            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=1" > Produits De Soin Naturels </a>
              </h4>
              <p class="mt-2">Cela pourrait inclure des produits tels que des nettoyants, des sérums,des toniques. tous fabriqués avec des ingrédiants naturels comme des extraits botaniques et ces huiles essentielles.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab6.jpeg" alt="news image" class="img-fluid" style="width: 1000px; height: 175px;">
            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=2" > Compléments Alimentaires Naturels Et Biologiques </a>
              </h4>
              <p class="mt-2">Cela pourrait inclure une variété de suppléments fabriques avec des vitamines, des minéraux et ddes extraits de plantes.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab1.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=3" > Mode Végétale</a>
              </h4>
              <p class="mt-2">Des vétements et accessoires fabriqués à partir de matériaux d'origine végétale, cultivés et transformés de maniére durable et respectueusede l'environnement.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab4.png" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=4" > Plantes Et Jardinage</a>
              </h4>
              <p class="mt-2">Tout ce qui concerne les plantes, à l'intérieur, ainsi que les outils et fournitures nécessaires a leur entretien.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab3.png" alt="news image" class="img-fluid" style="width: 1000px; height: 175px;">
            <div class="ser-text-wthree mt-3">
              <h4>
              <a href="dishes.php?res_id=1" >  Produits De Nettoyage Biologiques</a>
              </h4>
              <p class="mt-2">Une gamme de produits de nettoyage biologiques pour une maison propre et saine. Fabriqués à partir d'ingrédients naturels et sans produits chimiques nocifs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="blog py-lg-5 py-md-4 py-sm-3 py-3" id="blog">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Blog</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Découvrez nos produits biologiques : naturels, durables et sains pour vous et notre planète
        </p>
      </div>
      <div class="row">
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/bb2.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>MAI</li>
                  <li>10</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Les bénéfices des produits biologiques pour la santé </a>
            </h4>
            <p>Les produits biologiques : bienfaits pour la santé, pas de pesticides, choix en hausse</p>
             <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/04/2023</a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/bb3.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>AVRIL</li>
                  <li>24</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Explosion de la demande de produits biologiques</a>
            </h4>
            <p>Demande de produits biologiques en hausse pour une alimentation saine et écologique !</p> <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">29/04/2023</a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/g4.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">L'agriculture biologique favorise la biodiversité </a>
            </h4>
            <p>L'agriculture biologique préserve sols, habitats naturels et pollinisateurs, favorisant ainsi la biodiversité.</p> <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">30/05/2023</a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class="row ">
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Adresse</h4>
          <div class="bottom-para ">
            <div class="footer-office-hour">
              <ul>
                <li class="mb-2">
                  <h6>Adresse</h6>
                </li>
                <li>
                  <p>ISET RADES,
                    <br>L2DSI1.
                  </p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>N° Télephone</h6>
                </li>
                <li>
                  <p>+ (216) 77 567 901</p>
                </li>
                <li class="my-2">
                  <h6>Email</h6>
                </li>
                <li>
                  <p>
                    <a href="mailto:MN@gmail.com">MN@gmail.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Contactez-nous</h4>
          <div class="footer-office-hour">
            <ul>
              <li>
                <p>Contactez-nous sur le TWITTER</p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:MN@gmail.com">MN@gmail.com.com</a>
                </p>
              </li>
              <li class="mb-3">
                <span class="font-italic">NOUR EL HOUDA SAMMARI</span>
              </li>
              <li>
                <p>
                  noursam2365@gmail.com<br> 
                  nefzimalek@gmail.com
                </p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:info@example.com">MN@GMAIL.com</a>
                </p>
              </li>
              <li>
                <span class="font-italic">NEFZI MALEK</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Bulletin d'information</h4>
          <div class="newsletter">
            <form action="#" method="post" class="d-flex">
              <input type="email" name="Your Email" class="form-control" placeholder="Your Email" required="">
              <button class="btn1">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
              </button>
            </form>
          </div>
          <div class="footer-office-hour mt-3">
            <p>Votre EMAIL</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#home" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section>
</body>

</html>