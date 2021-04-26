<html>

<head>
	<title>Settings</title>
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
                <a href="insert.php" class="btn-menu">Create Post</a>
                <a href="communitynewsfeed.php" class="btn-menu">Newsfeed</a>
				<a href="productpage.php" class="btn-menu"> Product View </a>
				<a href="cart.php" class="btn-menu"> Product cart page </a>
				<a href="buyertransitionlist.php" class="btn-menu"> Transition List </a>
				<a href="communityeasyprofile.html" class="btn-menu"> Update profile</a>
				<a href="communityadvancesetting.php" class="btn-menu">Change Password</a>
				<a href="communitycontact.html" class="btn-menu">Contact</a>
				<a href="../controller/logout.php" class="btn-menu"> Logout</a>
				</div>
			</section>

			<form method="POST" action="../controller/communitypasscheck.php>">
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

		<section class="footer">
			<h2>SocioPanda &copy; 2021</h2>
		</section>

	</div>
</body>

</html>