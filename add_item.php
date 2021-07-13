	<?php
session_start();
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add New Item</title>
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


				<!--------ISSUE ITEM MAIN CONTENT START-->


				<div class="col-md-9">
					<div class="h2 pt-3 pb-3 px-5 center" id="adm-title">ADD ITEM</div>
					<form id="submit_form">
						<div class="row pt-5 m-auto" style="width:80%;">


							<div class="col-sm-6 col-md-6 form-group">
								<label for="">Item Name</label>
								<select class="form-control item" id="item_name" required>
									<option>-----Select Item------</option>
									<option value="pencil">Pencil</option>
									<option value="pen">Pen</option>
									<option value="marker">Marker</option>
									<option value="notepad">Notepad</option>
									<option value="stapler">Stapler</option>
									<option value="clip folder">Clip Folder</option>
									<option value="paper bag">Paper Bag</option>
									<option value="punch">Punch</option>
									<option value="paper">Paper</option>
								</select>
							</div>


							<div class="col-sm-6 col-md-6 form-group">
								<label for="">Item ID</label>
								<input type="text" id="item_id" class="form-control" readonly />
							</div>



						</div>
						<hr>

						<div class="row py-3 m-auto" style="width:80%;">
							<div class=" col-sm-6 col-md-6">
								<label for="">Quantity</label>
								<input type="number" class="form-control" name="qty" value="1" id="qty" required />
							</div>

							<div class=" col-sm-6 col-md-6">
								<label for="">Date of Entry</label>
								<input type="date" class="form-control" name="date_entry" id="date_entry" required />
							</div>


						</div>
						<hr>

						<div class="row mb-3">
							<div class="col-sm-12">
								<button type="submit" name="Add" id="add_item" class="btn btn-primary btn-sm w-50 mt-4" style="margin-left:200px;">Add Item</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>




	<!--------ISSUE ITEM MAIN CONTENT End-->


	<script>
		$(document).ready(function() {

			//automatic Generate Item ID
			$("#item_name").change(function() {
				var item_name = $(this).val();
				if (item_name == "") {
					alert("Plese Select Any Item");
				} else {
					$.ajax({
						url: 'item.php',
						type: 'POST',
						data: {
							item_name: item_name
						},
						success: function(data) {
							$("#item_id").val(data);
						}
					});
				}
			});

			$("#submit_form").on('submit', function(event) {
				event.preventDefault();
				var item_name = $("#item_name").val();
				var item_id = $("#item_id").val();
				var item_qty = $("#qty").val();
				var date_entry = $("#date_entry").val();
				$.ajax({

					url: 'add_item1.php',
					type: 'POST',
					data: {
						item_name: item_name,
						item_id: item_id,
						item_qty: item_qty,
						date_entry: date_entry
					},
					success: function(data) {
						if (data == 1) {
							$("#abc").modal("show");
							$("#submit_form").trigger("reset");

						} else {
							alert("data Not Inserted");
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
					You Have been Add Item Record Successfully!
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>