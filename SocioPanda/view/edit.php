<?php
require('../model/config.php');
include("../model/auth.php");
$id = $_REQUEST['id'];
$query = "SELECT * from new_record where id='" . $id . "'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Newsfeed</title>
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
            <center>
                <!--  area -->

                <div class="form">
                   
                   
                    <h1>Update Post</h1>
                    <?php
                    $status = "";
                    if (isset($_POST['new']) && $_POST['new'] == 1) {
                        $id = $_REQUEST['id'];
                        $trn_date = date("Y-m-d H:i:s");
                        $title = $_REQUEST['title'];
                        $description = $_REQUEST['description'];
                        $submittedby = $_SESSION["email"];
                        $update = "update new_record set trn_date='" . $trn_date . "', title='" . $title . "', description='" . $description . "', submittedby='" . $submittedby . "' where id='" . $id . "'";
                        mysqli_query($con, $update);
                        $status = "Post Updated Successfully. </br></br><a href='communitynewsfeed.php'>View Updated Record</a>";
                        echo '<p style="color:#FF0000;">' . $status . '</p>';
                    } else {
                    ?>
                        <div>
                            <form name="form" method="post" action="">
                                <input type="hidden" name="new" value="1" />
                                <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                <p><input type="text" name="title" placeholder="Enter title" required value="<?php echo $row['title']; ?>" /></p>
                                <p><input type="text" name="description" placeholder="Enter description" required value="<?php echo $row['description']; ?>" /></p>
                                <p><input name="submit" type="submit" value="Update" /></p>
                            </form>
                        <?php } ?>

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