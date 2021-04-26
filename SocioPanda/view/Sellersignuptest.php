<?php
require('../model/config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Seller Signup</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


	<!-- <script defer src="/assets/js/script.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="../assets/image/wave.png">
	<div class="container">
		<div class="img">
			<img src="../assets/image/bg.svg">
		</div>
		<div class="login-content">
			<form class="form" id="form" action="" method="post">
				<img src="../assets/image/avatar.svg">
				<h2 class="title">Welcome</h2>
				<div id="error"></div>
				<!-- // First Name -->
				<div class="form-control input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<label for="username"></label>
						<input type="text" placeholder="username" id="username" />
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-exclamation-circle"></i>
						<small>Error message</small>

					</div>
				</div>

				<!-- //Email -->
				<div class="form-control input-div one">
					<label for="username">Email</label>
					<input type="email" placeholder="a@florin-pop.com" id="email" />
					<i class="fas fa-check-circle"></i>
					<i class="fas fa-exclamation-circle"></i>
					<small>Error message</small>

				</div>

				<!-- //Phone Number -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-phone-alt"></i>
					</div>
					<div class="div">
						<h5>Phone Number</h5>
						<input type="text" id="phonenumber" name="phonenumber" required value="" class="input">
					</div>
				</div>

				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" id="password" name="password" value="" required class="input">
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

	<!-- <script type="text/javascript" src="../assets/js/main.js"></script> -->

	<script>
		const form = document.getElementById('form');
		const username = document.getElementById('username');
		const email = document.getElementById('email');
		const password = document.getElementById('password');
		const password2 = document.getElementById('password2');

		form.addEventListener('submit', e => {
			e.preventDefault();

			checkInputs();
		});

		function checkInputs() {
			// trim to remove the whitespaces
			const usernameValue = username.value.trim();
			const emailValue = email.value.trim();
			const passwordValue = password.value.trim();
			const password2Value = password2.value.trim();

			if (usernameValue === '') {
				setErrorFor(username, 'Username cannot be blank');
			} else {
				setSuccessFor(username);
			}

			if (emailValue === '') {
				setErrorFor(email, 'Email cannot be blank');
			} else if (!isEmail(emailValue)) {
				setErrorFor(email, 'Not a valid email');
			} else {
				setSuccessFor(email);
			}

			if (passwordValue === '') {
				setErrorFor(password, 'Password cannot be blank');
			} else {
				setSuccessFor(password);
			}

			if (password2Value === '') {
				setErrorFor(password2, 'Password2 cannot be blank');
			} else if (passwordValue !== password2Value) {
				setErrorFor(password2, 'Passwords does not match');
			} else {
				setSuccessFor(password2);
			}
		}

		function setErrorFor(input, message) {
			const formControl = input.parentElement;
			const small = formControl.querySelector('small');
			formControl.className = 'form-control error';
			small.innerText = message;
		}

		function setSuccessFor(input) {
			const formControl = input.parentElement;
			formControl.className = 'form-control success';
		}
		function isEmail(email) {
			return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
		}
	</script>
</body>

</html>