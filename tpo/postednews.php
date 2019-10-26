<?php
include "tpomenu.php"; ?>
<head>
	<script src="https://use.typekit.net/bkt6ydm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../tpo/assets/css/new.css">
  
<style type="text/css">
	
body{
	
  font-family: 'Poppins', sans-serif;
	}
 
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

				mysqli_select_db($con,"placement");

				$sql = "SELECT * from news ORDER BY newsid DESC";
				$result = mysqli_query($con,$sql);
	//			$row=mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result))
{
                $nid = $row['newsid'];
                $title = $row['title'];
                $description = $row['description'];
                $date = $row['date'];
                $venue = $row['venue'];
                $ldate = $row['last_date'];
                $contact = $row['contact'];
                $email = $row['email'];


?>

<!-- New -->
<div class="py-5 service-6 ">
    <div class="container d-flex justify-content-center">
        <!-- Row  -->
        <div class="row ">
            <!-- Column -->
            <div class="col-md-4 wrap-service6-box">
                <div class="card border-0 bg-success-gradiant text-white mb-4">
				<form name="remove news" method="post" action="removenews.php">	<article class="post">
                    <div class="card-body">
                        <p class="font-weight-medium text-white"><span class="posted-on"><time class="entry-date published" date=""><font color="black">Posted:</font>&nbsp;<?php echo $date; ?></time></span></p>
						<h2><?php echo $title; ?> </h2>
						<p class="mt-3"><?php echo $description; ?></p>
						<p class=""><font color="black">Venue:</font>&nbsp;<?php echo $venue; ?></p>
						<p class="subtitle"><font color="black">Last Date:</font>&nbsp;<?php echo $ldate;?></p>
						<p class="subtitle"><font color="black">Email: </font>&nbsp;<?php echo $email; ?></p>
						<p class="subtitle"><font color="black">Contact: </font>&nbsp;<?php echo $contact; ?></p>
						<a href="#f4" class="linking"><input type="hidden" value="<?php echo $nid; ?>" name="newsid">
            			<button type="submit" class="btn btn-action">Remove Event</button></a>
					</div>
					</article>
				</form>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
</div>
<?php } ?>
<!-- End -->
 
<!-- Timeline -->

<!-- Timeline -->

<br><br><br>
<?php include "../foot.html"; ?>
