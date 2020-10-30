<?php
  @session_start();
  include 'include/connection.php';
  $db = new Database();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- =====  BASIC PAGE NEEDS  ===== -->
        <meta charset="utf-8" />
        <title>Mr. Handicraft Export</title>
        <!-- =====  CSS  ===== -->
        <link href="../../../use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css" />
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
        <link rel="shortcut icon" href="../images/favicon.png" />
        <link rel="apple-touch-icon" href="../images/apple-touch-icon.html" />
        <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.html" />
        <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.html" />
    </head>
    <body>
        <div class="loder"></div>
        <div class="wrapper">
            <!-- =====  HEADER START  ===== -->
            <header id="header">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" />
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header" style="margin-top: -2%;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                            <a class="navbar-brand" href="index.php"> <img src="images/image1.png" class="logo logo-display" alt="" /> <img src="images/image1.png"  class="logo logo-scrolled" alt="" /> </a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left pull-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category</a>
                                    <ul class="dropdown-menu">
                                      <?php
                                          $i=0;
                                          $query_category="SELECT * FROM `mr_handicraft_export_category` where category_status = 1  ORDER BY category_id DESC";
                                          $run_category=$db->select($query_category);
                                          while($row=$run_category->fetch_assoc())
                                          {
                                            $i++;
                                            extract($row);
                                       ?>
                                        <li><a href="category_page.php?category_id=<?php echo $category_id;?>"><?php echo $category_name;?></a></li>
                                       <?php
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="category_page_left.php" class="dropdown-toggle" data-toggle="dropdown">Collection</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="collection_page.php">Fish</a></li>
                                        <li><a href="collection_page.php">Frog</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact_us.php">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- End Side Menu -->
                </nav>
                <!-- End Navigation -->
            </header>
            <!-- =====  HEADER END  ===== -->
