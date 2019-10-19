<?php
include "tpomenu.php";
	$tpoid = $_SESSION['s_id'];

?>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../tpo/assets/css/new.css">
</head>


<body>
<div class="container">
    <div id="respond">
       
        <!---UPDATE INFO BLOCK STARTS--->
        <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Event Details</th>
                     <th></th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="tponews.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Event Name</td>
                        <td><input type="text" class="form-control" name="title" id="inputName"            placeholder="Event Name" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>
                     </tr>
                    <tr class="active">
                        <td>Date</td>
                        <td><input type="date" class="form-control" name="date" id="date"      required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>
                     </tr>
                    <tr class="danger">
                        <td>Description</td>
                        <td><textarea row"5" name="description"></textarea>
                        
                    </tr>

                    <tr class="success">
                        <td>Venue</td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Enter venue" name="venue" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>

                     </tr>
                    <tr class="success">
                        <td>Last Date To Apply</td>
                        <td><input type="date" class="form-control" id="inputaddress"                  placeholder="Enter venue" name="last_date" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>

                     </tr>
                    
                    <tr class="info">
                        <td>Contact</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Contact Details" name="contact" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr> 
                    <tr class="warning">
                        <td>Email</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Email" name="email" value="email" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                         
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Submit</button>
                        </td>
                    </tr>
                    </form>
                </tbody></div></div></div>
            </table>
        </div>
    </div>
</div>

<!-- New -->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Event Name</th>
            <th>Date</th>
            <th>Description</th>
            <th>Venue</th>
            <th>Last Date To Apply</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <form action="tponews.php" method="post" id="commentform">
        <tr>
            <td><input type="text" class="form-control" name="title" id="inputName"  placeholder="Event Name" value="" required data-validation-required-message="Cannot Be Blank"></td>
            <td><input type="date" class="form-control" name="date" id="date" required data-validation-required-message="Cannot Be Blank"></td>
            <td><textarea row"5" name="description"></textarea></td>
            <td><input type="text" class="form-control" id="inputaddress" placeholder="Enter venue" name="venue" value="" required data-validation-required-message="Cannot Be Blank"></td>
            <td><input type="date" class="form-control" id="inputaddress" placeholder="Enter venue" name="last_date" value="" required data-validation-required-message="Cannot Be Blank"></td>
            <td><input type="text" class="form-control" id="inputabout" placeholder="Contact Details" name="contact" value="" required data-validation-required-message="Cannot Be Blank"></td>
            <td><input type="text" class="form-control" id="inputinstitute" placeholder="Email" name="email" value="email" required data-validation-required-message="Cannot Be Blank"></td>
            <td><button style="float:right" type="submit" class="btn btn-action">Submit</button></td>
        </tr>
        </form>
        <tbody>
    </table>
    
</div>
<!-- End -->
        

</body>
<br>
<?php include "../foot.html"; ?>