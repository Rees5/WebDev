<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (isset($_POST['login'])){
      $_SESSION['fname']=htmlentities($_POST['fname']);
    }
    ?>
    <p>Hello <?php echo $_SESSION['fname'] ?>. <a href="orders.php"> Make order</a></p>
    <p><a href="logout.php"> Logout</a></p>
  </body>
</html>
