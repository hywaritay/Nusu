
<?php

session_start();
// header.php
include "helper.php";
?>

<?php

    $user = array();
    require('includes/db.php');

    if (isset($_SESSION['id'])) {
        # code...
        $user = get_user_info($conn,$_SESSION['id']);
    }

?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NUSU Voting Sytem</title>
    <link rel="stylesheet" href="css/Style.css">
      <!-- javascript plugins -->
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-validation/dist/jquery.validate.min.js"></script>
  
   
  </head>
  <body>
    <div class="content">
      <div class="text">
Login Form</div>
<form action="login-process.php" method="post" enctype="multipart/form-data" id="log-form">
        <div class="field">
        <input type="text" required name="username" id="username" class="form-control" >
          <span class="fas fa-user"></span>
          <label>Username</label>
        </div>
<div class="field">
<input type="password" required name="password" id="password" class="form-control">
          <span class="fas fa-lock"></span>
          <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          <label>Password</label>
        </div>
<div class="forgot-pass">
<a href="#">Forgot Password?</a></div>
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="login">Login</button>
        <div class="sign-up">
Not a member?
          <a href="SignUp.php">signup now</a>
        </div>
</form>
</div>


<script>


$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});

</script>
</body>
</html>



