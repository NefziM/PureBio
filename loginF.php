<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $message = "Veuillez remplir tous les champs du formulaire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Veuillez entrer une adresse e-mail valide.";
    } else {
        $loginquery = "SELECT * FROM fournisseur WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($db, $loginquery);
        $row = mysqli_fetch_array($result);
        

        if (is_array($row)) {
            $_SESSION["user_id"] = $row['rs_id'];
            $acc = $row['acc'];
            if ($acc == 1) {
                header("Location: all_menu.php");
            } else {
                header("Location: att_f.php");
            }
            exit();
        } else {
            $message = "Email ou mot de passe incorrect !";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Fournisseur || Pure Bio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        #buttn {
  background-color: #63A24D; 
  color: white; 
  padding: 10px 20px;
  border: solid grey 1px; 
  cursor: pointer; 
  transition: background-color 0.3s ease; 
  margin-left:40px;
  margin-top:25px;
}

#buttn:hover {
  background-color: #487937; 
}

        body{ font-family:serif;}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header-scroll top-header headrom" style="background-color:#808080;margin-bottom:-60px;">
        <nav>
            <div id="logo">
                <h1><a href="index.html" style="color:white">PB</a></h1>
            </div>
            <div class="sub-headder position-relative">
                <h6><a href="index.php" style="color:#F3BC48">Pure<br>Bio</a></h6>
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
        <div class="module form-module" style="margin-bottom:50px;">
            <div class="toggle" ></div>
            <div class="form">
            <h2 style="color:green;font-size:16px;"><b>Connectez-vous à votre compte fournisseur</b></h2>
            <span style="color:red;"><?php echo $message; ?></span> 
                <form action="" method="post">
                <input type="text" placeholder="Adresse email" name="email" />
                            <input type="password" placeholder="Mot de passe" name="password" />
                            <input type="submit" id="buttn" name="submit" value="Se connecter" />
                </form>
            </div>
            <div class="cta">Pas encore inscrit ?<a href="addF.php" style="color:#5c4ac7;font-family:serif;">créer un compte</a></div>
        </div>
    </div>

    <?php include "include/footer.php" ?>

</body>

</html>
