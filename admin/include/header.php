
<!-- connection file -->

<?php
  @session_start();
  include 'include/connection.php';
  $db = new Database();

?>

<?php
   if(!isset($_SESSION['man']))
   {

     echo "<script>open('index.php','_self')</script>";
   }
 ?>




<!DOCTYPE html>
<html>
    <head>
        <title>Mr. Handicraft Export</title>
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css" />
        <link rel="stylesheet" href="dist/css/adminlte.css" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
        <!-- datatable -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css" />
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <div style="font-size: xx-large; font-weight: bolder; margin-left: 861px;">
                      Super Panel
                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="dist/img/image2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
                    <span class="brand-text font-weight-light" style="font-weight: bold !important;font-size: 18px;" >Mr. Handicraft Export</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <a href="dashboard.php" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                              <a href="about.php" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                  About
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="contact_list.php" class="nav-link">
                                    <i class=" nav-icon far fa-user"></i>
                                    <p>
                                        Enquiry List
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="product_enqury.php" class="nav-link">
                                    <i class="nav-icon fab fa-product-hunt"></i>
                                    <p>
                                        Product Enquiry List
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                              <a href="category_list.php" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                  Category
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                              <a href="collection_list.php" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                  Collection
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="product_list.php" class="nav-link">
                                    <i class="nav-icon fab fa-product-hunt"></i>
                                    <p>
                                        Product
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
