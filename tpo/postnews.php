<?php
include "tpomenu.php";
	$tpoid = $_SESSION['s_id'];

?>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../tpo/assets/css/new.css">
</head>


<body>
<h3>POST EVENTS</h3>
<!-- New -->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <!-- <th>Event Name</th> -->
            <!-- <th>Date</th>
            <th>Description</th>
            <th>Venue</th>
            <th>Last Date To Apply</th>
            <th>Contact</th>
            <th>Email</th> -->
        </tr>
        </thead>
        <tbody>
        <form action="tponews.php" method="post" id="commentform">
        <tr>
            <th style="margin-left: 20px">Event Name</th>
            <td><input type="text" class="form-control" name="title" id="inputName"  placeholder="Event Name" value="" required data-validation-required-message="Cannot Be Blank"></td>
        </tr>
         <tr>
            <th>Date</th>
            <td><input type="date" class="form-control" name="date" id="date" required data-validation-required-message="Cannot Be Blank"></td>
         </tr>  
         <tr>
            <th>Description</th>
            <td><textarea style="float:left" row"5" name="description"></textarea></td>
         </tr> 
         <tr>
            <th>Venue</th>
            <td><input type="text" class="form-control" id="inputaddress" placeholder="Enter venue" name="venue" value="" required data-validation-required-message="Cannot Be Blank"></td>
         </tr>
         <tr>
            <th>Last Date To Apply</th>
            <td><input type="date" class="form-control" id="inputaddress" placeholder="Enter venue" name="last_date" value="" required data-validation-required-message="Cannot Be Blank"></td>
         </tr>
         <tr>
            <th>Contact</th>
            <td><input type="text" class="form-control" id="inputabout" placeholder="Contact Details" name="contact" value="" required data-validation-required-message="Cannot Be Blank"></td>
         </tr>
         <tr>
            <th>Email</th>
            <td><input type="text" class="form-control" id="inputinstitute" placeholder="Email" name="email" value="email" required data-validation-required-message="Cannot Be Blank"></td>
         </tr>
         <tr>
             <th></th>
            <td><button style="float:right"  type="submit" class="btn btn-action">Submit</button></td>
         </tr>
        </form>
        <tbody>
    </table>
    <center>
    <div>
    
    </div></center>
    
</div>
<!-- End -->
        

</body>
<br>
<?php include "../foot.html"; ?>