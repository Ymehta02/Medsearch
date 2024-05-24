<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['did'];

$r = $obj->query("delete from showroom_bookslot where slot_id='$id'");
if ($r) 
{
	header('location:dashboard-saas.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>