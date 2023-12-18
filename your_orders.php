<!DOCTYPE html>
<html lang="en">
<?php
include ("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  
{
	header('location:login.php');
}
else
{
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>My Orders</title>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/animsition.min.css" rel="stylesheet">
    <link href="css1/animate.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <style type="text/css" rel="stylesheet">

    .indent-small {
        margin-left: 5px;
    }

    .form-group.internal {
        margin-bottom: 0;
    }

    .dialog-panel {
        margin: 10px;
    }

    .datepicker-dropdown {
        z-index: 200 !important;
    }

    .panel-body {
        background: #e5e5e5;
        /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* FF3.6+ */
        background: -webkit-gradient (radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
        /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* IE10+ */
        background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
        font: 600 15px "Open Sans", Arial, sans-serif;
    }

    label.control-label {
        font-weight: 600;
        color: #777;
    }


    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

    }
    body {
        background-color:#F1F3F3;
  background-size: cover;
}

    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .custom-table th,
    .custom-table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ccc;
    }
    
    .custom-table th {
        background-color: #C3C6C6;
        font-weight: bold;
        color:black;
        
    }
    
    .custom-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    .custom-table tbody tr:hover {
        background-color: #ebebeb;
    }
    .custom-table {
        background-color: #f2f2f2;
        margin-bottom:250px;
    }
    
</style>




</head>

<body>


<div class="banner-left-side" id="home">
    <div class="headder-top" style="background-color:#808080;">
      <?php
session_start();
if(isset($_SESSION['user_id'])) {
?>
 <nav>
  <div id="logo">
    <h1 ><a href="index.php" style="color:white;margin-left:-20px;">PB</a></h1>
  </div>
  <div class="sub-headder position-relative">
    <h6 ><a href="index.php" style="color:#F3BC48;margin-top:13px;">Pure<br>Bio</a></h6>
  </div>
  <label for="drop" class="toggle">Menu</label>
  <input type="checkbox" id="drop">
  <ul class="menu mt-2">
    <li class="active"><a href="index.php">Acceuil</a></li>
    <li><a href="#about">A propos nous</a></li>
    <li><a href="#service">Catégories</a></li>
    <li><a href="your_orders.php">Mes Commandes</a></li>
    <li><a href="#blog">Actualités</a></li>
    <li><a href="logout.php">Logout</a></li>
    
  </ul>
</nav>
<?php
} else {
?>
  <nav>
    <div id="logo">
      <h1><a href="index.html">PB</a></h1>
    </div>
    <div class="sub-headder position-relative">
      <h6><a href="index.html">Pure<br>Bio</a></h6>
    </div>
    <label for="drop" class="toggle">Menu</label>
    <!--<input type="checkbox" id="drop">-->
    <ul class="menu mt-2">
      <li class="active"><a href="index.php">Acceuil</a></li>
      <li><a href="#about">A propos nous</a></li>
      <li><a href="#service">Catégories</a></li>
      <li><a href="#blog">Actualités</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>
<?php
}
?>

    </div>
    <div class="page-wrapper" style="background-color:#fff">
    


        <div class="inner-page-hero bg-image" >
            <div class="container" > </div>

        </div>
        <div class="result-show" >
            <div class="container" >
                <div class="row" >


                </div>
            </div>
        </div>

        <section class="restaurants-page" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-xs-12">
                        <div class="bg-gray">
                            <div class="row">

                                <table class="table custom-table" >
                                    <thead >
                                        <tr>

                                            <th>Produit</th>
                                            <th>Quantité</th>
                                            <th>Prix</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php 
				
						$query_res= mysqli_query($db,"select * from users_orders where u_id='".$_SESSION['user_id']."'");
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="6"><center> avez encore passé aucune commande </center></td>';
														}
													else
														{			      
										  
										  while($row=mysqli_fetch_array($query_res))
										  {
						
							?>
                                        <tr>
                                            <td data-column="Item"> <?php echo $row['title']; ?></td>
                                            <td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
                                            <td data-column="price"><?php echo $row['price']; ?> DT</td>
                                            <td data-column="status">
                                                <?php 
																			$status=$row['status'];
																			if($status=="" or $status=="NULL")
																			{
																			?>
                                                <button type="button" class="btn btn-info"><span class="fa fa-bars" aria-hidden="true"></span> Dispatch</button>
                                                <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
                                                <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> On The Way!</button>
                                                <?php
																				}
																			if($status=="closed")
																				{
																			?>
                                                <button type="button" class="btn btn-success"><span class="fa fa-check-circle" aria-hidden="true"></span> Delivered</button>
                                                <?php 
																			} 
																			?>
                                                <?php
																			if($status=="rejected")
																				{
																			?>
                                                <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Cancelled</button>
                                                <?php 
																			} 
																			?>
                                            </td>
                                            <td data-column="Date"> <?php echo $row['date']; ?></td>
                                            <td data-column="Action"> <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-5"><i class="fa fa-trash-o" style="font-size:16px"></i></a>
                                            </td>

                                        </tr>


                                        <?php }} ?>




                                    </tbody>
                                </table>



                            </div>

                        </div>



                    </div>



                </div>
            </div>
    </div>
    </section>

<div style="background-color:#384040;margin-bottom:-60px;padding:-40px;">
    <?php include "include/footer.php" ?></div>

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
<?php
}
?>