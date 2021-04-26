<?php
$title = "Welcome !!User Dashboard";


?>
<!DOCTYPE html>
<html>

<head>
    <title>Transition List</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>
    <div class="container">
        <section class="header">
            <h2>Welcome SocioPanda Community User</h2>
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

            <div>
                <h1>
                    Transition List
                </h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Serial Number</th>
                        <th>Product</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>iPhone X</td>
                        <td>700.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Laptop Core i5</td>
                        <td>600.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Laptop Bag</td>
                        <td>6000.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Andriod 11</td>
                        <td>600.00</td>
                    </tr>
                    
                </table>
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