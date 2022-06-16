<?php
session_start();
include('config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
header('location:login.php');
}
if($_GET['rid']){
  $id=intval($_GET['rid']);
  $query=mysqli_query($con,"delete from saturdayTT where id='$id'");
  echo "<script>alert('Record successfully Deleted.');</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  
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
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><button class="btn btn-light"> <a href="mmonday.php"> Saturday </a> </button></h4>
                  <p class="card-description">
                    Manage Data Of Saturday
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>
                            #
                          </th>
                          <th>
                            Lecture1
                          </th>
                          <th>
                          Lecture2
                          </th>
                          <th>
                          Lecture3
                          </th>
                          <th>
                          Lecture4
                          </th>
                          <th>
                          Lecture5
                          </th>
                          <th>
                          Lecture6
                          </th>
                          <th>
                          Lecture7
                          </th>
                          <th>
                          Lecture8
                          </th>
                        </tr>
                      </thead>
                      <tbody>
<?php 

$query=mysqli_query($con,"Select * from saturdayTT");

$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                        <tr>
                          <td class="py-1">
                            <?= $cnt ?>
                          </td>
                          <td>
                            <?= $row['Lecture1'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture2'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture3'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture4'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture5'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture6'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture7'] ?>
                          </td>
                          <td>
                            <?= $row['Lecture8'] ?>
                          </td>
                          <td>
                            

                            <a href="msaturday.php?rid=<?php echo htmlentities($row['id']);?>"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>
                          </td>
                        </tr>
<?php
$cnt++;
 } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
          <?php include('include/dash.php');?>
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
