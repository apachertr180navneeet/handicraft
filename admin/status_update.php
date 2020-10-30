<?php

  include 'include/connection.php';
  $db = new Database();


  /************* For active Services **********************/

    if(isset($_GET['category_active_id']))
    {
  		$query="Update mr_handicraft_export_category SET `category_status`='1' Where category_id='".$_GET['category_active_id']."'";
  		$query_run=$db->update($query);
  		if($query_run)
  		{
  			echo "<script>open('category_list.php','_self')</script>";
  		}
  		else
  		{
  			echo "<script>alert('Please Try Again...')</script>";
  			echo "<script>open('category_list.php','_self')</script>";
  		}
    }


    /************* For Inactive Services **********************/

      if(isset($_GET['category_inactive_id']))
      {
    		$query="Update mr_handicraft_export_category SET `category_status`='0' Where category_id='".$_GET['category_inactive_id']."'";
    		$query_run=$db->update($query);
    		if($query_run)
    		{
    			echo "<script>open('category_list.php','_self')</script>";
    		}
    		else
    		{
    			echo "<script>alert('Please Try Again...')</script>";
    			echo "<script>open('category_list.php','_self')</script>";
    		}
      }



      /************* For active Services **********************/

        if(isset($_GET['collection_active_id']))
        {
      		$query="Update mr_handicraft_export_collection SET `collection_status`='1' Where collection_id='".$_GET['collection_active_id']."'";
      		$query_run=$db->update($query);
      		if($query_run)
      		{
      			echo "<script>open('collection_list.php','_self')</script>";
      		}
      		else
      		{
      			echo "<script>alert('Please Try Again...')</script>";
      			echo "<script>open('collection_list.php','_self')</script>";
      		}
        }


        /************* For Inactive Services **********************/

          if(isset($_GET['collection_inactive_id']))
          {
        		$query="Update mr_handicraft_export_collection SET `collection_status`='0' Where collection_id='".$_GET['collection_inactive_id']."'";
        		$query_run=$db->update($query);
        		if($query_run)
        		{
        			echo "<script>open('collection_list.php','_self')</script>";
        		}
        		else
        		{
        			echo "<script>alert('Please Try Again...')</script>";
        			echo "<script>open('collection_list.php','_self')</script>";
        		}
          }


 ?>
