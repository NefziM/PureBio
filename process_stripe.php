<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de paiement</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <style>
       
       body {
           font-family:serif;
           background-color: #f2f2f2;
       }

       .container {
           max-width: 400px;
           margin: 100px;
           padding: 20px;
           background-color: #fff;
           border-radius: 5px;
           box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
           margin-left:450px;
       }
 
       .container h2 {
           text-align: center;
           margin-bottom: 20px;
       }

       .container label {
           display: block;
           margin-bottom: 5px;
       }

       .container input[type="text"],
       .container input[type="password"] {
           width: 100%;
           padding: 8px;
           border-radius: 3px;
           border: 1px solid #ccc;
       }

       .container button {
           width: 40%;
           padding: 10px;
           background-color:#2E613C;
           color: #fff;
           border: none;
           border-radius: 3px;
           cursor: pointer;
           margin-left:120px;
           margin-top:20px;
           border-radius:10px;
           font-size:17px;
       }

       .container button:hover {
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
    <div class="container">
        <h2>Formulaire de paiement</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="card_number">Numéro de carte *</label>
            <input type="text" name="card_number" id="card_number" placeholder="Entrez votre numéro du carte" required>

            <label for="password">Code de carte *</label>
            <input type="password" name="password" id="password" placeholder="Entrez lo code du carte" required>

            <button type="submit">Payer</button>
        </form>
    </div>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['card_number'];
    $password = $_POST['password'];

    if (strlen($cardNumber) === 10 && strlen($password) === 6) {
        header("Location: payment_succes.php");
        exit();
    } else {
        echo "Numéro de carte ou code incorrect";
    }
}
?>

</body>
</html>
