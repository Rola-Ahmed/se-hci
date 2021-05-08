
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Link to the google font  -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
		<!-- Link to the CSS file  -->
		<link rel="stylesheet" href="style.css">
		<title>sign up</title>
	</head>

	<body>
		
			<div class="form">
			<h1>Sign up</h1>
			<h2>please fill in this form</h2>
				<form method="POST" action="signup.php">
					<div class="group-input"> <b> <p></p></b>
						<input type="text" name="firstname" placeholder="Enter your first name"> </div>
					<div class="group-input"> <b>  <p>last name</p></b>
						<input type="email" name="lastname" placeholder="Enter your last name"> </div>
					<div class="group-input"> <b> <p>email</p></b>
						<input type="text" name="email" placeholder="Enter your email"> </div>
					<div class="group-input"> <b>  <p>Password</p></b>
						<input type="password" name="password" placeholder="Enter your password"> </div>
					<div class="group-input"> <b>   <p>Confirm Password</p></b>
						<input type="password" name="repassword" placeholder="Confirm your password"> </div>
						<h5>I accept the Term of use & Privacy Policy</h5>
					<div class="group-btn">
						<input type="signup" class="bButton" name="create" value="signup"> </div>
						<h3>Already have an account?login here<h3>
				</form>
			</div>
	</body>

	</html>