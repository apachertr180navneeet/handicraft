<?php
    include 'include/header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Collection</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Collection</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
          $get_val = $_GET['collection_list_edit'];
          $query_s="SELECT * FROM `mr_handicraft_export_collection` where collection_id='$get_val'";
          $run_s=$db->select($query_s);
          $row=$run_s->fetch_assoc();
          extract($row);
    ?>


    <?php
          if(isset($_POST['category_submit']))
          {
            $query="Update mr_handicraft_export_collection SET `collection_name`='".$_POST['collection']."' Where collection_id='".$_POST['collectionid']."'";
            $query_run=$db->update($query);
            if($query_run)
            {
              echo "<script>alert('Collection Update Succecfully...')</script>";
              echo "<script>open('collection_list.php','_self')</script>";
            }
            else
            {
              echo "<script>alert('Please Try Again...')</script>";
              echo "<script>open('collection_list.php','_self')</script>";
            }
          }
     ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Collection</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="">
                <div class="card-body">
                  <input type="hidden" name="collectionid" class="form-control" value="<?php echo $collection_id;?>" id="exampleInputcategory1" placeholder="Enter Category Name">
                  <div class="form-group">
                    <label for="exampleInputcollection1">Collection Name</label>
                    <input type="text" name="collection" class="form-control" value="<?php echo $collection_name;?>" id="exampleInputcollection1" placeholder="Enter Collection Name">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="category_submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
      include 'include/footer.php';
?>
