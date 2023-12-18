<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
$id=$_SESSION["user_id"];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Toutes les commandes</title>
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <h1><a href="index.php" id="logo" style="color:black; margin-left:25px;">PB |</a></h1>
                <h6><a href="index.php" id="logo" class="sub-headder position-relative" id="logo" style="color:green;margin-left:25px;">PureBio</a></h6>
                <div class="navbar-collapse">
                    
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
                            <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user0-icn.png" alt="user" class="profile-pic" /></a>
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
                   <li> <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-solid fa-bars" aria-hidden="true"></i><span class="hide-menu">Produit</span>
                       
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="all_menu.php">Tous les produits</a></li>
                            <li><a href="add_menu.php">Ajouter produit</a></li>
                        
                        </ul></a>
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
            <div style="padding-top: 10px;">
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">Pure Bio</marquee>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="col-lg-12">
                            <div class="card card-outline-primary">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Toutes les commandes</h4>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Client</th>
                                                <th>Produit</th>
                                                <th>Quantité</th>
                                                <th>Prix</th>
                                                <th>Adresse</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id WHERE rs_id=$id";
                                                $query = mysqli_query($db, $sql);

                                                if (mysqli_num_rows($query) > 0) {
                                                    while ($rows = mysqli_fetch_array($query)) {
                                                        echo '<tr>
                                                            <td>'.$rows['username'].'</td>
                                                            <td>'.$rows['title'].'</td>
                                                            <td>'.$rows['quantity'].'</td>
                                                            <td>'.$rows['price'].'DT</td>
                                                            <td>'.$rows['address'].'</td>';

                                                        $status = $rows['status'];
                                                        if ($status == "" or $status == "NULL") {
                                                            echo '<td> <button type="button" class="btn btn-info"><span class="fa fa-bars" aria-hidden="true"></span> Dispatch</button></td>';
                                                        } elseif ($status == "in process") {
                                                            echo '<td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> On The Way!</button></td>';
                                                        } elseif ($status == "closed") {
                                                            echo '<td> <button type="button" class="btn btn-primary"><span class="fa fa-check-circle" aria-hidden="true"></span> Delivered</button></td>';
                                                        } elseif ($status == "rejected") {
                                                            echo '<td> <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Cancelled</button></td>';
                                                        }

                                                        echo '<td>'.$rows['date'].'</td>
                                                            <td>
                                                                <a href="delete_orders.php?order_del='.$rows['o_id'].'" onclick="return confirm(\'Are you sure?\');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a>
                                                                <a href="view_order.php?user_upd='.$rows['o_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>';
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="8"><center>No Orders</center></td></tr>';
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

        <?php include "include/footer.php" ?>
    </div>

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
</body>
</html>
