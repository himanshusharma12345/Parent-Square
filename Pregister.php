<?php
    
          include('config.php');
          
          if(isset($_POST['submit']))
          {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $contact=$_POST['contact'];
          $password=$_POST['password'];

          
          $date=date("d/m/y");

          $query=mysqli_query($con,"
            insert into Puser(name,email,contact,password) values('$name','$email','$contact','$password')");
            
          if($query)
          {
            
            echo "<script>alert('Register Sucessful');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
          }
          else{
             echo "<script>alert('Error.');</script>";
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
  <title></title>
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
                <center><h1><samp><font color="red">Register</font></samp></h1></center>
              </div>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Name" name="name" required="">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" required="">
                </div>


                 <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Contact" name="contact" required="">
                </div>

                 <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="City" name="city" required="">
                </div>


                 <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required="">
                </div>

                <div class="mt-3">
                  
                   <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit">Register</button>
                </div>
                <br><br>
                <center>
                   <h6>Already Created Account Click Here?</h6>
                </center>
                  
                   
                                  
              </form>
            <a href="Plogin.php">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login </button>
       
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
