<?php
session_start();
require_once 'config.php';
if(isset($_SESSION['role'])&&isset($_SESSION['fname'])){
if($_SESSION['role']=='1'){
        header("location: View_Users.php");
}else if($_SESSION['role']=='2'){
        header("location: customer.php");
}
exit;
}
if(isset($_POST['login'])){
  $mail=$_POST['email'];
  $password=$_POST['password'];
  $check_auth='select password,role_id from users where email ="'.$mail.'"';
  foreach(getData($check_auth) as $x){
  if($x['password']==$password){
    $sql_dat='select * from customers where email ="'.$mail.'"';
    echo $sql_dat;
    $_SESSION['role']=$x['role_id'];
    foreach(getData($sql_dat) as $y){
      $_SESSION['fname']=$y['fname'];
      $_SESSION['email']=$y['email'];
      $_SESSION['gender']=$y['gender'];
      $_SESSION['address']=$y['address'];
    }
    if($_SESSION['role']=='1'){
            header("location: View_Users.php");
    }else if($_SESSION['role']=='2'){
            header("location: customer.php");
    }
    }
    else {
      echo 'failed';
      echo '<script>alert("Invalid Credentials!");</script>';
      echo '<script>location.replace("index.php")</script>';
  }
}
}

 ?>
