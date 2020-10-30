<?php
      include 'include/header.php';
?

test
<?php
      $get_val = $_GET['category_id'];
      $query_s="SELECT * FROM `mr_handicraft_export_category` where category_id='$get_val'";
      $run_s=$db->select($query_s);
      $row=$run_s->fetch_assoc();
      extract($row);
?>
<!-- =====  BANNER STRAT  ===== -->
<div class="breadcrumb">
    <h1>Category</h1>
    <ul>
        <li style="color: black !important;font-weight: bolder !important;"><a style="color: black !important;" href="index.php">Home</a></li>
        <li style="color: black !important;font-weight: bolder !important;">Category</li>
        <li class="active" style="color: black !important;font-weight: bolder !important;"><?php echo $category_name;?></li>
    </ul>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 mb_30" id="col4">
            <div class="row">
                <div class="product-layout product-grid col-lg-3 col-md-4 col-xs-6">
                    <div class="item">
                        <div class="product-thumb clearfix mb_30">
                            <div class="image product-imageblock">
                                <a href="product_detail_page.php">
                                    <img data-name="product_image" src="images/product/product1.jpg" alt="SIDE BOARD" title="SIDE BOARD" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption product-detail text-left">
                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="SIDE BOARD">SIDE BOARD</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- =====  CONTAINER END  ===== -->
  <?php
        include 'include/footer.php';
  ?>
