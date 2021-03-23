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
	
		$row=getAllUser();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['name']}</td>
						<td>{$var['sprice']}</td>
						<td><a href='edit.php?id={$var['ID']}'>edit</a> |
							<a href='../controller/delete.php?id={$var['ID']}'>delete</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>";


?>

	
<?php
	include('footer.php');
?>