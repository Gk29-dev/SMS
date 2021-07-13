<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Header</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	
	<!------Main Header Start---->
<?php 
 function header_section(){



?>

  <div class="modal fade" id="mymodal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><?php echo $_SESSION['Admin_name']; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          Are You Sure to Logout
        </div>

        <div class="modal-footer">
          <a href="logout.php" class="btn btn-primary" name="yes">Yes</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
  <!------Main Header Ends---->


  <header class="header">
    <div class=" heading float-left mt-3">
      <h4 class="float-left ml-5">Stationary <span class="text-white">Management System</span></h4>
    </div>
    <button class="btn btn-outline-secondary btn-sm text-white float-right mr-5 mt-2" name="logout" data-target="#mymodal" data-toggle="modal">Logout</button>
  </header>

  <!---------Main Content Start------->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">

        <div class="pt-3" id="left-column" style="width:250px;">

          <div class="admin-img">
            <center>
              <img src="images/user-image.jpg" alt="">
              <h4><?php echo $_SESSION['Admin_name']; ?></h4>
            </center>
          </div>

          <div class="useful-links">
            <a href="admin-dashboard.php">
              <i class="fa fa-dashboard icon"></i><span>Dashboard</span>
            </a>

            <a href="staff_registration.php">
              <i class="fa fa-user icon"></i><span>Add Users</span>
            </a>

            <a href="add_item.php">
              <i class="fa fa-book icon"></i><span>Add New Item</span>
            </a>
            <a href="issue_item.php">
              <i class="fa fa-pencil icon"></i><span>Issue Item</span>
            </a>
            <a href="search_department.php">
              <i class="fa fa-address-card icon"></i><span>Seach Department-Wise</span>
            </a>
            <a href="search_member.php">
              <i class="fa fa-user icon"></i><span>Search Member</span>
            </a>
            <a href="search_item.php">
              <i class="fa fa-search icon"><span></i>Search By Item</span>
            </a>
            <a href="monthly_report.php">
              <i class="fa fa-bar-chart icon"></i><span>Monthly Report</span>
            </a>
            <a href="incentive.php">
              <i class="fa fa-rupee icon"></i><span>Incentive</span>
            </a>
            <a href="admin-profile.php">
              <i class="fa fa-user-circle-o icon"></i><span>Profile</span>
            </a>
          </div>


        </div>
        <!--------Main Header Ends------->

   <?php

      }
    ?>    


 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>