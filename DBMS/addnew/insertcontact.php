<!DOCTYPE html>
<html lang="en">
<head>
	<title>Added Successfully | DAMS-RDBMS Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../subtheme1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/css/util.css">
	<link rel="stylesheet" type="text/css" href="../subtheme1/css/main.css">
<!--===============================================================================================-->
    <style>
    a { color: #FFFFFF; font-weight: bold; } /* CSS link color */
    </style>

</head>
<body>

	<div class="container-login100" style="background-image: url('../subtheme1/images/emptoolbox.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					your presence<br>keeps us GOING!<br><br><h6>Cheers!</h6>
				</span>

<!--=============================PHP Code to INSERT Data===========================================-->	
				<?php
				$connection = mysqli_connect("localhost", "root", "Mayankmaheshwari@1806"); // Establishing Connection with Server
				$db = mysqli_select_db($connection, "DAMS"); // Selecting Database from Server
				if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
				$Email = $_POST['Email'];
				$PhoneNo = $_POST['PhoneNo'];
				$State = $_POST['State'];
				if($Email !=''||$PhoneNo !=''||$State !=''){
				//Insert Query of SQL
				$query = mysqli_query($connection, "insert into Contact_Details(Email, PhoneNo, State) values ('$Email', $PhoneNo, $State)");
				echo "<br/><br/><span><h5>You have signed up successfully!</h5><br></span>";
				}
				else{
				echo "<p>Insertion Failed <br/> Some Fields are Blank!!</p>";
				}
				}
				mysqli_close($connection); // Closing Connection with Server
				?>
<!--===============================================================================================-->	
				<div class="text-center">
				    <br>
				    <a href="../customerlogin.php" class="txt2 hov1">
						<br><br>Proceed to login and Book Tickets
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/bootstrap/js/popper.js"></script>
	<script src="../subtheme1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/daterangepicker/moment.min.js"></script>
	<script src="../subtheme1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/js/main.js"></script>

</body>
</html>