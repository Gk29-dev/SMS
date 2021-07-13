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
	<title>Issue Item</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

	<!--------Header --------->
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
					<div class="h2 pt-3 pb-3 px-5 center" id="adm-title">ISSUE ITEM</div>
					<form id="add_form">

						<div class="row pt-3">

							<div class="col-sm-6 col-md-4 form-group">
								<label for="">Employee ID</label>
								<input type="text" class="form-control" id="e_id" required />
							</div>

							<div class=" col-sm-6 col-md-4  form-group">
								<label for="">Employee Name</label>
								<input type="text" class="form-control" id="e_name" required />
							</div>

							<div class="col-sm-6 col-md-4 form-group">
								<label for="">Item Name</label>
								<select class="form-control" id="item_name" required>
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
						</div>
						<hr>

						<div class="row py-3">

							<div class=" col-sm-6 col-md-4">
								<label for="">Item ID</label>
								<input type="text" readonly class="form-control" id="item_id" required />
							</div>

							<div class=" col-sm-6 col-md-4">
								<label for="">Quantity</label>
								<input type="number" class="form-control" id="qty" required />
							</div>

							<div class="col-sm-6 col-md-4">
								<label for="">Department</label>
								<select class="form-control" id="department" required>
									<option>-----Select Department------</option>
									<option value="technology">Technology</option>
									<option value="clerk">Clerk</option>
									<option value="account">Accounts</option>
									<option value="purchase">Purchase</option>
								</select>
							</div>
						</div>

						<div class="row py-3">
							<div class=" col-sm-6 col-md-4">
								<label for="">Issue Date</label>
								<input type="date" class="form-control" id="issue_date" required />

							</div>
						</div>


						<hr>

						<div class="col-sm-12">
							<button type="submit" id="issue" class="btn btn-primary btn-sm w-50 my-3" style="margin-left:200px;">Issue</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

	<!----------Quantity Error Message--------->
	<div class="modal fade" id="qty_msg">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title"><?php echo "HI," . $_SESSION['Admin_name']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body" id="error_msg">
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
				</div>
			</div>
		</div>
	</div>


	<!----------Successfull Message-------->
	<div class="modal fade" id="abc">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title"><?php echo "HI," . $_SESSION['Admin_name']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					😂😂 You Have been Issue the Item Successfully! 😂😂
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
				</div>
			</div>
		</div>
	</div>





	<!--------ISSUE ITEM MAIN CONTENT End-->



	<script>
		$(document).ready(function() {

			//check Employee Id Valid Or not

			$("#e_id").keyup(function() {
				var e_id = $(this).val();

				if (e_id != "") {
					$.ajax({
						url: 'check_e_id.php',
						type: 'POST',
						data: {
							e_id: e_id
						},
						success: function(data) {
							if (data != "") {
								$("#e_name").val(data);
							} else {
								alert("invalid Employee ID");
								$("#e_name").val("");
							}
						}
					});
				} else {
					$("#e_name").val("");
				}
			});


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







			$("#add_form").submit(function(event) {
				event.preventDefault();
				var e_id = $("#e_id").val();
				var e_name = $("#e_name").val();
				var item_name = $("#item_name").val();
				var item_id = $("#item_id").val();
				var qty = $("#qty").val();
				var depart = $("#department").val();
				var issue_date = $("#issue_date").val();

				//check Qunatity of Item
				$.ajax({
					url: 'check_quantity.php',
					type: 'POST',
					data: {
						item_name: item_name,
						qty: qty
					},
					success: function(data) {
						if (data != "") {
							$("#qty_msg").modal("show");
							$("#error_msg").text(data);
						} else {
							$.ajax({
								url: 'issue_item1.php',
								type: 'POST',
								data: {
									e_id: e_id,
									e_name: e_name,
									item_name: item_name,
									item_id: item_id,
									qty: qty,
									depart: depart,
									issue_date: issue_date
								},
								success: function(data) {
									if (data == 1) {
										$("#abc").modal("show");
										$("#add_form").trigger("reset");
									} else {
										alert("Record Not Inserted");
									}
								}

							});
						}

					}
				});
			});
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>