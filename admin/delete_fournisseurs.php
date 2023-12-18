 
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM fournisseur WHERE rs_id = '".$_GET['fournisseur_del']."'");
header("location:validation.php");  

?>