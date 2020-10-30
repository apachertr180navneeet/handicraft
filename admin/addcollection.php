<?php
    include 'include/header.php';
?>




<?php
if(isset($_POST['category_submit']))
{

    extract($_POST);
       $query="INSERT INTO `mr_handicraft_export_collection`(`collection_name`) VALUES('$collection')";
       $query_run=$db->insert($query);
       if($query_run)
       {
         echo '<div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>Success !</strong>Product Added successfully......
         </div>';
         echo "<script>open('collection_list.php','_self')</script>";
       }
       else
       {
         echo '<div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>SomeThing Wrong!</strong>Please Try Again...
         </div>';
         echo '  <meta http-equiv="refresh" content="1">';
       }
 }
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
              <li class="breadcrumb-item active">Add Collection</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Collection</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickFormcollection" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputcollection1">Collection Name</label>
                    <input type="text" name="collection" class="form-control" id="exampleInputcollection1" placeholder="Enter Collection Name">
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
