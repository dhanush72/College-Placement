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

	<br>
	<br>

<div class="container Table">
	<div id="respond">
<div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th>Tpo Details</th>
                    <th></th>


                    </tr>
                </thead>
                 <tbody>
                     <form action="updateprofile.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Name</td>
												<td>:</td>
                        <td><?php echo $name ?></td>
                        <td></td><td></td>  <td></td>
                     </tr>
                         <tr class="warning">
                        <td>Degree</td>
												<td>:</td>
                        <td><?php echo $degree ?></td>
                         <td></td>  <td></td><td></td>
                     </tr>
                    <tr class="success">
                        <td>Email</td>
												<td>:</td>
                        <td><?php echo $email ?></td>
                       <td></td><td></td><td></td>
                     </tr>

                    <tr class="info">
                        <td>Mobile</td>
												<td>:</td>
                        <td><?php echo $mobile ?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>
                    <!-- <tr class="active">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr> -->
                </tbody>
            </table>
						<button style="float: right;" type="submit" class="btn btn-action">Edit Profile</button>
        </div>
    </div>
</div>

<!-- New Table -->

<!-- End New Table -->


</div><br><br><br><br><Br>

</body>
<?php include "../foot.html"; ?>
