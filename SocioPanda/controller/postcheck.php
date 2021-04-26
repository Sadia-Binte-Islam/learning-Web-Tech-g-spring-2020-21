<?php

session_start();

if(isset($_POST['submit'])){

	$posttitle = $_POST['posttitle'];
	$postdetails = $_POST['postdetails'];
	$postimg     =$_POST["postimg"];
	$postdate    =$_POST["postdate"];

	if($posttitle==""||$postdetails==""){
		echo "null input...";
	}else{

		//$user = $_SESSION['current_user'];
		
		require('../model/config.php');

		$sql="insert into posts values('$posttitle','$postdetails','$postimg','$postdate')";
		$result1=mysqli_query($con, $sql);
        print_r($result1);

	}
}


?>
