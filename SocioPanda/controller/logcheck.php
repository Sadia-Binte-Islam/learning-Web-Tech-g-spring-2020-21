<?php


	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "Null Input..";
		}
		    elseif ($username=="shuvo" || $password =="1234") {
				header("location:../view/userdashboard.php");
			}
			else{
				echo "Invalid User";
			}
		}
	


?>
?>