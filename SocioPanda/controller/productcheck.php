<?php

session_start();

	if(isset($_POST['submit'])){

        $name 		= $_POST['name']; 
		$code 		= $_POST['code'];
        $price 		= $_POST['price'];
     	$image 		= $_POST['image'];
		 // File upload path
		 $folder  = "../assets/image/product-images/".$image;
       
		

		if($name == "" || $price == "" || $code == ""){
			echo "null value found...";
		}else{
		


				require('../model/config.php');
				

				$sql="insert into products values('','$name','$code','$price','$image')";
				$result=mysqli_query($con, $sql);

				header('location: ../view/selleruserdashboard.php');
			
			}
		}
	

	


































	// if(isset($_POST['click'])){

	// 	$name        = $_POST['name'];
	// 	$price       = $_POST['price'];
		

	// 	if($name  == ""){
	// 		echo "Missing name";
	// 	}
	// 	 else{
	// 	 	if ($price == "") {
	// 	 	echo "Missing product price";
	// 	 }
	// 	 else{
	// 	 	echo "product Added Successfully";

	// 	 }
	// 	 }
		 	
		 
	// 	}

?>