<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

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

                    <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                        <ul>
                            <li>
                                <div class="drop-title">Notifications</div>
                            </li>

                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
              
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
            <div class="container-fluid">
            </div>
        </div>
    </div>

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>
