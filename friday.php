<?php
session_start();
include('config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
header('location:login.php');
}


?>

<?php
          session_start(); 
          include('config.php');
          //Code for Registration 
         
        
          if(isset($_POST['submit']))
          {
          $Lecture1=$_POST['Lecture1'];
          $Lecture2=$_POST['Lecture2'];
          $Lecture3=$_POST['Lecture3'];
          $Lecture4=$_POST['Lecture4'];
          $Lecture5=$_POST['Lecture5'];
          $Lecture6=$_POST['Lecture6'];
          $Lecture7=$_POST['Lecture7'];
          $Lecture8=$_POST['Lecture8'];


       

          $query=mysqli_query($con,"
            insert into fridayTT(Lecture1,Lecture2,Lecture3,Lecture4,Lecture5,Lecture6,Lecture7,Lecture8) values('$Lecture1','$Lecture2','$Lecture3','$Lecture4','$Lecture5','$Lecture6','$Lecture7','$Lecture8')");

          if($query)
          {
            echo "<script>alert('Data added successfully.');</script>";
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
                  <h4 class="card-title"><a href="manageblod.php"><button class="btn btn-primary mr-2"> Add Time Table Day Wise </button></a></h4>
                  <p class="card-description">
                   <span> Friday Task </span>
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Lecture1</label>
                      <input type="text" class="form-control" placeholder="Lecture 1" name="Lecture1" required="" value="<?php echo htmlspecialchars($_POST['name'] ?? '',ENT_QUOTES); ?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture2</label>
                      <input type="text" class="form-control" placeholder="Lecture 2" name="Lecture2"  required="" value="<?php echo htmlspecialchars($_POST['contact'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture3</label>
                      <input type="text" class="form-control" placeholder="Lecture 3" name="Lecture3" required="" value="<?php echo htmlspecialchars($_POST['address'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture4</label>
                      <input type="text" class="form-control" placeholder="Lecture 4" name="Lecture4" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture5</label>
                      <input type="text" class="form-control" placeholder="Lecture 5" name="Lecture5" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture6</label>
                      <input type="text" class="form-control" placeholder="Lecture 6" name="Lecture6" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture7</label>
                      <input type="text" class="form-control" placeholder="Lecture 7" name="Lecture7" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Lecture8</label>
                      <input type="text" class="form-control" placeholder="Lecture 8" name="Lecture8" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
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
