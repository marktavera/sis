<?php
	if (isset($_POST['register'])) {
		$studentNo = $_POST['sid'];
		$firstName = $_POST['fn'];
		$lastName = $_POST['ln'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];
	
		//echo "<b>Welcome, " . $lastName . " " . $firstName . "!</b><br/><br/>" . 
		//"<b>Your ID number is: </b>" . $studentNo . "!</br>" . 
		//"<b>Your Email Address is: </b>" . $emailAddress . "! </br>" .
		//"<b>Your Password is: </b>". $password . "! </br>" .
		//"<b>Your Birthday is: </b>". $birthDate . "! </br><br/>" . 
		//"<b>The Time is: </b>" . date('c');
	
	} 
	else {
		header('location: register.php');

	}
?>
<html>
	<title>MyAccount</title>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
	<div class="w3-content" style="max-width:1400px;">
	<div class="w3-row-padding">
		<div class="w3-third">
			<div class="w3-white w3-text-grey w3-card-4">
				<div class="w3-display-container">
					<img src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" style="width:100%" alt="Avatar" />
				<div class="w3-display-bottomleft w3-container w3-text-black">
					<h2><?php echo $firstName . " " . $lastName ?></h2>
				</div>
				</div>
			<div class="w3-container">
				<p><i class="fa fa-graduation-cap fa-fw w3-margin-left w3-large w3-text-teal"></i> De La Salle College of Saint Benilde</p>
				<p><i class="fa fa-map-marker fa-fw w3-margin-left w3-large w3-text-teal"></i> 2544 Taft Ave. Malate, Manila, Philippines</p>
				<p><i class="fa fa-envelope fa-fw w3-margin-left w3-large w3-text-teal"></i> www.benilde.edu.ph</p>
				<p><i class="fa fa-phone fa-fw w3-margin-left w3-large w3-text-teal"></i> local 1325 or 1322</p>
				<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-star fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Welcome <?php echo $firstName . " " . $lastName ?></h2>
			<div class="w3-container">
				<h5 class="w3-opacity"><b>Student Information</b></h5>
				<p><b>Student ID No.:</b> <?php echo $studentNo?></p>
				<p><b>First Name:</b> <?php echo $firstName?></p>
				<p><b>Last Name:</b> <?php echo $lastName?></p>
				<p><b>Email Address:</b> <?php echo $emailAddress?></p>
				<p><b>Birth Date:</b> <?php echo $birthDate?></p>
			</div>
			</div>
			</div>
		</div>
	</div>
	<footer class="w3-container w3-green w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-text-indigo w3-large"></i>
  <i class="fa fa-instagram w3-hover-text-purple w3-large"></i>
  <i class="fa fa-snapchat w3-hover-text-yellow w3-large"></i>
  <i class="fa fa-pinterest-p w3-hover-text-red w3-large"></i>
  <i class="fa fa-twitter w3-hover-text-light-blue w3-large"></i>
  <i class="fa fa-linkedin w3-hover-text-indigo w3-large"></i>
  <p>&copy; Mark Anthony A. Tavera</p>
</footer>

	</body>
</html>
				
				
				
				