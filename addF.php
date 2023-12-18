<?php

session_start(); 
error_reporting(0);
include("connection/connect.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['title']) || 
        empty($_POST['email']) || 
        empty($_POST['phone']) || 
        empty($_POST['address']) || 
        empty($_FILES['img']['name']) || 
        empty($_POST['password']) || 
        empty($_POST['confirm_password'])
    ) {
        $message = "Tous les champs doivent être remplis !";
    } else {
        $title = $_POST['title'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $image = $_FILES['img']['name'];
        $date = date("Y-m-d");
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        
        if ($password !== $confirmPassword) {
            echo "<script>alert('Les mots de passe ne correspondent pas.');</script>";
        } elseif (strlen($_POST['password']) < 6) {
            echo "<script>alert('Le mot de passe doit contenir au moins 6 caractères.');</script>";
        } elseif (strlen($_POST['phone']) < 10) {
            echo "<script>alert('Numéro de téléphone invalide !');</script>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Adresse e-mail invalide. Veuillez saisir une adresse e-mail valide.');</script>";
        } else {
            $checkEmailQuery = mysqli_query($db, "SELECT email FROM fournisseur WHERE email = '$email'");
            if (mysqli_num_rows($checkEmailQuery) > 0) {
                echo "<script>alert('L'adresse e-mail existe déjà.');</script>";
            } else {
                $sql = "INSERT INTO fournisseur (title, email, phone, address, image, date, password, acc) VALUES ('$title', '$email', '$phone', '$address', '$image', '$date', '$password', 0)";
                if (mysqli_query($db, $sql)) {
                    move_uploaded_file($_FILES['img']['tmp_name'], "chemin_vers_le_dossier/" . $_FILES['img']['name']);
                    echo "Le fournisseur a été créé avec succès.";
                    header("Location: loginf.php");
                    exit();

                } else {
                    echo "Erreur lors de la création du fournisseur : ";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
         body {
            background-color: #f9f9f9;
            font-family: serif;
        }
        #header {
  background-color:#808080;
  padding: 10px 0;
}

        

        .contact-page {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        .row {
            margin-bottom: 20px;
        }

        .widget {
            background-color: #fff;
            padding: 20px;
        }

        .widget-body {
            margin-top: 20px;
        }

        form {
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 100px;
        }

        .btn.theme-btn {
            background-color: #587F6D;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: solid grey 1px;
            cursor: pointer;
            border-radius: 15px;
        }

        .btn.theme-btn:hover {
            background-color: #456154;
        }
        </style>
<body>
<div >
    <header id="header" class="header-scroll top-header headrom">
    <nav>
    <div id="logo">
      <h1><a href="index.php" style="color:white;">PB</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.php" style="color:#F3BC48;">Pure<br>Bio</a></h6>
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
        <div class="page-wrapper">
            <div class="container">
                <ul>
                </ul>
            </div>
            
            <section class="contact-page inner-page">
            <h3 style="font-weight:bold;text-align:center;color:#437960;">--Créer un compte Fournisseur--</h3>
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                           <div class="form-group col-sm-12">
                                                <label for="exampleInputText1"><b>Nom*</b></label>
                                                <input class="form-control" type="text" name="title" id="exampleInputText1" placeholder="Nom de Fournisseur">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1"><b>Adresse email*</b></label>
                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Adresse-email de Fournisseur" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputTel1"><b>N° Télephone*</b></label>
                                                <input class="form-control" type="text" name="phone" id="exampleInputTel1" placeholder="N° de Télephone de Fournisseur">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1"><b>Mot de passe*</b></label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword2"><b>Confirmer le Mot de passe*</b></label>
                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirmer le Mot de passe" id="exampleInputPassword2" required><br>

                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="exampleTextarea"><b> Adresse*</b></label>
                                                <textarea class="form-control" id="exampleTextarea" name="address" rows="3" placeholder="Votre Adresse "></textarea>
                                            </div>
                                            
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputText3"><b>Photo*</b></label>
                                                <input class="form-control" type="file" name="img" id="exampleInputText3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p> <input type="submit" name="submit" value="S'inscrire" class="btn theme-btn"> </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer style="background-color:#474B4B;color:white;">
            <?php include "include/footer.php" ?>
                        
                        </footer>

        </div>

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
