<?php
  include '../include/connection.php';
  $db = new Database();

  /************* For Services **********************/

    if(isset($_GET['category_list_del']))
    {
      $query="DELETE FROM `mr_handicraft_export_category` WHERE category_id='".$_GET['category_list_del']."'";
      $query_run=$db->deleted($query);
      if($query_run)
      {
        echo "<script>open('../category_list.php','_self')</script>";
      }
      else
      {
        echo "<script>alert('Please Try Again...')</script>";
        echo "<script>open('category_list.php','_self')</script>";
      }
    }



    if(isset($_GET['collection_list_del']))
    {
      $query="DELETE FROM `mr_handicraft_export_collection` WHERE collection_id='".$_GET['collection_list_del']."'";
      $query_run=$db->deleted($query);
      if($query_run)
      {
        echo "<script>open('../collection_list.php','_self')</script>";
      }
      else
      {
        echo "<script>alert('Please Try Again...')</script>";
        echo "<script>open('collection_list.php','_self')</script>";
      }
    }

?>
