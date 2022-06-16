<?php
          session_start(); 
          include('config.php');
          //Code for Registration 
        
          if(isset($_POST['submit']))
          {
          $name=$_POST['name'];
          $description=$_POST['description'];
          $starttime=$_POST['starttime'];
          $endtime=$_POST['endtime'];
          
          $inv=$_SESSION['login'];
          $date=date("d/m/y");

          $uid=$_GET['uid'];

          $query=mysqli_query($con,"UPDATE `managemtuesday` SET `name`='$name',`description`='$description',`starttime`='$starttime',`endtime`='$endtime' WHERE id='$uid'");

          if($query)
          {
            echo "<script>alert('Area Head updated successfully.');</script>";
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
  <title>Meradsa</title>
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
  <link rel="shortcut icon" href="images/logo.jpg" />
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
                  <h4 class="card-title"><a href="managemtuesday.php"><button class="btn btn-primary mr-2"> See Area Head Data Record </button></a></h4>
                  <p class="card-description">
                   <span> Area Head Login </span>
                  </p>
<?php


if ($_GET['uid']) {
   # code... 
$a=$_GET['uid'];
$query=mysqli_query($con,"Select * from tuesday where id = '$a' ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>


                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" placeholder="User name" name="name" required="" value="<?= $row['name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email" name="description" required=""
                      value="<?= $row['description'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" class="form-control" placeholder="Password" name="starttime" required="" value="<?= $row['starttime'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="endtime" required="" value="<?= $row['endtime'] ?>">
                    </div>
                    
                   <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
<?php }} ?>
<br><br>
<a href="managemtuesday.php"><button class="btn btn-primary mr-2">Back</button></a>

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
