<?php


    if(isset($_POST['click'])){

		$username 	        = $_POST['username'];
		$fullname           = $_POST['fullname'];
        $email 		        = $_POST['email'];
		$password 	        = $_POST['password'];
		$confirmpassword 	= $_POST['confirmpassword'];
		$dob                = $_POST['dob'];
		
		
		if($username == "" || $fullname == "" || $email == ""|| $password == "" ||$dob == "" ){
			
			echo "!!!NULL value found!!!!...";
		}
		else{
			if($password == $confirmpassword){

            header("location:../view/userdashboard.php");
			}
			else{
				echo "password & confirm password mismatch...";

			}
		}
	}


?>
