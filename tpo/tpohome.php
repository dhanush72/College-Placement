<?php
include "tpomenu.php"; ?>
<?php
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

				mysqli_select_db($con,"placement");

				$sql = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result = mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
                $name=$row['name'];
                $degree=$row['degree'];
                $email=$row['email'];
                $mobile=$row['mobile'];


?>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../tpo/assets/css/new.css">
	<style type="text/css">
	body{
		
		font-family: 'Poppins', sans-serif;
	}
	    .bs-example{

	    }

	    hr {
	margin-top: 20px;
	margin-bottom: 20px;
	border: 0;
	border-top: 1px solid #7C7A7A;
	}
.Table{
	border: 2px dashed #34495e;
	padding-bottom: 10px;
}
	</style>
</head>
<body>
<!-- New Table -->
<h3>TPO DETAILS</h3>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Degree</th>
            <th>Email</th>
            <th>Mobile</th>
           <th>Edit Profile</th>
        </tr>
        </thead>
        <tbody>
        <form action="updateprofile.php" method="post" id="commentform">
        <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $degree ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $mobile ?></td>
        <td><button  type="submit" class="btn btn-action">Edit Profile</button></td>
        </tr>
        <tbody>
    </table>
</div>
<!-- End New Table -->
</body>
<?php include "../foot.html"; ?>
