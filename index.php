<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">



	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #EEEEEE;
		}

		#login-form {
			height: 500px;
			width: 950px;
			margin-top: 20px;

		}

		.login-page {
			height: 450px;
			position: relative;
			top: 50px;
			background-color: #FEFEFE;
			border-radius: 10px;
			box-shadow: 5px 10px 8px grey;
		}

		.user-img {
			margin-top: 60px;
			margin-left: 60px;

		}

		form {
			margin-top: 50px;
		}

		.form-group {
			position: relative;

		}

		.form-group input {
			border: none;
			border-bottom: 1px solid #5fa8d3;
			padding: 10px;
			margin-bottom: 30px;
			font-size: 16px;


		}

		input {
			box-shadow: none !important;
			outline: none;
		}

	

		
	</style>
</head>

<body>
	<?php
	if (isset($_GET['msg'])) {
	?>
		<div class="container cmsg" style="margin:auto; height: 70px; width: 500px; background-color: lime; margin-top:30px; display:none; border-radius: 5px;">
			<h6 class="text-center pt-4"><?php echo $_GET['msg']; ?></h6>
		</div>
	<?php
	}
	?>


	<div class="container" id="login-form">
		<div class="login-page">
			<div class="row">
				<div class="col-md-5">
					<div class="user-img">
						<img src="images/user-login.jpg" height="300px" width="300px" alt="">
					</div>
				</div>
				<div class="col-md-6" style=" margin-top:60px;">
					<div class="form-heading">
						<h1>User Login</h1>
					</div>
					<form autocomplete="off" action="login1.php" method="POST">
						<div class="form-group">
							<label for="" class="label-name">Email</label>
							<input type="text" name="email" class="form-control" required>
							
						</div>

						<div class="form-group">
							<label for="" class="label-name">Password</label>
							<input type="password" name="Password" class="form-control" required>
							
						</div>
						<input type="submit" value="Login" class="btn btn-outline-primary w-100" name="">
					</form>


					<p style="margin-left:180px; margin-top:10px; float: right;"><a href="email-forget-password.php">Forget Password?</a></p>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(document).ready(function() {
			$('.cmsg').fadeIn().delay(3000).fadeOut('slow');


		});
	</script>



	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>