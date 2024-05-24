<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delaid'];

$r = $obj->query("delete from area where a_id='$id'");
if ($r) 
{
	header('location:viewarea.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>