<?php
session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            if ($_POST["code"] == $key) {
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
            }
            if (empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
        }
    }
}
if (isset($_POST['action']) && $_POST['action'] == "change") {
    foreach ($_SESSION["shopping_cart"] as &$value) {
        if ($value['code'] === $_POST["code"]) {
            $value['quantity'] = $_POST["quantity"];
            break; // Stop the loop after we've found the product
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart Page</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">
</head>

<body>
    <div class="container">
        <section class="header">
            <h2>Welcome SocioPanda Community</h2>
        </section>
        <!-- Main Area -->
        <section class="maincontain container">
        <section>
			<div class="btn-menu">
                <a href="insert.php" class="btn-menu">Create Post</a>
                <a href="communitynewsfeed.php" class="btn-menu">Newsfeed</a>
				<a href="productpage.php" class="btn-menu"> Product View </a>
				<a href="cart.php" class="btn-menu"> Product cart page </a>
                <a href="transition.php" class="btn-menu"> Transition </a>
				<a href="buyertransitionlist.php" class="btn-menu"> Transition List </a>
				<a href="communityeasyprofile.html" class="btn-menu"> Update profile</a>
				<a href="communityadvancesetting.php" class="btn-menu">Change Password</a>
				<a href="communitycontact.html" class="btn-menu">Contact</a>
				<a href="../controller/logout.php" class="btn-menu"> Logout</a>
				</div>
			</section>

                <div>

                </div>
                <center>
                    <!-- cart code area   -->
                    <div style="width:700px; margin:50 auto;">

                        <h2>Shopping Cart</h2>

                        <?php
                        if (!empty($_SESSION["shopping_cart"])) {
                            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                        ?>
                            <div class="cart_div">
                                <a href="cart.php">
                                    <img src="../assets/image/cart-icon.png" /> Cart
                                    <span><?php echo $cart_count; ?></span></a>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="cart">
                            <?php
                            if (isset($_SESSION["shopping_cart"])) {
                                $total_price = 0;
                            ?>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>ITEM NAME</td>
                                            <td>QUANTITY</td>
                                            <td>UNIT PRICE</td>
                                            <td>ITEMS TOTAL</td>
                                        </tr>
                                        <?php
                                        foreach ($_SESSION["shopping_cart"] as $product) {
                                        ?>
                                            <tr>

                                                <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                                                <td><?php echo $product["name"]; ?><br />
                                                    <form method='post' action=''>
                                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                                        <input type='hidden' name='action' value="remove" />
                                                        <button type='submit' class='remove'>Remove Item</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method='post' action=''>
                                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                                        <input type='hidden' name='action' value="change" />
                                                        <select name='quantity' class='quantity' onchange="this.form.submit()">
                                                            <option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
                                                            <option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
                                                            <option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
                                                            <option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
                                                            <option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td><?php echo "$" . $product["price"]; ?></td>
                                                <td><?php echo "$" . $product["price"] * $product["quantity"]; ?></td>
                                            </tr>
                                        <?php
                                            $total_price += ($product["price"] * $product["quantity"]);
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="5" align="right">
                                                <strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                            } else {
                                echo "<h3>Your cart is empty!</h3>";
                            }
                            ?>
                        </div>

                        <div style="clear:both;"></div>

                        <div class="message_box" style="margin:10px 0px;">
                            <?php echo $status; ?>
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