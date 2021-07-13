<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">


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

				<div class="col-md-9" style="background-color:#EDF4F8;">
					<div class="h4 py-4 px-5">ADMIN DASHBOARD</div>
					<div class="container ml-5">
						<div class="row pt-3" style="display:flex; justify-content:space-between;">
							<div class="col-md-5 col-sm-12" style="margin:0px;">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">User Registration</h6>
											<img src="images/user-registration.png" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">The Staff Member of an Office can Register Their Account By Fill The Form.</p>
											<a href="staff_registration.php" class="card-link float-right mb-2">Go To Registration</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-5 col-sm-12">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">Issue Item</h6>
											<img src="images/issue-stationary.jpg" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">Staff Member Request for the item and Admin can Issue that item to Staff Member by Entering Some item Details.</p>
											<a href="issue_item.php" class="card-link float-right" style="margin-top:-12px;">Go To Issue Item</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row pt-3" style="display:flex; justify-content:space-between;">
							<div class="col-md-5 col-sm-12">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">Search Item</h6>
											<img src="images/search.png" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">Admin and Staff Member can Search Many Stationary item by Simple enter Item Name.</p>
											<a href="#" class="card-link float-right" style="margin-top:-12px;">Go To Search Item</a>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-sm-6 col-md-5 ">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">Stationary Stock</h6>
											<img src="images/Stationary.jpg" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">Admin Can Check the Available Item Stock by Entering their Name.</p>
											<a href="#" class="card-link float-right">Check Stock</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row py-3" style=" display:flex; justify-content:space-between;">
							<div class=" col-sm-6 col-md-5 ">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">Report</h6>
											<img src="images/report-generator.jpg" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">Admin Can Generate Monthly Report of all the item that has been added in a Particular Month .</p>
											<a href="#" class="card-link float-right" style="margin-top:-12px;">Generate Report</a>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-sm-6 col-md-5 ">
								<div class="card" style="border-radius:10px; height:190px;">
									<div class="container">
										<div class="card-body">
											<h6 class="card-title text-uppercase font-weight-bold">Incentive</h6>
											<img src="images/incentive.jpg" height="40px" width="40px" style="margin-top:-40px;float:right;">
											<p style="color:#777E8B; border-top:2px solid #777E8B;" class="mt-4 pt-2">In each Department the Staff Member who use less Paper will Get the Incentive.</p>
											<a href="#" class="card-link float-right">Give Incentive</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




				</div>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>