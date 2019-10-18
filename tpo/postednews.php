<?php
include "tpomenu.php"; ?>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
.Table{
	border: 2px dashed #34495e;
	padding-bottom: 10px;
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

<main id="main">
	<div class="container Table">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
				<form name="remove news" method="post" action="removenews.php">						<article class="post">
					<header class="entry-header">
						<div class="entry-meta">
							<span class="posted-on"><time class="entry-date published" date=""><font color="black"><?php echo $date; ?></font></time></span>
						</div>
						<h1 class="entry-title" style="'Poppins', sans-serif;
                            font-size:1.5em;


                            font-weight:800;"><font color="red"><?php echo $title; ?></font></a></h1>
					</header>
					<div class="entry-content">
						<p
                           style="'Poppins', sans-serif;
                            font-size:1.2em;


                            font-weight:800;">

                <?php echo $description; ?><br><br>
<b><font color="black">Venue:</font>&nbsp; <u><?php echo $venue; ?></u></b><br/>
<b><font color="black">Last Date To Apply:</font>&nbsp; <u><?php echo $ldate; ?></u></b><br/>
<b><font color="black">Email: </font>&nbsp;<u><?php echo $email; ?></u></b><br/>
<b><font color="black">Contact: </font>&nbsp;<u><?php echo $contact; ?></u></b><br/>

                        </p>
                    </div>
                <input type="hidden" value="<?php echo $nid; ?>" name="newsid">
            <button type="submit" class="btn btn-action">Remove Event</button>	</article>
                </form>
            </div>
        </div>
    </div><hr>
</main>
<?php } ?>
<br><br><br>
<?php include "../foot.html"; ?>
