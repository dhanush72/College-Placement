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
    ?>  
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
</style>
    </head>


<body>

<div class="">
	<div id="respond">
        <center><h4 style="font-family: 'Poppins', sans-serif;
                            font-size:1.5em;
                            
                            font-weight:800;">
                                           Search Students 
                </h4>
        </center>
        <div class="container">
<div class="bs-example">
<table>

    <!---Single Search Form COde Below-->
<form action="" method="post">
    

<!-- New -->

<!-- End -->
<tr>
    <td>
        <!-- <input list="t1" required placeholder="Please Choose" name="option1">
  <datalist id="t1">
      <option value="fullname">
      <option value="department">
      <option value="diploma_agg">
      <option value="deg_agg">
      <option value="ssc">
      <option value="hsc">
  </datalist> -->
  <div class="select">
  <select id="t1">
    <option selected disabled>Choose an option</option>
    <option value="fullname">Fullname</option>
      <option value="department">Department</option>
      <option value="diploma_agg">Diploma</option>
      <option value="deg_agg">Degree</option>
      <option value="ssc">10th</option>
      <option value="hsc">PUC</option>
  </select>
</div>
</td>
   <td><input type="text" placeholder="Enter Search Term" required name="term1" maxlength="10">
         <input type="hidden" value="squery" name="search"></td>



     <td><button type="submit" class="btn btn-action">Search</button></td>
    </tr>
</form></table>
    <!--Multi Search form code Below -->
    <br><br>

<table>
    <form action="" method="post">                                 
<tr><td><input list="t2" placeholder="Please Choose Option 1" required name="option2">
  <datalist id="t2">
      <option value="fullname">
      <option value="department">
      <option value="kt">
      <option value="deg_agg">
      
  </datalist></td>
   <td><input type="text" placeholder="Enter Search Term" required name="term2" maxlength="10">
       <td><input list="t3" placeholder="Please Choose Option 2" required name="option3">
  <datalist id="t3">
      <option value="department">
      <option value="diploma_agg">
      <option value="deg_agg">
      <option value="ssc">
      <option value="hsc">
  </datalist></td>
   <td><input type="text" placeholder="Enter Search Term" required name="term3" maxlength="10">
    
         <input type="hidden" value="mquery" name="search"></td></tr>
        
        <tr>
     <td><button type="submit" class="btn btn-action">Search</button></td>
    </tr>
</form>

    </table>
        
                </div>
    </div>
</div>
      
        <?php
$search=$_POST['search'];
if($search=='squery')
{
  include "search/squery.php";
}

elseif($search=='mquery')
{
 include "search/mquery.php";
}

?>
</body><br><br><br><br>
<?php include "../foot.html"; ?>
