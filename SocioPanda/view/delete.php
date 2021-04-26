<?php
require('../model/config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query); 
header("Location: communitynewsfeed.php"); 
?>