<?php
$title = "Welcome !!User Dashboard";
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">
</head>

<body>
    <div class="container">
        <section class="header">
            <h2>Welcome SocioPanda User</h2>
        </section>
        <!-- Main Area -->
        <section class="maincontain container">
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
            
			<div class="indexcontainer">
                <div>
                    <img src="../assets/image/logo.png"><br>
                    <div class="posstion">
                        <h1 class="Welcometxt ">
                            Welcome To Socio Panda
                        </h1>
                        <h3 class="tagline posstion">
                            A Superior Social Platform
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <!-- Footer area -->
        </section>
        <section class="footer">
            <h2>SocioPanda &copy; 2021</h2>
        </section>

    </div>

</body>

</html>



?>