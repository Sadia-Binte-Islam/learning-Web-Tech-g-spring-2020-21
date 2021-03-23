<?php 
    require_once('../model/fucnctions.php');
    session_start();
    

        $id=$_SESSION['edit_id'];
    
        $status=deleteProduct($id);
        //echo $id;
        if($status==true){
            header('location: ../view/display.php');
        }else{
            
        }
?>