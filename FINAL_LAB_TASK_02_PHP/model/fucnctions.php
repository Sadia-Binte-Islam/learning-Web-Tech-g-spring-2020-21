<?php 
    require_once('db.php');


    function insertProduct($products){
        $conn = getConnection();
        $profit=$products['sprice']-$products['bprice'];
        $sql = "insert into products values('', '{$products['name']}', '{$products['bprice']}', '{$products['sprice']}', '{$profit}' )";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getAllProduct(){

        $conn = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($conn, $sql);
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($products, $row);
        }
        return $products;
    }

    function getProductbyId($id){
	
        $conn = getConnection();
        $sql = "select name, buyingPrice, sellingPrice from products where ID='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function updateProduct($product){
        $conn = getConnection();
        $profit=$product['sprice']-$product['bprice'];
        $sql = "update products set name='{$product['name']}', buyingPrice='{$product['bprice']}', sellingPrice='{$product['sprice']}', profit='{$profit}' where ID='{$product['id']}'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function deleteProduct($id){
        $conn = getConnection();
        $sql="delete from products where ID='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

?>