<?php 
session_start();
	$tpoid = $_SESSION['s_id'];

$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect("$host","$user","$pass");
mysqli_select_db($conn,"placement");

$title=$_POST['title'];
$date=$_POST['date'];
$description=$_POST['description'];
$venue=$_POST['venue'];
$ldate=$_POST['last_date'];

$contact=$_POST['contact'];
$email=$_POST['email'];




$sql="insert into news(title,date,description,venue,last_date,contact,email) values ('$title','$date','$description','$venue','$ldate','$contact','$email')";


if(!mysqli_query($conn,$sql))
{
die ('error:'.mysql_error());
}
else{ 
header("location:postednews.php"); // put your home page neme here
}
?>