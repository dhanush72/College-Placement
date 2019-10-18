<?php
session_start();
			$tpoid = $_SESSION['s_id'];


				$host="localhost";
				$user="root";
				$pass="";
				$con = mysqli_connect("$host","$user","$pass");


				if (!$con)
				  {

				echo "Error in DBConnect() = " . mssql_get_last_message();
				  die('Could not connect: ' . mysqli_error());

				  }

				mysqli_select_db( $con,"placement");

				$sql = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result = mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
				$username = $row['username'];
        $fullname1 = $row['fullname'];
        $tid= $tpoid;
        $name=$_POST['name'];
        $degree=$_POST['degree'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];


$sql1="UPDATE tpo_info SET name='$name',degree='$degree',email='$email',mobile='$mobile' WHERE tid='$tid'";


if (!mysqli_query($con,$sql1))
{
die('Error: ' . mysqli_error());
}
header('Location:tpohome.php');

?>
