<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de paiement</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <style>
      body{font-family:serif;
    font-weight:bold;
    background-color:#EBEBEC;}
      .payment-option img {
    display: block;
  height: auto;
  width: -30px; 
  margin-bottom: 10px;
}

.payment-option label {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}


.payment-option li {
  margin-bottom: 20px;
}
button{
    margin-left:200px;
    margin-top:20px;
    border-radius:10px;
    width:100px;
    height:40px;
    background-color:#478257 ;
    
    font-size:18px;
    border:none;
    color:white;
}
button:hover{
    background-color:#356C44;
   
}
  </style>
</head>
<body>
<nav style="background-color:#808080;">
    <div id="logo">
      <h1><a href="index.php" >PB</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.php" >Pure<br>Bio</a></h6>
    </div>
    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop">
    <ul class="menu mt-2">
      <li class="active"><a href="index.php">Acceuil</a></li>
      <li><a href="your_orders.php">Mes Commandes</a></li>
      <li><a href="#service">Catégories</a></li>
      <li><a href="#blog">Actualités</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  
    <br><br><h2 style="font-family:serif; color:#E1A10C; font-weight:bold;"><center>--Choix de paiement--</center></h2><br>
    <div style="margin-left:350px; background-color:white; width:700px; padding:50px;">
     <b ><p style="margin-left:30px;">Veuillez choisir votre mode de paiement :</p></b><br>
    
    <form action="" method="post" >
        <ul class="list-unstyled">
            <li>
                <label class="custom-control custom-radio m-b-20">
                    <input name="mod" type="radio" value="mastercard">  <img src="images/mastercard.png" alt="Mastercard" width="40"> Mastercard
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio m-b-20">
                    <input name="mod" type="radio" value="paypal"> <img src="images/paypal.png" alt="PayPal" width="40"> PayPal 
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio m-b-20">
                    <input name="mod" type="radio" value="maestro"> <img src="images/maestro.png" alt="Maestro" width="40"> Maestro 
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio m-b-20">
                    <input name="mod" type="radio" value="stripe">  <img src="images/stripe.png" alt="Stripe" width="40"> Stripe
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio m-b-20">
                    <input name="mod" type="radio" value="bitcoin"> <img src="images/bitcoin.png" alt="Bitcoin" width="40"> Bitcoin 
                </label>
            </li>
        </ul>
        
        <button type="submit" name="submit" onclick="return confirm('Confirmer votre choix');"><b>Payer</b></button>
    </form>
</div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $selectedPayment = $_POST['mod'];
        
        if ($selectedPayment === 'mastercard') {
           
            header(" Location: process_mastercard.php");
            exit();
        } elseif ($selectedPayment === 'paypal') {
            
            header("Location: process_paypal.php");
            exit();
        } elseif ($selectedPayment === 'maestro') {
            
            header("Location: process_maestro.php");
            exit();
        } elseif ($selectedPayment === 'stripe') {
          
            header("Location: process_stripe.php");
            exit();
        } elseif ($selectedPayment === 'bitcoin') {
          
            header("Location: process_bitcoin.php");
            exit();
        }
    }
    ?>
  
<br><br><br><br><br><br>
  <div style="background-color:#808080;padding:-40px;">
    <?php include "include/footer.php" ?></div>
   <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="votre_email_paypal@example.com">
        <input type="hidden" name="item_name" value="Nom de l'article">
        <input type="hidden" name="amount" value="10.00">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="https://www.votresite.com/paiement_success.php">
        <input type="hidden" name="cancel_return" value="https://www.votresite.com/paiement_cancel.php">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
    </form>-->
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
