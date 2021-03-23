<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="post" action="../controller/addProductCheck.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><input type="text" name="buying" value=""></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="text" name="selling" value=""></td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td><input type="checkbox" name="display" id=""></td>
                    <td>display</td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Save"> 
						
					</td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>