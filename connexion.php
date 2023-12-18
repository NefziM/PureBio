<?php

class connexion {
    
    function getConnexion(){
        try{
            $dsn="mysql:host=localhost;dbname=purebio"; 
            $user="root"; 
            $pw=""; 
            $cnx= new PDO($dsn,$user,$pw); 
            return $cnx; 
       }catch (Exception $e){
            echo "Connexion à MySQL impossible :",$e->getMessage();die();
        }
    }
}

?>