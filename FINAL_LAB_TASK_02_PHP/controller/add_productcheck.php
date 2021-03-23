<?php
	session_start();
	require_once('../model/fucnctions.php');

	if(isset($_POST['submit'])){

		$productName 	= $_POST['productName'];
		$buyingPrice 	= $_POST['buyingPrice'];
		$sellingPrice 	= $_POST['sellingPrice'];
		$display 		= $_POST['display'];

		if($productName == "" || $buyingPrice == "" || $sellingPrice == ""){
			echo "null value found...";
		}else{
			if($productName != ""){

				$product = [	
							'productName'	=> $productName, 
							'buyingPrice'	=> $buyingPrice, 
							'sellingPrice'		=>$sellingPrice, 
							'display'		=>'display'
						];
				
				$status = insertproduct($product);				

				if($status){
					header('location: ../view/add_product.php');
				}else{
					echo "error..try again";
				}

			}else{
				echo "Product is empty";
			}
		}
	}


?>