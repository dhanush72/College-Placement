<?php
include "tpomenu.php"; ?>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../tpo/assets/css/new.css">
  <style type="text/css">
  body{
		font-family: 'Poppins', sans-serif;
	}
      .bs-example{
      	margin: 20px;
      }

      hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #7C7A7A;
  }
  /* .Table{
  	border: 2px dashed #34495e;
  	padding-bottom: 10px;
  } */
  </style>
</head>
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

				mysqli_select_db($con, "placement");

				$sql = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result = mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
                $name=$row['name'];
                $degree=$row['degree'];
                $email=$row['email'];
                $mobile=$row['mobile'];


?>
<div class="container">
<h3>UPDATE TPO DETAILS</h3>
    <div id="respond">
    <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>Upload Your Photo Here</th>
                    <th>Edit Photo</th>
                </tr>
                </thead>
                <tbody>
                <form action ='uploadfile.php' method='POST' enctype='multipart/form-data'>
                <tr>
                <td>
                    <input type='file' name='myfile'>
                </td>
                <td><input type ='submit' class="btn btn-action" value="Upload" name='Upload'></td>
                </tr>
                </form>
                <tbody>
            </table>
        </div>

        <!-- New Table -->
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
                <form action="tpoupdate.php" method="post" id="commentform">
                    
                <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $degree ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $mobile ?></td>
                </tr>
                <tr>
                 <td><input type="text" class="form-control" name="name" id="inputName" placeholder="Update Name" value="<?php echo $name ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                        <td><input type="text" class="form-control" name="degree" id="inputName" placeholder="Update Degree" value="<?php echo $degree ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Update Email" name="email" value="<?php echo $email ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Update Mobile" name="mobile" value="<?php echo $mobile ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                        <td><button  type="submit" class="btn btn-action">Submit</button></td>
                </tr>
                <tbody>
            </table>
        </div>
        <!-- End New Table -->

    </div>
</div>

        <!---UPDATE INFO BLOCK ENDS--->

        <!---UPDATE PASSWORD BLOCK STARTS--->
<div class="container">
	<div id="respond">
        <h3 id="reply-title">Update Password</h3>
            <form action="updatepass.php" method="post" id="commentform">
				<div class="form-group">
				  <input type="password" class="form-control" id="inputpassword" placeholder="Enter your new password" name="password">
				</div>
				<div class="form-group">
                                <input type="password" class="form-control" id="inputpassword"  placeholder="Confirm Password"  name="repeatpassword">
				</div>
				<div class="row">
				    <div class="col-md-8"></div>
				        <div class="col-md-4 text-right">
  						    <button type="submit" class="btn btn-action">Submit</button>
				        </div>
				</div> <!-- /respond -->
            </form>
	</div>	<!-- /container -->
</div>

<!-- Update -->

<!-- End Update -->
<br><br><br><br><br>
        <!---UPDATE INFO BLOCK ENDS--->
<?php include "../foot.html"; ?>
