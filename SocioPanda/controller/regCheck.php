<?php

	
	if(isset($_POST['signup'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$email 		= $_POST['email'];
		$phonenumber= $_POST['phonenumber'];

		if($username == "" || $password == "" || $email == "" || $phonenumber == ""){
			echo "null value found...";

		}
		else{
			if($password == $repass){

              header("location:../index.php");
			

			}
			else{
				echo "password & confirm password mismatch...";

			}
		}
	}


?>