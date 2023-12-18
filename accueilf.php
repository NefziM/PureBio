<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fournisseur</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

<div id="main-wrapper">
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">

            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php">
                    <div id="logo">
                        <h1><a href="index.html">PB</a></h1>
                    </div>
                    <div class="sub-headder position-relative">
                        <h6><a href="index.html">Pure<br>Bio</a></h6>
                    </div>
                </a>
            </div>

            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="admin/images/bookingSystem/user0-icn.png" alt="user" class="profile-pic" />
                        </a>
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
                  
                   <li class="nav-label">Log</li>
<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-solid fa-bars" aria-hidden="true"></i><span class="hide-menu">Produit</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="all_menu.php">Tous les produits</a></li>
                            <li><a href="add_menu.php">Ajouter produit</a></li>
                        
                        </ul>
                    </li>
                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Commande</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="all_orders.php">Mes commandes</a></li>
                            
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

<script src="admin/js/lib/jquery/jquery.min.js"></script>
<script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/js/jquery.slimscroll.js"></script>
<script src="admin//sidebarmenu.js"></script>
<script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="admin/js/custom.min.js"></script>

</body>

</html>
