<?php


	
	if(isset($_POST['click'])){

		$supporttitle = $_POST['supporttitle'];
		$description = $_POST['description'];

		if($supporttitle == ""){
			echo "Missing Title of support!!!";
		}
		 elseif ($description == "") {
		 	echo "Missing Content of The Contact!!";
		 }
		else{
			print_r($description);
		 }

		}
	


?>