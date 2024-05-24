<?php 
include 'common/connection.php';
session_start();
$cid=$_SESSION['userid']; 
$r =$obj->query("delete from cart where customer_id='$cid'");
if ($r)
{
	header('location:shop-grid.php');
}
else
{
	echo "Error";
}



?>