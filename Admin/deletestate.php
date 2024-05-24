<?php
$obj  =new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delsid'];

$r = $obj->query("delete from state where s_id='$id'");
if ($r) 
{
	header('location:viewstate.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>