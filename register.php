<!DOCTYPE html>
<html>
	<header>
	<title>Student Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="Style.css">
	</header>
<body background="http://www.benilde.edu.ph/img/bg_02.jpg">
	<div class="container bgimg w3-display-center">
		<div style="text-align:center;"><br/>
			<p><img src="http://www.benilde.edu.ph/img/seal-trans.png" style="width:200px;"><p>
			<p><b>Student Registration</b></p>
		</div>
		<div style="text-align:center">
			<p><button onclick="document.getElementById('contact').style.display='block'" class="w3-btn w3-hover-white" style="background-color:darkgreen;" >Register Here</button></p>
		</div>
	</div>
	<div class="w3-display-bottomleft w3-padding-jumbo">
		<p class="w3-medium" style="color:green;"><b>&copy; Mark Anthony A. Tavera</b></p>
		<p class="w3-medium" style="color:green;"><b>De La Salle College of Saint Benilde</b></p>
	</div>
	<div id="contact" class="w3-modal">
		<div class="w3-modal-content w3-animate-zoom">
			<div class="w3-container w3-green">
				<span onclick="document.getElementById('contact').style.display='none'" class="w3-closebtn w3-xxlarge w3-hover-text-white">x</span>
					<h1>Register Form</h1>
			</div>
				<div class="w3-container">
					<p style="font-size:20px;">Please fill in all necessary information...</p>
					<form method="POST" action="welcome.php">
					<p style="font-size:15px;"><input name="sid" class="w3-input w3-padding-10 w3-border" type="text" placeholder="StudentID" required /></p>
					<p style="font-size:15px;"><input name="fn" class="w3-input w3-padding-10 w3-border" type="text" placeholder="First Name" required /></p>
					<p style="font-size:15px;"><input name="ln" class="w3-input w3-padding-10 w3-border" type="text" placeholder="Last Name" required /></p>
					<p style="font-size:15px;"><input name="email" class="w3-input w3-padding-10 w3-border" type="email" placeholder="Email Address" required /></p>
					<p style="font-size:15px;"><input name="pwd" class="w3-input w3-padding-10 w3-border" type="password" placeholder="Password" required /></p>
					<p style="font-size:20px;"><h4>Birth Date:</h4><input name="bday" class="w3-input w3-padding-10 w3-border" type="date" placeholder="BirthDate" required /></p>
					<p style="font-size:15px; text-align:center;"><button name="register" class="w3-btn w3-light-green w3-padding" type="submit" />Register</button></p>
				</div>
		</div>
	</div>
</body>
</html>