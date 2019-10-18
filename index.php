<?php
include "head.html";

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--#####################
Additional Styles (required)
######################-->
<style>
html,body {
	height:100%;
	width:100%;
	position:relative;
}
#background-carousel{
	position:fixed;
	width:100%;
	height:100%;
	z-index:-1;
}
.carousel,
.carousel-inner {
	width:100%;
	height:100%;
	z-index:0;
	overflow:hidden;
}
.item {
	width:100%;
	height:100%;
	background-position:center center;
	background-size:cover;
	z-index:0;
}

#content-wrapper {
	position:absolute;
	z-index:1 !important;
	min-width:100%;
	min-height:100%;
}
</style>


<body>

    <!-- <div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(img/slider1.jpg)"></div>
        <div class="item" style="background-image:url(img/slider2.jpg)"></div>
        <div class="item" style="background-image:url(img/slider3.jpg)"></div>
          <div class="item" style="background-image:url(img/slider4.jpg)"></div>
      </div>
    </div>
</div> -->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form name='login' method="post" action="login.php" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Student Login
					</span>
						<!-- <form name='login' method="post" action="login.php"> -->

						<span class="txt1 p-b-11">
						USN
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" placeholder="Username" name="username">
						<span class="focus-input100"></span>
					</div>

						<!-- <input type="text" class="form-control" placeholder="Username" name="username"
                              required data-validation-required-message="Please enter your name."/> -->

															<span class="txt1 p-b-11">
																Password
															</span>
															<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
																<span class="btn-show-pass">
																	<i class="fa fa-eye"></i>
																</span>
																<input class="input100" type="password" name="password" placeholder="password">
																<span class="focus-input100"></span>
															</div>

					<!-- <div class="form-group">
						<input type="password" placeholder="password" class="form-control" name="password" required data-validation-required-message="Please enter your name." />
					</div> -->

					<div class="container-login100-form-btn d-flex justify-content-center">
						<button class="login100-form-btn" type="Submit">
							Login
						</button>
					</div>

					<!-- <div class="text-center">

						<button class="btn btn-primary" type="Submit">Sign in</a>
					</div> -->


                            <!-- <div class="text-right">
				<a href="register.php" class="">Need an account?</a>
			</div> -->

				   </form>
		<?php
if(isset($_GET['error']))
  		{
 		echo "Incorrect Password";
  		 }
  		?>
		</div>
	</div>
</div>
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	$('#myCarousel').carousel({
		pause: 'none'
	})
});
</script>

</body>
</html>
