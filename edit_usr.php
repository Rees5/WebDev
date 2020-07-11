<?php
require_once("config.php");
if(isset($_POST['update'])){
  $customer_id =$_POST["idnumber"];
  $username =$_POST["uname"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $dob =$_POST["dob"];
  $address =$_POST["d_address"];

//password field to be added later
$register="update customers set email='$email', phone = '$phone',address='$address' where email='$email' ";
echo $register;
updateData($register);
echo '<script>location.replace("View_Users.php")</script>';

}
if(isset($_POST['update'])){
  $email=$_POST["email"];
  $role=$_POST["role"];
  $set_role="update users set role='$role' where email='$email'";
}
 ?>
