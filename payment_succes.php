<!DOCTYPE html>
<html>
<head>
    <title>Paiement réussi</title>
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
            margin-bottom: 20px;
        }

        .container p {
            margin-bottom: 10px;
        }

        .container .success-message {
            color: #4CAF50;
            font-weight: bold;
        }

        .container a {
            color: #4CAF50;
            text-decoration: none;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
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
        <h2>Paiement réussi</h2>
        <p class="success-message">Votre paiement a été effectué avec succès.</p>
        <p>Merci d'avoir effectué votre achat !</p>
        <p><a href="your_orders.php">Voir mes commandes</a></p>
    </div>
</body>
</html>
