<?php
session_start();
	$tpoid = $_SESSION['s_id'];

$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect("$host","$user","$pass");
mysqli_select_db($conn,"placement");

$nid=$_POST['newsid'];


$sql="delete from news where newsid='$nid'";


if(!mysqli_query($conn,$sql))
{
die ('error:'.mysql_error());
}
else{
header("location:postednews.php"); // put your home page neme here
}
?>
