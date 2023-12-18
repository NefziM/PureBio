<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if( 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
		

	
	
	
       
	 
        $mql = "INSERT INTO produit(nomproduit,descrp,photoprod,prix,qtstq) VALUES('".$_POST['fname']."','".$_POST['desc']."','".$_POST['prix']."','".md5($_POST['qtk'])."','".$_POST['photo']."')";	mysqli_query($db, $mql);
	
		 header("refresh:0.1;url=login.php");
    }
	




?>
<head>
    <meta charset="UTF-8">
    <title>Login || Pure Bio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/login.css">

    <style type="text/css">
    #buttn {
        color: #fff;
        background-color: #5c4ac7;
    }
    form label, 
form input, 
form textarea, 
form select {
  color: #fff;
}

form input[type="submit"] {
  background-color: #fff;
  color: #000;
}

form input[type="file"] {
  color: #000;
}

    </style>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<body>
    <div style=" background-image: url('images/bb3.jpg');">
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="" width="18%"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="categories.php">Catégories <span class="sr-only"></span></a> </li>

                            <?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Registre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="registration.php">client</a>
          <a class="dropdown-item" href="addf.php">fournisseur</a>
        </div>
      </li>
                              ';
                              
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-wrapper">

            <div class="container">
                <ul>


                </ul>
            </div>
                 <H2 style="text-align:center; color:green; font-family:serif; font-weight:bold">Créer un fournisseur</H2>
            <section class="contact-page inner-page">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <form action="choose.html" method="post">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Nom du produit</label>
                                                <input class="form-control" type="text" name="fname" id="example-text-input" >
                                            </div>
                                           
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Description</label>
                                                <textarea class="form-control" id="exampleTextarea" name="desc" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Prix</label>
                                                <input class="form-control" type="text" name="prix" id="example-tel-input-3">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Quantité en stock</label>
                                                <input type="password" class="form-control" name="qtk" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="exampleFileInput">Upload a photo</label>
                                                <input type="file" class="form-control-file" id="exampleFileInput" name="photo" accept=".jpg,.png">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                            <p><input type="submit" value="Register" name="submit" class="btn theme-btn"></p>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <?php include "include/footer.php" ?>

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