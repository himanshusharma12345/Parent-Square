<?php
session_start();
//Database Configuration File
include('config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    // Fetch data from database on the basis of username/email and password

$sql =mysqli_query($con,"SELECT * FROM register WHERE email='$uname' ");
$num=mysqli_fetch_array($sql);

if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if ($password==$hashpassword) {
$_SESSION['login']=$_POST['email'];
$_SESSION['email']=$num['email'];
echo "<script>alert('login Sucessful');</script>";
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Parent Square</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/bootstrap.css">
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center><h1><samp><font color="red">Login</font></samp></h1></center>
              </div>
             
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" placeholder="Email ID" name="email" required="">
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required="">
                </div>
                <div class="mt-3">
                  
                   <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="login"> Sign In</button>
                </div>
                <br><br>
                <center>
                   <h6>New Member Click Here?</h6>
                </center>
                             
              </form>
              <a href="register.php">
                  <button  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register </button>
                  </a> 
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
