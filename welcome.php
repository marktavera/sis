<?php
	if (isset($_POST['register'])) {
		$studentNo = $_POST['sid'];
		$firstName = $_POST['fn'];
		$lastName = $_POST['ln'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];
		$motherName = $_POST['mname'];
		$fatherName = $_POST['fname'];
		$secondaryEducation = $_POST['hs'];
		$studentCourse = $_POST['course'];
	
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
	<link rel="stylesheet" href="Style.css">
	</head>
<body class="w3-content" style="max-width:75%" background="https://s-media-cache-ak0.pinimg.com/originals/b8/33/10/b83310ac39d6f40864421592d1b91601.jpg">
	<div class="`w3-row">
		<div class="w3-half w3-container w3-transparent w3-center"  style="height:760px;" >
			<div class="w3-padding-16">
				<center><img src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" style="width:49%" alt="Person" /></center>
				<h1 style="text-align:center; font-family:Times New Roman, sans-serif;"><i>Welcome <?php echo $firstName . " " . $lastName ?></i></h1>
			</div>
			<div class="w3-padding-16" style="margin:auto;">	
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>First Name:</b> <?php echo $firstName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Last Name:</b> <?php echo $lastName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Email Address:</b> <?php echo $emailAddress ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Birth Date:</b> <?php echo $birthDate ?></p>
			</div>
			
		</div>
		<div class="w3-half w3-container w3-center" style="height:760px">
			<div class="w3-padding-16">
				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Signum_Fidei_green.svg/1067px-Signum_Fidei_green.svg.png" style="width:51%" alt="Person" />
				<h1 style="text-align:center; font-family:Times New Roman, sans-serif;"><i>Student Information</i></h1>
			</div>
			<div class="w3-padding-16">
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Student No.:</b> <?php echo $studentNo ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Mother's Name:</b> <?php echo $motherName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Father's Name:</b> <?php echo $fatherName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97;"><b>Secondary Education:</b> <?php echo $secondaryEducation ?></p>
			</div>
		</div>
	</div>	
	</body>
</html>
				
				
				
				