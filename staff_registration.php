<?php
session_start();
include 'header.php';

?>

<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = "admin";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if ($conn) {
  $sql = "SELECT MAX(id) AS Maxid FROM  staff_registration";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $new_id = ++$row['Maxid'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Staff Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</head>

<body>

  <!------Main Header Start---->


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


        <!-------- STAFF REGISTRATION START-->


        <div class="col-md-9">
          <div class="h2 pt-3 pb-3 px-5 center" id="adm-title">Staff Registration</div>
          <form action="#" method="POST" id="addform">


            <div class="row pt-3">

              <div class="col-sm-6 col-md-4 form-group">
                <label for="">Employee ID</label>
                <input type="text" class="form-control" name="e_id" value="<?php echo $new_id; ?>" id="e_id" readonly />
              </div>

              <div class=" col-sm-6 col-md-4  form-group">
                <label for="">Employee Name</label>
                <input type="text" class="form-control" name="e_name" id="e_name" required />
              </div>

              <div class="col-sm-6 col-md-4 form-group">
                <label for="">E-mail ID</label>
                <input type="email" class="form-control" name="e_mail" id="e_mail" required />
              </div>
            </div>
            <hr>

            <div class="row py-3">
              <div class=" col-sm-6 col-md-4">
                <label for="">Address</label>
                <input type="text" class="form-control" name="e_addr" id="e_addr" required />
              </div>

              <div class="col-sm-6 col-md-4">
                <label for="">Department</label>
                <select class="form-control" name="department" id="department" required>
                  <option>-----Select Department------</option>
                  <option value="technology">Technology</option>
                  <option value="clerk">Clerk</option>
                  <option value="account">Accounts</option>
                  <option value="purchase">Purchase</option>
                </select>
              </div>

              <div class=" col-sm-6 col-md-4">
                <label for="">Date of Birth</label>
                <input type="date" class="form-control" name="e_date" id="e_date" required />
              </div>


            </div>
            <hr>

            <div class="row mb-3">
              <div class="col-sm-12">
                <button type="submit" id="add-user" name="add-user" class="btn btn-primary btn-sm w-50 mt-4" style="margin-left:200px;">Add Employee</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>



  <script>
    $(document).ready(function() {
      $('#add-user').on("click", function(e) {
        e.preventDefault();
        var e_id = $("#e_id").val();
        var emp_name = $('#e_name').val();
        var mail = $("#e_mail").val();
        var addr = $("#e_addr").val();
        var depart = $("#department").val();
        var emp_date = $("#e_date").val();

        $.ajax({
          url: 'staff_registration1.php',
          type: 'POST',
          data: {
            e_id: e_id,
            emp_name: emp_name,
            mail: mail,
            addr: addr,
            depart: depart,
            emp_date: emp_date
          },
          success: function(data) {
            if (data == 1) {
              $("#abc").modal("show");
              $("#addform").trigger("reset");
              $("#close-modal").click(function() {
                location.reload();
              });

            } else {
              alert("Not Inserted");
            }
          }
        });


      });
    });
  </script>



  <div class="modal fade" id="abc">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><?php echo "HI," . $_SESSION['Admin_name']; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          You Have been Insert Record Successfully!
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
        </div>
      </div>
    </div>
  </div>


  <!--------STAFF REGISTRATON CONTENT End-->




  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>