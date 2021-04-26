<?php
require('../model/config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Seller Signup</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script defer src="/assets/js/script.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	


<script > 
	function validateform(){
		var firstname = document.myform.firstname.value;
		var lastname = document.myform.lastname.value;
		var email = document.myform.email.value;
		var phonenumber = document.myform.phonenumber.value;
		var password = document.myform.password.value;

		if (firstname == null || firstname == "") {
                alert("First Name can't be blank");
                return false;
            }
		if (lastname == null || lastname == "") {
                alert("Last Name can't be blank");
                return false;
            }

			if (email == null || email == "") {
                alert("Email can't be blank");
                return false;
            }

			

			if (phonenumber == null || phonenumber == "") {
                alert("Phone Number can't be blank");
                return false;
            }

			if (password == null || password == "") {
                alert("Pasword can't be blank");
                return false;
            }

			if (password.length <= 6) {
                alert("Password must be longer than 6 characters'");
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
			<form class="form" onsubmit="return validateform()" name="myform" method="post"  action="../controller/sellersignupchk.php" >
				<img src="../assets/image/avatar.svg">
				<h2 class="title">Welcome</h2>
				<div id="error"></div>
				<!-- // First Name -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>First Name</h5>
						<input type="text" id="firstname" name="firstname" value=""  class="input">

					</div>
				</div>
				<!-- //Last Name -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Last Name</h5>
						<input type="text" id="lastname" name="lastname"  value="" class="input">
					</div>
				</div>

				<!-- //Email -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						<h5>Email</h5>
						<input type="text" id="email" name="email"  value="" class="input">
					</div>
				</div>

				<!-- //Phone Number -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-phone-alt"></i>
					</div>
					<div class="div">
						<h5>Phone Number</h5>
						<input type="text" id="phonenumber" name="phonenumber"  value="" class="input">
					</div>
				</div>

				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" id="password" name="password" value=""  class="input">
					</div>
				</div>

				<input type="submit" class="btn" name="signup" value="Signup">
				<div class="signup">


					<p>
						Already Have Account!
					</p>
					<a href="sellerlogin.php"> Login Here </a>
				</div>

			</form>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>