<?php
session_start();


$abc=session_destroy();
if($abc)
{
	echo "<script>open('index.php','_self')</script>";
}


?>
