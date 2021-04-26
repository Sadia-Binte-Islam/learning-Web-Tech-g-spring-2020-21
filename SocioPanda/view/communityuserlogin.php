<?php
require('../model/config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Community User Login</title>

	<link rel="stylesheet" href="../css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type = "text/javascript"> 
	function validate(){
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		if(email.value.trim()  ==""&& password.value.trim()==""){
			alert("Please Fillup all the Field");
			return false;

		}
		else{
			true;
		}

	}

	</script>
</head>

<body>
	<img class="wave" src="../assets/image/wave.png">
	<div class="container">
		<div class="img">
			<img src="../assets/image/bg.png">
		</div>
		<div class="login-content">
			<form  onsubmit="return validate()" action="../controller/communityloginchk.php" method="post">
				<img src="../assets/image/avatar.svg">
				<h2 class="title">Welcome </h2>

				<!-- username -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Email</h5>
						<input type="email"id="email" name="email" value="" class="input">
					</div>
				</div>

				<!-- password -->
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" id="password" name="password" value="" class="input">
					</div>
				</div>

				<a href="#">Forgot Password?</a>
				<input type="submit" name="login" class="btn" value="Login">


				<div class="signup">
					<p>Don't have account!!
						<a href="communitysignup.php"> join Now </a>
				</div>



			</form>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>