<?php
	session_start();

	if(isset($_POST['signup'])){

        $firstname 		= $_POST['firstname'];
        $lastname 		= $_POST['lastname'];
        $email 			= $_POST['email'];
        $phonenumber	= $_POST['phonenumber'];
		$password = $_POST['password'];

		if($phonenumber == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
		


				require('../model/config.php');

				$sql="insert into communityuser values('','$firstname','$lastname','$email','$phonenumber', '$password')";
				$result=mysqli_query($con, $sql);

				header('location: ../index.php');
			
			}
		}
	


?>