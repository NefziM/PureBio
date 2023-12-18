<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if(empty($_POST['firstname']) || 
   	    empty($_POST['lastname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
	
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  
       	
          echo "<script>alert('Password not match');</script>"; 
    }
	elseif(strlen($_POST['password']) < 6)  
	{
      echo "<script>alert('Password Must be >=6');</script>"; 
	}
	elseif(strlen($_POST['phone']) < 10)  
	{
      echo "<script>alert('Invalid phone number!');</script>"; 
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
          echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
    }
	elseif(mysqli_num_rows($check_username) > 0) 
     {
       echo "<script>alert('Username Already exists!');</script>"; 
     }
	elseif(mysqli_num_rows($check_email) > 0) 
     {
       echo "<script>alert('Email Already exists!');</script>"; 
     }
	else{
       
	 
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
	mysqli_query($db, $mql);
	
		 header("refresh:0.1;url=login.php");
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
    <title>Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body{

        }
#header {
  background-color:#808080;
  padding: 10px 0;
}

.navbar {
  display: flex;
  align-items: center;
}

.container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand img {
  max-width: 18%;
}

.navbar-toggler {
  color: #fff;
  border: none;
  font-size: 24px;
  cursor: pointer;
  background-color: transparent;
}

.navbar-nav {
  display: flex;
  align-items: center;
}

.nav-item {
  margin-right: 15px;
}

.nav-link {
  color: #fff;
  text-decoration: none;
}

.nav-link:hover {
  text-decoration: underline;
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
  font-weight:bold;
  padding: 10px 20px;
  border: solid grey 1px;
  cursor: pointer;
  border-radius:15px;
}

.btn.theme-btn:hover {
  background-color: #456154;
}

</style>
</head>


<body>
    <div >
    <header id="header" class="header-scroll top-header headrom">
    <nav>
    <div id="logo">
      <h1><a href="index.php" style="color:white;">PB</a></h1>
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
        <div class="page-wrapper">

            <div class="container">
                <ul>

                
                </ul>
            </div>

            <section class="contact-page inner-page">
            <h3 style="font-weight:bold;text-align:center;color:#437960;">--Créer un compte client--</h3>
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Nom*</label>
                                                <input class="form-control" type="text" name="username" id="example-text-input" placeholder="Nom d'utilisateur">

                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Prénom*</label>
                                                <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="Prénom d'utilisateur">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Nom de famille*</label>
                                                <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Nom de famille">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Adresse email*</label>
                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse email">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">N° Télephone*</label>
                                                <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Numéro de télephone">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Mot de passe*</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Confirmer le mot de passe*</label>
                                                <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Confirmer le mot de passe">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="exampleTextarea">Adresse de livraison*</label>
                                                <textarea class="form-control" id="exampleTextarea" name="address" rows="3" placeholder="Adresse"></textarea>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p> <input type="submit" value="S'inscrire" name="submit" class="btn theme-btn"> </p>
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