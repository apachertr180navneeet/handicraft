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
                    <li class="breadcrumb-item btn btn-block btn-success"><a href="addproduct.php" style="color: #fff;font-weight: bolder;"><i class="fas fa-plus"></i></a></li>
                  </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Collection List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Prooduct Code</th>
                                        <th>Product Name</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Fish</td>
                                        <td>Fish</td>

                                        <td><button type="button" class="btn btn-block btn-danger" style="width: 30%;">A</button><button type="button" class="btn btn-block btn-success" style="width: 30%;">IA</button></td>
                                        <td>
                                          <button type="button" class="btn btn-block btn-danger" style="width: 30%;"><i class="fas fa-trash-alt"></i></button>
                                          <a href="editcollection.php" class="btn btn-block btn-default" style="width: 30%;"><i class="fas fa-edit"></i></a>
                                          <a href="editcollection.php" class="btn btn-block btn-default" style="width: 30%;"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Prooduct Code</th>
                                        <th>Product Name</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php
      include 'include/footer.php';
?>
