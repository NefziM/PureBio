
<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


if(isset($_POST['submit'] ))
{
    if(empty($_POST['c_name']))
		{
			$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>field Required!</strong>
															</div>';
		}
	else
	{
		
	$check_cat= mysqli_query($db, "SELECT title FROM cat where title = '".$_POST['c_name']."' ");

	
	
	if(mysqli_num_rows($check_cat) > 0)
     {
    	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Category already exist!</strong>
															</div>';
     }
	else{
       
	
	$mql = "INSERT INTO cat(title) VALUES('".$_POST['c_name']."')";
	mysqli_query($db, $mql);
			$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																New Category Added Successfully.</br></div>';
	
    }
	}

}


?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Category</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">

        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
               
            <h1><a href="index.php" id="logo" style="color:black; margin-left:25px;">PB |</a></h1>
            <h6 ><a href="index.php" id="logo" class="sub-headder position-relative" id="logo" style="color:green;margin-left:25px;">PureBio</a></h6>
    
 
                   
                
                

                
                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0">

                    </ul>

                    <ul class="navbar-nav my-lg-0">
                       

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user0-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
       
        <div class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Tableau du bord</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php"> <span><i class="fa fa-user f-s-20"></i></span><span>Clients</span></a></li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Fournisseurs</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_fournisseurs.php">Tout Les Fournisseurs</a></li>
                                <li><a href="validation.php">Fournisseurs en attente</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-solid fa-bars" aria-hidden="true"></i><span class="hide-menu">Produits</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_menu.php">Tous les produits</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Commandes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_orders.php">Toutes les commandes</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Reports</li>
                        <li> <a href="sales_report.php"><i class="fa fa-bar-chart"></i><span>Sales Report</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="page-wrapper">
          <div style="padding-top: 10px;">
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> Pure Bio </marquee>
            </div>

            <div class="container-fluid">



                <div class="row">



                    <div class="container-fluid">



                        <?php  
									        echo $error;
									        echo $success; ?>





                        <div class="col-lg-12">
                            <div class="card card-outline-primary">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Add Restaurant Category</h4>
                                </div>
                                <form action='' method='post'>
                                    <div class="form-body">
                                       
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <input type="text" name="rs_id" class="form-control">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-actions">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                            <a href="add_category.php" class="btn btn-inverse">Cancel</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Listed Categories</h4>

                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-hover table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Date</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
												$sql="SELECT * FROM cat order by d_id desc";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="7"><center>No Categories-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																					
																				
																				
																					echo ' <tr><td>'.$rows['d_id'].'</td>
																								<td>'.$rows['title'].'</td>
																								<td>'.$rows['slogan'].'</td>
																								
																									 <td><a href="delete_category.php?cat_del='.$rows['d_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="update_category.php?cat_upd='.$rows['d_id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
																									</td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>


 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <?php include "include/footer.php" ?>

    </div>

    </div>

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>


</html>