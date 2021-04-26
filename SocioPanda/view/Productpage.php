<?php
session_start();
include('../model/config.php');
$status = "";
if (isset($_POST['code']) && $_POST['code'] != "") {
    $code = $_POST['code'];
    $result = mysqli_query($con, "SELECT * FROM `products` WHERE `code`='$code'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];
    $image = $row['image'];
    $cartArray = array(
        $code => array(
            'name' => $name,
            'code' => $code,
            'price' => $price,
            'quantity' => 1,
            'image' => $image
        )
    );
    if (empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    } else {
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if (in_array($code, $array_keys)) {
            $status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
            $status = "<div class='box'>Product is added to your cart!</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">
</head>

<body>
    <div class="container">
        <section class="header">
            <h2>Welcome SocioPanda </h2>
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
                <center>
                    <div>
                        <!-- new code add  -->
                        <div style="width:700px; margin:50 auto;">
                            <h2>Produtuct List</h2>
                            <?php
                            if (!empty($_SESSION["shopping_cart"])) {
                                $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                            ?>
                                <div class="cart_div">
                                    <a href="cart.php"><img src="../assets/image/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
                                </div>
                            <?php
                            }
                            $result = mysqli_query($con, "SELECT * FROM `products`");
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='product_wrapper'>
      <form method='post' action=''>
      <input type='hidden' name='code' value=" . $row['code'] . " />
      <div class='image'><img src='" . $row['image'] . "' /></div>
      <div class='name'>" . $row['name'] . "</div>
         <div class='price'>$" . $row['price'] . "</div>
      <button type='submit' class='buy'>Buy Now</button>
      </form>
         </div>";
                            }
                            mysqli_close($con);
                            ?>
                            <div style="clear:both;"></div>
                            <div class="message_box" style="margin:10px 0px;">
                                <?php echo $status; ?>
                            </div>
                        </div>
                    </div>
                </center>
                <!-- Footer area -->
        </section>
        <section class="footer">
            <h2>SocioPanda &copy; 2021</h2>
        </section>
    </div>
</body>

</html>

?>