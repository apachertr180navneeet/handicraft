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
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickFormcategory" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <div class="col-sm-6" style="float:left;">
                       <div class="form-group">
                          <label>Product Category</label>
                          <select class="form-control">
                              <option>Seating</option>
                              <option>Coffee Table</option>
                              <option>End Table</option>
                          </select>
                        </div>
                     </div>
                     <div class="col-sm-6" style="float:right;">
                        <div class="form-group">
                           <label>Product Collection</label>
                           <select class="form-control">
                               <option>Fish</option>
                               <option>Frog</option>
                               <option>option 3</option>
                               <option>option 4</option>
                               <option>option 5</option>
                           </select>
                         </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputcategory1">Product Name</label>
                    <input type="text" name="collection" class="form-control" id="exampleInputcategory1" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputcategory1">Product Name</label>
                    <input type="text" name="collection" class="form-control" id="exampleInputcategory1" placeholder="Enter Product Name">
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
