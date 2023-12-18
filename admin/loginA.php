<?php

session_start();

$dsn = "mysql:host=localhost;dbname=purebio";
$user = "root";

$pw = "";
$cnx = new PDO($dsn, $user, $pw);
if(isset($_GET['etat']))
{ $etat=$_GET['etat'];
    switch($_GET['etat'])
    {
         case 1:echo"<script>alert('Mot de passe et/ou login INCORRECT !!!');</script>";
                break; 
        case 2:echo"<script>alert('Vous devez authentifier...');</script>";
                break;   
         
        case 3:echo"<script>alert('Ajout avec succés');</script>";
                break;    
         case 4:echo"<script>alert('Vous êtes déconnecter ');</script>";
                break; 
                case 5:echo"<script>alert('Enregistrement avec succés !!!');</script>";
                break;         
    }
}
if(isset($_POST['Envoyer'])){
    $matricule=$_POST['log'];
    $pw=$_POST['pw'];
       $_SESSION['log']=$log;
    $_SESSION['pw']=$pw;
    $sql="SELECT username,password admin WHERE username='$log' AND password='$pw' ";
    $reponse=$cnx->query($sql);
    if($reponse->rowCount() > 0){
        $donnees=$reponse->fetch();
        
        if ($donnees) {
             header('Location: accueil.php?etat=1');
            exit;
        } 
        else if ($log=="" && $pw==""){
            header("location:login.php?etat=2");exit;
        }
        else {
           
            header('Location: accueiladmin.php?etat=4');
            exit;
        }
       
        
    } else {
       
        header("location:login.php?etat=1");exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="icon" href="path/to/favicon.ico">
    <title>login</title>
   
</head>
<body>
<header>
    <div id="hh"><b><h2>Pure Bio</h2></b></div>
    <div id="im"><img src="logo.GIF" ></div>
</header>

<img class="profil" src="user.png" alt="" >
    <div class="global">
        <br>
        <h1 style="color:#0C0C59; font-family:georgia;letter-spacing:1.5px; "><b>Se connecter</b></h1><br><br><br>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <i class="fas fa-user" ></i>
 
<input type="text" name="log" id="" placeholder=" "   autocomplete="off" ><br><br><br>
        
 <i class="fas fa-lock" style=" color:#040C23;"></i>
 <input type="password" name="pw" id="" placeholder=""   autocomplete="off"><br>
 

     <button type="submit" name="Envoyer" class="btn btn-outline-secondary" id="n"> <b>Connexion</b></button>
    </form>
    <a href="addAdmin.php" id="a2" class="btn btn-outline-secondary"><b>Creér compte</b></a>
    <a href="adminup.php" id="a1" class="btn btn-outline-secondary"><b>Mot de passe oubliè?</b></a>
 
    <?php if(isset($erreur)){ ?>
            <div class="alert alert-danger" role="alert"><?php echo $erreur; ?></div>
        <?php } ?>
          
</div>

</body>
</html>
