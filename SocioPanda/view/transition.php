<html>

<head>
	<title>Transition</title>
	<link rel="stylesheet" href="../css/deshboardstyle.css">
    <script>
        function validateform() {
            var amount = document.myform.amount.value;
          
            if (amount="") {
                alert("Please Fill fields");
                return false;
            }

            else {
                return true;
            }
        }</script>
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

			<form onsubmit="return validateform()" name="myform" method="POST" action="">
				<fieldset>
					<legend>Transition</legend>
					 Amount: <input type="number" name="amount" placeholder="Enter the Amount" required> <br>
					
						
						<input type="submit" name="submit" value="Pay">
				</fieldset>
			</form>

		<section class="footer">
			<h2>SocioPanda &copy; 2021</h2>
		</section>

	</div>
</body>

</html>