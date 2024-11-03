<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login client || Ouma_art</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
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
    <header id="header" class="header-scroll top-header headrom" style="background-color:#808080">
    <nav>
    <div id="logo">
      <h1><a href="index.php" style="color:chite;">OA</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.php" style="color:#F3BC48">Ouma<br>Art</a></h6>
    </div>
    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop">
    <ul class="menu mt-2">
      <li class="active"><a href="index.php">Acceuil</a></li>
      <li>
      <a href="login.php">Login</a>
     
    </li>
    </ul>
  </nav>
    </header>
    <div  >

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
      $loginquery = "SELECT * FROM users WHERE email='$email' AND password='" . md5($password) . "'";
      $result = mysqli_query($db, $loginquery);
      $row = mysqli_fetch_array($result);

      if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        header("Location: index.php"); 
      } else {
          $message = "Email ou mot de passe incorrect !";
      }
  }
}

?>
        <div class="pen-title" >
            </div>
                <div class="module form-module" style="margin-bottom:10px;"  >
                    <div class="toggle"  >
                    </div>
                    <div class="form">
                        <h2 style="color:green;font-size:16px;"><b>Connectez-vous à votre compte</b></h2>
                        <span style="color:red;"><?php echo $message; ?></span>
                        <span style="color:green;"><?php echo $success; ?></span>
                        <form action="" method="post">
                            <input type="text" placeholder="Adresse mail" name="email" />
                            <input type="password" placeholder="Mot de passe" name="password" />
                            <input type="submit" id="buttn" name="submit" value="Se connecter" />
                        </form>
                    </div>
                    <div class="cta">Pas encore inscrit ?<a href="registration.php" style="color:#5c4ac7;">créer un compte</a></div>
                </div>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>




                <div class="container-fluid pt-3">
                    <p></p>
                </div>



                <?php include "include/footer.php" ?>

               


</body>

</html>