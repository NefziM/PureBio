<?php
include("connection/connect.php"); 
  if(isset($_POST['btn-ajouter']))
  {
     if( 
		empty($_POST['titre']) ||  
		empty($_POST['description'])||
		empty($_POST['prix'])||
		empty($_POST['image']) )
		{
			$message = "All fields must be Required!";
		}
	else
	{
      $titre = $_POST['titre'];
      $description = $_POST['description'];
      $prix = $_POST['prix'];
      $img = $_POST['image'];
      
                      $req2 ="INSERT INTO dishes VALUES (NULL,'$titre','$description','$prix',$img')" ;
                      mysqli_query($db, $req2);
                       if($req2){
                           $message = '<p style="color:green">Produit ajouté ! </p>';
                       }else {
                           $message = '<p style="color:red ">Produit Non ajouté !</p>';
                       }
                  }

              }
          
      else {
        $message = '<p style="color:red">Veuillez remplir tous les champs !</p>';
      }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUITS GESTION</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   
    <section class="input_add">
        <form action="" method="POST" enctype="multipart/form-data">
           <div class="message">
               <?php 
               if(isset($message)){
                   echo $message ;
               }

                   ?>
           </div>
            <label>Nom du produit</label>
            <input type="text" name="titre">
            <label>Prix du produit</label>
            <input type="text" name="prix">
            <label>Description du produit</label>
            <textarea name="description"  cols="30" rows="10"></textarea>
            <label>Ajouter une image</label>
            <input type="file" name="image">
            <input type="submit" value="Ajouter" name="btn-ajouter">
        </form>
    </section>
</body>
</html>