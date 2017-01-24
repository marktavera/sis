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
	<body class="w3-content" style="max-width:100%" background="https://s-media-cache-ak0.pinimg.com/originals/b8/33/10/b83310ac39d6f40864421592d1b91601.jpg">

  <ul class="w3-navbar w3-theme-l1 w3-wide w3-padding-8 w3-card-2">
    <li>
      <a href="#home" class="w3-margin-left">&nbsp; De La Salle College of Saint Benilde</i></a>
	</li>
    <!-- Float links to the right. Hide them on small screens -->
    <li class="w3-right w3-hide-small">
      <a href="#projects" class="w3-left">Student Information System &nbsp;</a>
    </li>
  </ul>
    <br/><br/>
	<br/><br/>
	<center><img src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" style="width:20%" alt="Person" /></center>
	<h1 style="text-align:center; font-family:Times New Roman, sans-serif;"><i>Welcome, <?php echo $firstName . " " . $lastName ?>!</i></h1>
	<br/>
	<div class="w3-container" style="text-align:center;">
  <h3 style="font-family:Times New Roman; font-size:25px;"><b>Your Password</b></h3>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn" style="font-size:20px; background-color:green; font-family:Times new Roman;">Click Here!</button>
	  <div id="id01" class="w3-modal w3-animate-opacity">
		<div class="w3-modal-content w3-card-8">
		  <header class="w3-container w3-green"> 
			<span onclick="document.getElementById('id01').style.display='none'" 
			class="w3-closebtn">&times;</span>
		  </header>
		  <div class="w3-container">
			<p style="font-size:25px; font-family:times new roman;">Your Password: <?php echo $password ?></p>
		  </div>
		</div>
	  </div>
	</div>
	<div class="`w3-row">
		<div class="w3-half w3-container w3-transparent w3-center"  style="height:700px;" >
			<div class="w3-padding-16">
			</div>
			<div class="w3-padding-16" style="margin:auto;">	
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">First Name:</b> <?php echo $firstName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Last Name:</b> <?php echo $lastName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Email Address:</b> <?php echo $emailAddress ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Birth Date:</b> <?php echo $birthDate ?></p>
			</div>
			
		</div>
		<div class="w3-half w3-container w3-center" style="height:700px">
			<div class="w3-padding-16">
			</div>
			<div class="w3-padding-16">
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Student No.:</b> <?php echo $studentNo ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Mother's Name:</b> <?php echo $motherName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Father's Name:</b> <?php echo $fatherName ?></p>
				<p class="w3-padding-16" style="font-size:18px; font-family:times new roman; background-color:#aedd97; margin-left:40px; margin-right:40px;"><b style="color:darkgreen">Secondary Education:</b> <?php echo $secondaryEducation ?></p>
			</div>
		</div>		
	</div>	
	</body>
	<footer style="text-align:center;">
		<p style="font-size:18px; font-family:times new roman;"><b>&copy; Mark Anthony A. Tavera</b></p>
		<p style="font-size:18px; font-family:times new roman;"><b>De La Salle Collge of Saint Benilde</b></p>
	</footer>
</html>
				
				
				
				