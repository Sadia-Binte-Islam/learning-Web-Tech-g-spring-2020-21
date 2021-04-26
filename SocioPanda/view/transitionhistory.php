<?php
$title = "Welcome !!User Dashboard";


?>
<!DOCTYPE html>
<html>

<head>
    <title>Transition History</title>
    <<link rel="stylesheet" href="../css/deshboardstyle.css">
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
            <h2>Welcome SocioPanda Seller</h2>
        </section>
        <!-- Main Area -->
        <section class="maincontain container">

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

            <div>
                <h1>
                    Transition List
                </h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Customer Email</th>
                        <th>Product</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td>riya@gmail.com</td>
                        <td>iPhone X</td>
                        <td>700.00</td>
                    </tr>
                    <tr>
                        <td>riya@yahoo.com</td>
                        <td>Laptop Core i5</td>
                        <td>600.00</td>
                    </tr>
                    <tr>
                        <td>riya@yahoo.com</td>
                        <td>Laptop Bag</td>
                        <td>6000.00</td>
                    </tr>
                    <tr>
                        <td>riya@yahoo.com</td>
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