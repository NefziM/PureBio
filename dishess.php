
<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Pure Bio</title>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/animsition.min.css" rel="stylesheet">
    <link href="css1/animate.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<style>
    body
    {  font-family:serif;
       background-color: white ;
    }
 

</style>

<body style="font-family:serif">


<header id="header" class="header-scroll top-header headrom" style=" background-color: rgba(128, 128, 128, 0.5); ">

     <nav class="navbar navbar-dark">
    <div id="logo">
      <h1><a href="index.php">PB</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.html">Pure<br>Bio</a></h6>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
    ?>
      <label for="drop" class="toggle">Menu</label>
      <input type="checkbox" id="drop">
      <ul class="menu mt-2">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li><a href="#about">À propos de nous</a></li>
        <li><a href="#service">Catégories</a></li>
        <li><a href="your_orders.php">Mes Commandes</a></li>
        <li><a href="#blog">Actualités</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    <?php
    
    } else {
    ?>
      <label for="drop" class="toggle">Menu</label>
      <input type="checkbox" id="drop">
      <ul class="menu mt-2">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li><a href="#about">À propos de nous</a></li>
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
    <?php
    }
    ?>
  </nav>

</header>



<div class="page-wrapper" >
        <div class="top-links">
            <div class="container">
                <ul class="row links">

                    <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choisir Produit</a></li>
                    <li class="col-xs-12 col-sm-4 link-item active"><span>2</span><a href="dishes.php?res_id=<?php echo $_GET['res_id']; ?>">Choisissez votre produit préféré </a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Commander et payer</a></li>

                </ul>
            </div>
        </div>
        <?php $ress= mysqli_query($db,"select * from fournisseur where rs_id='$_GET[res_id]'");
									     $rows=mysqli_fetch_array($ress);
                                         
										  ?>
      <!--  <section class="inner-page-hero bg-image" data-image-src="images/img/restrrr.png">
            <div class="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                            <div class="image-wrap">
                                <figure><?php echo '<img src="admin/Res_img/'.$rows['image'].'" >'; ?></figure>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                            <div class="pull-left right-text white-txt">
                                <h6><a href="#"><?php echo $rows['title']; ?></a></h6>
                                <p><?php echo $rows['address']; ?></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>-->
        <div class="breadcrumb">
            <div class="container">
            </div>
        </div>
        <div class="container m-t-30">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

                    <div class="widget widget-cart">
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                            Votre panier
                            </h3>


                            <div class="clearfix"></div>
                        </div>
                        <div class="order-row bg-white">
                            <div class="widget-body">


                                <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  
{
?>

                                <div class="title-row">
                                    <?php echo $item["title"]; ?><a href="dishes.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>">
                                        <i class="fa fa-trash pull-right"></i></a>
                                </div>

                                <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control b-r-0" value=<?php echo $item["price"]."DT"; ?> readonly id="exampleSelect1">

                                    </div>
                                    <div class="col-xs-4">
                                        <input class="form-control" type="text" readonly value='<?php echo $item["quantity"]; ?>' id="example-number-input">
                                    </div>

                                </div>
                                <?php
$item_total += ($item["price"]*$item["quantity"]); 
}
?>
                            </div>
                        </div>



                        <div class="widget-body">
                            <div class="price-wrap text-xs-center">
                                <p>Totale</p>
                                <h3 class="value"><strong><?php echo $item_total." DT"; ?></strong></h3>
                                <p>Livraison gratuite !</p>
                                <?php
                                        if($item_total==0){
                                        ?>


                                <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check" class="btn btn-danger btn-lg disabled">Passer à la caisse</a>

                                <?php
                                        }
                                        else{   
                                        ?>
                                <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check" class="btn btn-success btn-lg active">Passer à la caisse</a>
                                <?php   
                                        }
                                        ?>
                            </div>
                        </div>                  


                        


                    </div>
                </div>

                <div class="col-md-8">


                    <div class="menu-widget" id="2">
                    <div class="widget-heading">
  <h3 class="widget-title text-dark">
    MENU
    <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
      <i class="fa fa-angle-right pull-right"></i>
      <i class="fa fa-angle-down pull-right"></i>
    </a>
  </h3>
  <div class="clearfix"></div>
  <div class="search-form-wrapper pull-right">
  <form class="search-form" action="search.php" method="GET">
  <input type="hidden" name="res_id" value="<?php echo $_GET['res_id']; ?>">
  <input type="text" name="search" placeholder="Search...">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>


  </div>
</div>

                        <div class="collapse in" id="popular2">
                       
        <?php
        $stmt = $db->prepare("SELECT produit.* FROM produit WHERE rs_id = ?");
    $stmt->bind_param("s", $_GET['res_id']);
    $stmt->execute();
    $products = $stmt->get_result();
    $sql = $db->prepare("SELECT title FROM fournisseur WHERE rs_id = ?");
    $sql->bind_param("s", $_GET['res_id']);
    $sql->execute();
    $four = $sql->get_result();

if ($products->num_rows > 0) {
    while ($product = $products->fetch_assoc()) {
        // Le code pour afficher les produits ici 
        ?>
        <div class="food-item">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-8">
                    <form method="post" action='dishes.php?res_id=<?php echo $_GET['res_id']; ?>&action=add&id=<?php echo $product['d_id']; ?>'>
                        <div class="rest-logo pull-left">
                            <a class="restaurant-logo pull-left" href="#">
                                <?php echo '<img src="admin/Res_img/dishes/'.$product['img'].'" alt="Food logo">'; ?>
                            </a>
                        </div>

                        <div class="rest-descr">
                            <h6><a href="#"><?php echo $product['title']; ?></a></h6>
                            <p><?php echo $product['slogan']; ?></p>
                            <?php
                            if ($four->num_rows > 0) {
                                $fournisseur = $four->fetch_assoc();
                                echo "<p>Fournisseur: ".$fournisseur['title']."</p>";
                            }
                            ?>
                        </div>
                    </form>
                </div>
                 <form method="post" action='dishes.php?res_id=<?php echo $_GET['res_id']; ?>&action=add&id=<?php echo $product['d_id']; ?>'>
                <div class="col-xs-12 col-sm-12 col-lg-3 pull-right item-cart-info">
                    <span class="price pull-left"><?php echo $product['price']; ?>DT</span>
                    <input class="b-r-0" type="text" name="quantity" style="margin-left:30px;" value="1" size="2" />
                    <input type="submit" class="btn theme-btn" style="margin-left:5px;" value="Ajouter au panier" />
                </div>
                        </form>
            </div>
        </div>
        <?php
    }
} else {
    echo "Aucun produit trouvé.";
}


?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    </div>
    <br><br><br><br>
    <footer style="background-color:black">
    <?php include "include/footer.php" ?></footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>