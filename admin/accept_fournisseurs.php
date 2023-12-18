<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"UPDATE fournisseur SET acc=1 WHERE rs_id = '".$_GET['fournisseur_acc']."'");
header("location:validation.php");  

?>