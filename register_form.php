<?php
  //require_once 'create_db.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title> e-Kula Login Page</title>
  </head>
  <body>
    <div class="log">

      <!---<a href="index.html" title="Home" ><img src="img/logo.png" alt="logo" style="foat:left:height:100px;width:100px"></a>--->
      <h1>e-Kula Add User</h1>
      <form class="" action="register.php" method="post">
        <div class="form-group">
          <label for="fname">Name</label>
          <input class="form-control" id="fname" type="text" name="first_name" placeholder="Enter your firstname" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="Enter youremail address" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input class="form-control" id="phone" type="tel" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
          <p>Gender:</p>

            <label for="l1">Male</label>
            <input id="l1" type="radio" name="gender" value="male">
            <label for="l2">Female</label>
            <input id="l2" type="radio" name="gender" value="female">
        </div>
        <label for="d_address">Delivery Address</label>
        <div class="form-group">
          <input id="d_address" class="form-control" type="text" name="d_address" placeholder="Enter your delivery address">
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input id="pwd" class="form-control" type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="modal-footer justify-content-between">
          <a href="#myModal"  data-toggle="modal">Login</a>
          <button type="submit" class='btn-primary' name="register">Register</button>
        </div>
      </form>
    </div>
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <form action="login_control.php" method="post">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name='email' required="required">
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <label>Password</label>
                </div>
                <input type="password" class="form-control" name='password' required="required">
                <a href="register_form.php" class="float-left text-muted"><small>Register?</small></a>
                <a href="reset_pwd.php" class="float-right text-muted"><small>Reset Password?</small></a>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <label class="form-check-label"><input type="checkbox"> Remember me</label>
              <input type="submit" class="btn btn-primary" name="login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
