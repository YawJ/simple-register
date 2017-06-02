<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Form | Jude Aquila</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<!-- BEGIN BODY -->
	<div id="topBar">
		<h2>welcome to the sign up page</h2>
	</div>
	<!-- BEGIN CONTAINER -->
	<div id="container">
		<div id="containerForm">
			<!-- center form on page -->
			<form>
				<div class="formAvatar">
					<img src="me_b&w.jpg" alt="Avatar">
				</div>
				<div class="formFields">
					<label>
						<b>Firstname</b>
					</label>
					<input type="text" name="fname" placeholder="Enter Firstname" required="required">
					<label>
						<b>Last Name</b>
					</label>
					<input type="text" name="lname" placeholder="Enter Last Name" required="required">
					<label>
						<b>Email</b>
					</label>
					<input type="email" name="email" placeholder="Enter Email" required="required">
					<label>
						<b>Password</b>
					</label>
					<input type="password" name="pwd1" placeholder="Enter Password" required="required">
					<label>
						<b>Confirm Password</b>
					</label>
					<input type="password" name="pwd2" placeholder="Confirm Password" required="required">
					<input type="checkbox" name="checkbox" checked="checked"> I agree to the <a href="#">Terms and Conditions</a> of this Company.
					<button type="submit">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
	<!-- BEGIN FOOTER -->
	<div id="footer">
		<h2>&copy; 2017. All rights reserved. Jude Aquila</h2>
	</div>
</body>
</html>