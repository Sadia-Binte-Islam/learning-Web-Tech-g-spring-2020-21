<?php
$title = "Welcome !!User Dashboard";
?>
<!DOCTYPE html>
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
        <section class="maincontain container">
        <div class="btn-menu">
                <a href="selleraddproduct.php" class="btn-menu"> Add Product </a>
                <a href="transitionhistory.php" class="btn-menu"> Transition History </a>
                <a href="sellereasyprofile.html" class="btn-menu"> Update profile</a>
                <a href="sellersupport.html" class="btn-menu"> Support Ticket</a>
                <a href="selleradvancesetting.php" class="btn-menu">Change Password</a>
                <a href="../controller/logout.php" class="btn-menu"> Logout</a>
                <!--  -->
            </div>
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
            <!-- Footer area -->
        </section>
        <section class="footer">
            <h2>SocioPanda &copy; 2021</h2>
        </section>

    </div>

</body>

</html>



?>