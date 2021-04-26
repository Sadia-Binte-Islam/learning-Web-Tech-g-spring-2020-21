<?php
  $con=mysqli_connect('localhost', 'root', "");
  $db = mysqli_select_db($con,'sociopanda');

 if(isset($_POST['update']))
 {
    $id=$_POST['id'];

  $query = "update selleruser set firstname='$firstname',lastname='$lastname',email='$email', phonenumber='$phonenumber' , password='$password'  where id='$id'";
   $query_run = mysqli_query($con,$query);

   if($query_run)
   {
       echo '<script> alart("data Update")</script>';
   }
 }






  if(isset($_POST['edit']))
  {
   $id=$_SESSION['id'];
    $firstname='$_POST[firstname]',  $lastname='$_POST[lastname]', $email='$_POST[email]' $phonenumber='$_POST[phonenumber]' $password='$_POST[password'
  
    $select= "select * from selleruser where id='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
//        $update = "update selleruser set firstname='$firstname',lastname='$lastname',email='$email', phonenumber='$phonenumber' , password='$password'  where id='$id'";
//        $sql2=mysqli_query($con,$update);
// if($sql2)
//        { 
//            /*Successful*/
//            header('location:selleruserdashboard.php');
//        }
//        else
//        {
//            /*sorry your profile is not update*/
//            header('location:viseller_profile_edit_form.php');
//        }
//     }
//     else
//     {
//         /*sorry your id is not match*/
//         header('location:seller_profile_edit_form.php');
//     }
//  }
?>