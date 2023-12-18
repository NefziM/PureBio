<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();

function function_alert()
{
    echo "<script>alert('Thank you. Your Order has been placed!');</script>";
    echo "<script>window.location.replace('your_orders.php');</script>";
}

if (empty($_SESSION["user_id"])) {
    header('location:login.php');
} else {
    foreach ($_SESSION["cart_item"] as $item) {
        $item_total += ($item["price"] * $item["quantity"]);

        if (isset($_POST['submit'])) {
            $payment_method = $_POST['mod'];
            $SQL = "INSERT INTO users_orders(u_id, title, quantity, price) VALUES ('".$_SESSION["user_id"]."', '".$item["title"]."', '".$item["quantity"]."', '".$item["price"]."')";

            if (mysqli_query($db, $SQL)) {
                if ($payment_method == 'COD') {
                    function_alert();
                } else if ($payment_method == 'paypal') {
                    header('location: paypal.php');
                    exit();
                }
            }
        }
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Checkout || Pure Bio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <style>

ul li {
    display: inline;
    margin :100px;
    font-size:18px;
    
  }

.btn-primary{
    background-color:#276892;

}
.btn-primary:hover{
    background-color:#1E577B;
}

    </style>
</head>

<body style="background-color:#EBEBEC;"> 

    <div class="headder-top" style="background-color:#808080;">
<nav>
  <div id="logo">
    <h1 ><a href="index.php" style="color:white;">PB</a></h1>
  </div>
  <div class="sub-headder position-relative">
    <h6 ><a href="index.php" style="color:#F3BC48;">Pure<br>Bio</a></h6>
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
</div>
 </header>

 <div class="page-wrapper" >
        <div class="top-links">
            <div class="container" style="margin-top :20px;">
                <ul class="row links">

                    <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choisir Produit</a></li>
                    <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="dishes.php?res_id=<?php echo $_GET['res_id']; ?>">Choisissez votre produit préféré </a></li>
                    <li class="col-xs-12 col-sm-4 link-item active"><span>3</span><a href="#">Commander et payer</a></li> </ul>
                </div>
            </div> 
            <div class="container">
                <span style="color:green;">
                    <?php echo $success; ?>
                </span>
            </div>

            <div class="container m-t-30">
                <form action="" method="post">
                    <div class="widget clearfix">
                        <div class="widget-body">
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="cart-totals margin-b-20">
                                            <div class="cart-totals-title">
                                                <h4 style="color:blue">Récapitulatif du panie</h4>
                                            </div>
                                            <div class="cart-totals-fields">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Prix </td>
                                                            <td><?php echo $item_total." DT"; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Frais de livraison</td>
                                                            <td>Gratuit</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total du panier</strong></td>
                                                            <td>
                                                                <strong><?php echo $item_total." DT"; ?></strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-option">
                                    <h4 class="option-title" style="color:blue">Options de paiement</h4><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mod" id="paypal"
                                            value="paypal" checked>
                                        <label class="form-check-label" for="paypal">PayPal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mod" id="cod" value="COD">
                                        <label class="form-check-label" for="cod">Paiement à la livraison</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix"></div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-primary" style="border-radius:10px; ">Passer la commande</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var radioButtons =document.querySelectorAll('input[name="mod"]');
        radioButtons.forEach(function (radioButton) {
            radioButton.addEventListener('change', function () {
                if (radioButton.value === 'paypal') {
                    alert('Vous avez sélectionné PayPal');
                } else if (radioButton.value === 'COD') {
                    alert('Vous avez sélectionné le paiement à la livraison');
                }
            });
        });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <footer style="background-color:#384040;">
    <?php include "include/footer.php" ?>
</footer>
</body>

</html>
