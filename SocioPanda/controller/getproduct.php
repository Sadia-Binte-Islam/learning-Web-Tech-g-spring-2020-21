<?php
// require('../model/config.php');

$mysqli = new mysqli("localhost", "root", "", "sociopanda");
if($mysqli->connect_error) {
  exit('Could not connect');
}


$sql = "SELECT productname,productprice,productdescription FROM products WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $productname, $productprice, $productdescription);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ProductID</th>";
echo "<td>" . $id . "</td>";
echo "<th>ProductName</th>";
echo "<td>" . $productname . "</td>";
echo "<th>ProductPrice</th>";
echo "<td>" . $productprice . "</td>";
echo "<th>ProductDescription</th>";
echo "<td>" . $productdescription . "</td>";
echo "</tr>";
echo "</table>";
?>