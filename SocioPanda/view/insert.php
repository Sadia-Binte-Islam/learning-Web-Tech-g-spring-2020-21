<?php
require('../model/config.php');
include("../model/auth.php");
$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
    $trn_date = date("Y-m-d H:i:s");
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $submittedby = $_SESSION["email"];
    $ins_query = "insert into new_record (`trn_date`,`title`,`description`,`submittedby`) values ('$trn_date','$title','$description','$submittedby')";
    mysqli_query($con, $ins_query);
    $status = "New Post Inserted Successfully.</br></br><a href='communitynewsfeed.php'>View Inserted Post</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Newsfeed</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">
    <script>
        function validateform() {
            var title = document.myform.title.value;
            var description = document.myform.description.value;
            if (title == null || title == "") {
                alert("Title can't be blank");
                return false;
            }
            if (description == null || description == "") {
                alert("Description can't be blank");
                return false;
            }
            if (description.length <= 12) {
                alert("Description must be longer than 12 characters'");
                return false;
            } else {
                true;
            }
        }
        // Suggestions

        function showHint(str) {
            var xhttp;
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "posthint.php?q=" + str, true);
            xhttp.send();
        }
    </script>

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
            <!-- Post area -->
            <div class="form">
                <p> </p>
                <div>
                    <h1></h1>
                    <form title="form" onsubmit="return validateform()" name="myform" method="post" action="">
                        <fieldset>
                            <legend>What's in Your mind?</legend>
                            <table>
                                <input type="hidden" name="new" value="1" />
                                <tr>
                                    
                                    <p>Tittle Suggestions: <span id="txtHint"></span></p>
                                    <td><textarea name="title" type="text" rows="1" cols="40" placeholder="Title of your post" onkeyup="showHint(this.value)"></textarea></td>
                                </tr>
                                <tr>
                                   
                                    <td> <textarea type="text" name="description" cols="40" rows="5" placeholder="Write your Message"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Post">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                    <p style="color:#FF0000;"><?php echo $status; ?></p>

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