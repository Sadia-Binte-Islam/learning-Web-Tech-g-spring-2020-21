<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="../css/deshboardstyle.css">
</head>

<body>
	<div class="container">
		<section class="header">
			<h2>Welcome SocioPanda Seller</h2>
		</section>
		<!-- Main Area -->
		<section class="maincontain">
			<section>
			<div class="btn-menu">
                <a href="selleraddproduct.php" class="btn-menu"> Add Product </a>
                <a href="transitionhistory.php" class="btn-menu"> Transition History </a>
                <a href="sellereasyprofile.html" class="btn-menu"> Update profile</a>
                <a href="sellersupport.html" class="btn-menu"> Support Ticket</a>
                <a href="selleradvancesetting.php" class="btn-menu">Change Password</a>
                <a href="../controller/logout.php" class="btn-menu"> Logout</a>
                <!--  -->
            </div>
			</section>

			<form method="POST" action="../controller/passcheck.php>">
				<fieldset>
					<legend>Password Change</legend>
					Current Password : <input type="password" name="password" placeholder="Password"> <br>
					<span>
						New Password : <input type="password" name="password" placeholder="Password">
						<br>
						Retype New Password : <input type="password" name="password" placeholder="Password">

						<br>
						<input type="submit" name="submit" value="Submit">
				</fieldset>
			</form>


		</section>

		<section class="footer">
			<h2>SocioPanda &copy; 2021</h2>
		</section>

	</div>
</body>

</html>