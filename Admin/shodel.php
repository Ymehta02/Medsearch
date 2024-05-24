<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['sdelid'];

$r = $obj->query("delete from showroom where shop_id='$id'");
if ($r) 
{
	header('location:showroom.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>