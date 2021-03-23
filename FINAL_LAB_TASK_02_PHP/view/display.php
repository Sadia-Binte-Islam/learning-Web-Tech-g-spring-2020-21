<?php
	$title = "Product List Page";
	require_once('../model/fucnctions.php');
?>

	
	<h1>Display</h1>

	<?php 
		echo "<table border='1'>
		<tr>
			<td>Name</td>
			<td>Profit</td>
			<td></td>
		</tr>";
	
		$row=getAllProduct();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['name']}</td>
						<td>{$var['profit']}</td>
						<td><a href='edit.php?id={$var['ID']}'>edit</a> |
							<a href='../view/deletep.php?id={$var['ID']}'>delete</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>";


?>

	