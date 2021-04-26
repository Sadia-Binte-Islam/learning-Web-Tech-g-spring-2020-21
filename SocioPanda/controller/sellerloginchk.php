<?php

	session_start();

	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == "" || $password == ""){
			echo "null input...";
		}else{

			//$user = $_SESSION['current_user'];
			
			require('../model/config.php');

			$sql="select password from selleruser where email='$email'";
			$result1=mysqli_query($con, $sql);

			$row=mysqli_fetch_assoc($result1);

			//print_r($row);

			if($password == $row['password']){
				$_SESSION['flag'] = true;
				$_SESSION['email']=$email;
				header('location: ../view/selleruserdashboard.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>