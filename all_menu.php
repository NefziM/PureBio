<!DOCTYPE html>
<html lang="en">
<?php
    include("connection/connect.php");
    //error_reporting(0);
    session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <title>All Products</title>
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
  <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>-->
    </div>
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <span><img src="admin/images/icn.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0"></ul>
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
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin/images/bookingSystem/user0-icn.png" alt="user" class="profile-pic" /></a>
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
                        <li class="nav-label">Log</li>
                        <li> 
                            <a class="has-arrow"  href="#" aria-expanded="false"><i class="fa fa-solid fa-bars" aria-hidden="true"></i><span class="hide-menu">Product</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="all_menu.php">All Products</a></li>
<li><a href="add_menu.php">Add Product</a></li>
</ul>
</li>
<li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
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
<div class="col-12">
<div class="col-lg-12">
<div class="card card-outline-primary">
<div class="card-header">
<h4 class="m-b-0 text-white">All Product</h4>
</div>
<div class="table-responsive m-t-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
<thead class="thead-dark">
<tr>
<th>Fournisseur</th>
<th>Produit</th>
<th>Description</th>
<th>Prix</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM produit WHERE rs_id = '$user_id' ORDER BY d_id DESC";
$query = mysqli_query($db, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($rows = mysqli_fetch_array($query)) {
        $mql = "SELECT * FROM fournisseur WHERE rs_id='" . $rows['rs_id'] . "'";
        $newquery = mysqli_query($db, $mql);
        $fetch = mysqli_fetch_array($newquery);

        echo '<tr>
            <td>' . $fetch['title'] . '</td>
            <td>' . $rows['title'] . '</td>
            <td>' . $rows['slogan'] . '</td>
            <td>$' . $rows['price'] . '</td>
            <td>
                <div class="col-md-3 col-lg-8 m-b-10">
                    <center><img src="admin/Res_img/dishes/' . $rows['img'] . '" class="img-responsive radius" style="max-height:100px;max-width:150px;" /></center>
                </div>
            </td>
            <td>
                <a href="delete_menu.php?menu_del=' . $rows['d_id'] . '" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a>
                <a href="update_menu.php?menu_upd=' . $rows['d_id'] . '" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
            </td>
        </tr>';
    }
} else {
    echo "<tr><td colspan='6'>Aucun produit trouvé !</td></tr>";
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
</div>
</div>

<script src="admin/js/lib/jquery/jquery.min.js"></script>
<script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
<script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/js/jquery.slimscroll.js"></script>
<script src="admin/js/sidebarmenu.js"></script>
<script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="admin/js/custom.min.js"></script>
<script src="admin/js/lib/datatables/datatables.min.js"></script>
<script src="admin/js/lib/datatables/datatables-init.js"></script>
</body>
</html>