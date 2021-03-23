<?php 
    require_once('../model/fucnctions.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $bprice=$_POST['buying'];
        $sprice=$_POST['selling'];

        $id=$_SESSION['edit_id'];

        $product = [	
            'name'	=> $name, 
            'bprice'=> $bprice, 
            'sprice'=>$sprice, 
            'id' => $id
        ];
        updateProduct($product);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
       
    }

?>