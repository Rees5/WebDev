<?php
require_once("config.php");
if(isset($_POST['register'])){
  $fname=$_POST["first_name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $gender=$_POST["gender"];
  $address =$_POST["d_address"];
  $password=$_POST['password'];
$register="insert into customers(fname,email,phone,gender,address) values('$fname','$email','$phone','$gender','$address') ";
$reg2="insert into users(email,password) values('$email','$password')";
echo setData($register);
echo setData($reg2);
}
?>
