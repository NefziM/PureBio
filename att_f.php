<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>En attente d'approbation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        #buttn {
            color: #fff;
            background-color: #5c4ac7;
        }
        #header {
  background-color:#808080;
  padding: 10px 0;
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#F3F7F7;">
    <header id="header" class="header-scroll top-header headrom">
        <nav>
            <div id="logo">
                <h1><a href="index.html">PB</a></h1>
            </div>
            <div class="sub-headder position-relative">
                <h6><a href="index.php">Pure<br>Bio</a></h6>
            </div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop">
            <ul class="menu mt-2">
                <li class="active"><a href="index.php">Acceuil</a></li>
                <li>
                    <a href="#">Login &#9662;</a>
                    <ul class="sub-menu">
                        <li><a href="loginF.php">Fournisseur</a></li>
                        <li><a href="login.php">Client</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div>
        <div class="pen-title"></div>
        <div class="module form-module">
            <div class="toggle"></div>
            <div class="form">
                <h2 style="color:red;">En attente d'approbation</h2>
                <p>Votre demande est en attente d'approbation. Veuillez patienter.</p>
                <a href="loginF.php">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
<br><br><br><br>
<footer style="background-color:#474B4B;color:white;">
    <?php include "include/footer.php" ?>
</footer>
</body>

</html>
