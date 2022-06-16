<?php
          session_start(); 
          include('config.php');
          //Code for Registration 
         
        
          if(isset($_POST['submit']))
          {
          $name=$_POST['name'];
          $contact=$_POST['contact'];
          $email=$_POST['email'];
          $feedback=$_POST['feedback'];
        

       

          $query=mysqli_query($con,"
            insert into feedback(name,contact,email,feedback) values('$name','$contact','$email','$feedback')");

          if($query)
          {
            echo "<script>alert('Feedback successfully.');</script>";
          }
          else{
             echo "<script>alert('Error in giving feedback.');</script>";
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
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
 
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('include/header.php');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
       
      <?php include('include/sidebar.php');?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <p class="card-description">
                   <span class="bg-light"> Give Feedback</span>
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" placeholder="User name" name="name" required="" value="<?php echo htmlspecialchars($_POST['name'] ?? '',ENT_QUOTES); ?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Contact</label>
                      <input type="number" class="form-control" placeholder="Contact" name="contact"  required="" value="<?php echo htmlspecialchars($_POST['contact'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email" name="email" required=""
                      value="<?php echo htmlspecialchars($_POST['email'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Feedback</label>
                      <textarea type="text" class="form-control" placeholder="Feedback" name="feedback"  required="" value="<?php echo htmlspecialchars($_POST['complaint'] ?? '',ENT_QUOTES); ?>"></textarea>
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         <?php include('include/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
