<?php
session_start();
					$tpoid = $_SESSION['s_id'];
?> 
<?php
$option1=$_POST['option1'];
$term1=$_POST['term1'];
//echo $option1."<br>".$option2."<br>".$term1."<br>".$term2;
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
	if($option1=='fullname' || $option1=='department'){
				$sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option1 like '%$term1%' and si.placed='' and sl.approval='yes' and                         si.sid=sl.sid";
    }
    else
    {
        $sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option1>='$term1' and si.placed='' and sl.approval='yes' and                         si.sid=sl.sid";
    }
                $result = mysqli_query($con,$sql) or die("cannot execute query");
   
                $count = mysqli_num_rows($result);
            if($count==true){
          //   $row = mysqli_fetch_array($result);
?>
<center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red    ">
                        <?php echo $count." Record(s) Found"; ?>
                </h4>
        </center>
<div class="bs-example">
            <table class="table" border="1">
                <thead>
                    <tr>
                    <th>Fullname</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>About</th>
                    <th>Institute</th>
                    <th>University</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Sem 7</th>
                    <th>Sem 8</th>
                    <th>Degree Agg.</th>
                    <th>Diploma Agg.</th>
                    <th>HSC</th>
                    <th>SSC</th>
                    <th>Key Skills</th>
                    <th>Project</th>
                    <th>Excel File</th>    
                    
                    
                    
                    </tr>
                </thead>

<?php
     while ($row = mysqli_fetch_array($result)){

                $username = $row['username'];
                $email = $row['email'];
                $fullname= $row['fullname'];
                $address = $row['address'];
                $dob = $row['dob'];      
                $about = $row['about_you'];
                $institute = $row['institute'];
                $university = $row['university'];
                $department = $row['department'];
                $batch=$row['batch'];
                $deg1=$row['deg_sem1'];
                $deg2=$row['deg_sem2'];
                $deg3=$row['deg_sem3'];
                $deg4=$row['deg_sem4'];
                $deg5=$row['deg_sem5'];
                $deg6=$row['deg_sem6'];
                $deg7=$row['deg_sem7'];
                $deg8=$row['deg_sem8'];
                $degagg=$row['deg_agg'];
                $diploma=$row['diploma_agg'];
                $hsc=$row['hsc'];
                $ssc=$row['ssc'];
                $key=$row['key_skills'];
                $project=$row['project_title'];

?>
          
                 <tbody>
         
                     <tr class="success">
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $dob ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $about ?></td>
                        <td><?php echo $institute ?></td>
                        <td><?php echo $university ?></td>
                        <td><?php echo $department ?></td>
                        <td><?php echo $batch ?></td>
                        <td><?php echo $deg7 ?></td>
                        <td><?php echo $deg8 ?></td>
                        <td><?php echo $degagg ?></td>
                        <td><?php echo $diploma?></td>
                        <td><?php echo $hsc ?></td>
                        <td><?php echo $ssc ?></td>
                        <td><?php echo $key ?></td>
                        <td><?php echo $project ?></td>
                             <td>
                         <form action="search/sexcel.php" method="post">
                        <input type="hidden" value="<?php echo $option1; ?>" name="option1"> 
                             <input type="hidden" value="<?php echo $term1; ?>" name="term1"> 
                        
                         <button type="submit" class="btn btn-action">Generate</button></form>        
                        </td>
                    
                    </tr>
                                         <?php } }else { echo 
"<center><h4 style=font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red>
                          Sorry :( <br>  No Record Found 
                </h4>
        </center>
"; }
                     ?>

                     </tbody></table></div>
               