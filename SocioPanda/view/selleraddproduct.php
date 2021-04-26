<?php
require('../model/config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <link rel="stylesheet" href="../css/deshboardstyle.css">

    <script>
        function validateform() {
            var name = document.myform.name.value;
            var productdescription = document.myform.productdescription.value;
            var productprice = document.myform.productprice.value;
            if (name == "" || productdescription == "" || productprice =="") {
                alert("Please Fill the all  fields");
                return false;
            }

            if (name.length <= 4) {
                alert("name must be longer than 4 characters'");
                return false;
            }

            if (productdescription.length <= 30) {
                alert("Description must be longer than 30 characters'");
                return false;
            }


            else {
                return true;
            }
        }

        function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getproducthint.php?q="+str, true);
  xhttp.send();   
}

    </script>
</head>

<body>
    <div class="container">
        <section class="header">
            <h2>Welcome SocioPanda Seller</h2>
        </section>
        <!-- Main Area -->
        <section class="maincontain">

             <div class="btn-menu">
                <a href="selleraddproduct.php" class="btn-menu"> Add Product </a>
                <a href="transitionhistory.php" class="btn-menu"> Transition History </a>
                <a href="sellereasyprofile.html" class="btn-menu"> Update profile</a>
                <a href="sellersupport.html" class="btn-menu"> Support Ticket</a>
                <a href="selleradvancesetting.php" class="btn-menu">Change Password</a>
                <a href="../controller/logout.php" class="btn-menu"> Logout</a>
                <!--  -->
            </div>
            <form onsubmit="return validateform()" name="myform" method="post" action="../controller/productcheck.php">
                <fieldset>
                    <LEGEND>Add Product</LEGEND>
                    <table>
                        <tr>
                            <p>Product Name Suggestions: <span id="txtHint"></span></p>
                            <td>Product Name:</td>
                            <td><input type="text" id="name" name="name" value=""  placeholder="Enter Product Name" onkeyup="showHint(this.value)"  /></td>
                        </tr>

                        <tr>
                            <td>Product Code </td>
                            <td> <input type="text" name="code" placeholder="Enter Product Code" value="" />
                            </td>
                        </tr>


                        <tr>
                            <td>Product price </td>
                            <td> <input type="number" name="price" placeholder="Enter Product Price" value="" />
                            </td>
                        </tr>

                        <tr>
                            <td> image </td>
                            <td> <input type="file" name="image" placeholder="Enter Product image" value="" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">

                                <input type="submit" name="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>

        <section class="footer">
            <h2>SocioPanda &copy; 2021</h2>
        </section>

    </div>
</body>

</html>