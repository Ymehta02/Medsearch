<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delid'];

$r = $obj->query("delete from category where id='$id'");
if ($r) 
{
	header('location:viewcategory.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>