<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delcid'];

$r = $obj->query("delete from city where c_id='$id'");
if ($r) 
{
	header('location:viewcity.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>