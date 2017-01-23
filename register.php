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
			<p><button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-hover-white" style="background-color:darkgreen;" >Register Here</button></p>
		</div>
	</div>
	<div class="w3-display-bottomleft w3-padding-jumbo">
		<p class="w3-medium" style="color:green;"><b>&copy; Mark Anthony A. Tavera</b></p>
		<p class="w3-medium" style="color:green;"><b>De La Salle College of Saint Benilde</b></p>
	</div>
	<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
	<div class="w3-center"><br>
		<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">x</span>
			<h1>Registration Form</h1>
	</div>
		<form class="w3-container" method="post" action="welcome.php">
			<div class="w3-section">
				<label><b>Student ID No.</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="sid" required />
				<label><b>First Name</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="fn" required />
				<label><b>Last Name</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Last Name" name="ln" required />
				<label><b>Email Address</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Address" name="email" required />
				<label><b>Password</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Password" name="pwd" required />
				<label><b>Birth Date</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Enter Birthday" name="bday" required />
				<button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="register">Register</button>
			</div>
		</form>
</body>
</html>