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
                        <li class="breadcrumb-item btn btn-block btn-success">
                            <a href="addcollection.php" style="color: #fff; font-weight: bolder;"><i class="fas fa-plus"></i></a>
                        </li>
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
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                      $i=0;
                                      $query_collection="SELECT * FROM `mr_handicraft_export_collection`ORDER BY collection_id DESC";
                                      $run_collection=$db->select($query_collection);
                                      while($row=$run_collection->fetch_assoc())
                                      {
                                        $i++;
                                        extract($row);
                                   ?>
                                   <tr>
                                     <td style="text-align: center;"><?php echo $i;?></td>
                                     <td style="text-align: center;"><?php echo $collection_name;?></td>
                                     <td style="text-align: center;">
                                       <?php if($collection_status == 0){ ?>
                                         <a href="status_update.php?collection_active_id=<?php echo $collection_id;?>" type="button" class="btn btn-block btn-danger" style="width: 50%; text-align: center;">Inactive</a>
                                       <?php }else{ ?>
                                         <a href="status_update.php?collection_inactive_id=<?php echo $collection_id;?>" type="button" class="btn btn-block btn-success" style="width: 50%; text-align: center;">Active</a>
                                       <?php } ?>
                                     </td>
                                     <td style="text-align: center;">
                                         <a href="delete/delete.php?collection_list_del=<?php echo $collection_id;?>" class="btn btn-block btn-danger" onclick="geek()" style="width: 20%; color: #fff;"><i class="fas fa-trash-alt"></i></a>
                                         <a href="editcollection.php?collection_list_edit=<?php echo $collection_id;?>" class="btn btn-block btn-default"style="width: 20%;"><i class="fas fa-edit"></i></a>
                                     </td>
                                   </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Name</th>
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

<script>
    function geek() {
        var doc;
        var result = confirm("Press a button!");
        if (result == true) {
            doc = "Category Deleted successfully......";
        } else {
            doc = "Catetgory Not Deleted successfully......";
        }
        document.getElementById("g").innerHTML = doc;
    }
</script>

<?php
      include 'include/footer.php';
?>
