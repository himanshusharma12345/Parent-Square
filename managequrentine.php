<?php
session_start();
include('config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
header('location:login.php');
}

if($_GET['vid'])
{
    
    $query=mysqli_query($con,"Select * from qurentine");
    while($row=mysqli_fetch_array($query))
    {
      $name=$row['name'];
      echo "<script>
  
      var msg = 'Name : ".$row['name']."\\n'
          msg += 'Contact : ".$row['contact']."\\n';
          msg += 'Email : ".$row['email']."\\n';
          
          msg += 'Address : ".$row['address']."\\n';
          msg += 'City : ".$row['city']."\\n';
          msg += 'Invigilator : ".$row['room']."\\n';
          msg += 'Invigilator : ".$row['bed']."\\n';
         

            
            alert(msg);
            </script>";
    }


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
                  <h4 class="card-title"><button class="btn btn-light"> <a href="addqurentine.php"> Add Place For Qurentine </a> </button></h4>
                  <p class="card-description">
                    Manage Data Of Product Manager
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Contact
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            City
                          </th>
                           <th>
                            Room
                          </th>
                          <th>
                            Bed
                          </th>
                        </tr>
                      </thead>
                      <tbody>
<?php 
if (isset($_POST['find'])) {
$find=$_POST['find'];
$a=$_SESSION['login'];

$query=mysqli_query($con,"Select * from qurentine where name like '%".$find."%' and loan='$loan'");
}else{
$a=$_SESSION['login'];

$query=mysqli_query($con,"Select * from qurentine");
}
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                        <tr>
                          <td class="py-1">
                            <?= $cnt ?>
                          </td>
                          <td>
                            <?= $row['name'] ?>
                          </td>
                          <td>
                            <?= $row['contact'] ?>
                          </td>
                          <td>
                            <?= $row['email'] ?>
                          </td>
                          <td>
                            <?= $row['address'] ?>
                          </td>
                          <td>
                            <?= $row['city'] ?>
                          </td>
                          <td>
                            <?= $row['room'] ?>
                          </td>
                          <td>
                            <?= $row['bed'] ?>
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
