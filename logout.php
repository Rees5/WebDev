<?php
  require_once 'config.php';
  $link=connect();
  session_start();
  $link -> close();
  session_unset();
  session_destroy();
  session_start();
  $_SESSION['loginerr']="Logout Successful.";
  header("location:index.php");
  exit();
?>
