<?php
$title = "Welcome !!User Dashboard";
require('../model/config.php');
include("../model/auth.php");
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
               <!-- Post area -->

               <div class="form">
        
        <h2>View Posts</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>S.No</strong></th>
                    <th><strong>Title</strong></th>
                    <th><strong>Description</strong></th>
                    <th><strong>Post By</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                $sel_query = "Select * from new_record ORDER BY id desc;";
                $result = mysqli_query($con, $sel_query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td align="center"><?php echo $count; ?></td>
                        <td align="center"><?php echo $row["title"]; ?></td>
                        <td align="center"><?php echo $row["description"]; ?></td>
                        <td align="center"><?php echo $row["submittedby"]; ?></td>
                        <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                        <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                    </tr>
                <?php $count++;
                } ?>
            </tbody>
        </table>

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