<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forget-Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">





    <style>
    	.input-container{
    		display: flex;
    	}

    	.input-container i{
          font-size: 20px;
          padding:8px;
          width: 50px;
          background-color: dodgerblue;
          color:white;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
          text-align: center;
    	}
    	 input[type="text"]{
	    		box-shadow: none !important;
	    		outline: none;
	    		border-top-left-radius: 0px !important;
	    		border-bottom-left-radius: 0px !important;
               
	    	}
	    	input:focus{
	    		border:2px solid dodgerblue;
	    	}
    </style>
</head>
<body>

	<?php
$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);


  if($conn){
 
         if(isset($_POST['submit'])){
         	if(isset($_GET['token'])){
         		$token=$_GET['token'];
         		$password=$_POST['restpassword'];
	            $cpassword=$_POST['cpassword'];
	            if($password==$cpassword){
	            	$sql="UPDATE admin_info SET Admin_password='$password' WHERE Token=$token";
		     			$res=mysqli_query($conn,$sql);
		     			if($res){
		     				echo "<script> location.href='login-page.php?msg=Password Updated'</script>";
		     			}
		     			else{
		     				echo '<script> alert("Password not Updated")</script>';
		     				echo "<script> location.href='forget-password.php'</script>";
		     			}

	            }
	            else{
	            	echo "Password Not Match";
	            }
         	}
         }

     } 
	 ?>



	<div class="jumbotron mt-3">
		<div class="container" style="margin:auto;">
			<h1>Update Password</h1>
			<p class="lead">Fill both the filed correctly</p>

			<form action=""  method="POST" class="form-group" autocomplete="off" style="width: 400px; margin:auto;">
			 <div class="input-container" style="width: 100%;">
				<i class="fa fa-user icon"></i><input type="text" class="form-control" placeholder="New password" name="restpassword" required>
			 </div>
			  <div class="input-container" style="width: 100%; margin-top: 30px;">
				<i class="fa fa-user icon"></i><input type="text" class="form-control" placeholder="Confirm password" name="cpassword" required>
			 </div>
				<input type="submit" class="btn btn-outline-primary w-100 mt-5" name="submit" value="Update Password">
			
			</form>
		</div>
	</div>

	






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>
</html>