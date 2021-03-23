<?php 
    require_once('../model/fucnctions.php');

    if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$bprice 	= $_POST['buying'];
		$sprice 		= $_POST['selling'];

		if($name == "" || $bprice == "" || $sprice == ""){
			echo "null value found...";
		}else{
			

				$products = [	
							'name'	=> $name, 
							'bprice'=> $bprice, 
							'sprice'=>$sprice, 
						];
				
				$status = insertProduct($products);				

				if(isset($_POST['display'])){
					header('location: ../view/display.php');
				}else{
					
				}

			}
		
	}

?>