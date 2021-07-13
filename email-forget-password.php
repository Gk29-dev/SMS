<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email-Forget-Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





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
    	 input[type="email"]{
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

	<div class="jumbotron mt-3">
		<div class="container" style="margin:auto;">
			<h1>Recover Account</h1>
			<p class="lead">Fill The data Correctly</p>

			<form action="" class="form-group" autocomplete="off" style="width: 400px; margin:auto;">
			 <div class="input-container" style="width: 100%;">
				<i class="fa fa-user icon"></i><input type="email" class="form-control" placeholder="Enter Valid Email Address" name="email" required>
			 </div>
			 
				<input type="submit" class="btn btn-outline-primary w-100 mt-4" name="email-send" value="Send Mail">
			
			</form>
		</div>
	</div>

<?php

$db_host='localhost';
  $db_user='root';
  $db_password='';
  $db_name="admin";

  $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);


   if(isset($_REQUEST['email-send'])){
		   $user_email=$_REQUEST['email'];
		

		    $sql="SELECT * FROM admin_info WHERE Admin_email='$user_email'";
		     $res=mysqli_query($conn,$sql);
		     if(mysqli_num_rows($res)>0){
		     	$row=mysqli_fetch_assoc($res);
		     	$user_token=$row['Token'];
		     	$user_name=$row['Admin_name'];

				    $to_email=$user_email;
				    $subject="Password Change Request";
				    $body="Hi,".$user_name." Click Here to Reset Your Password Thank You ! http://localhost/php_project/forget-password.php?token=$user_token";
				    $sender="From:ankitkumar29.01.1998@gmail.com";

				    if(mail($to_email,$subject,$body,$sender)){
				    ?>
                       
                       <script type="text/javascript">
                       	$(document).ready(function(){
                          $('#mymodal').modal('show');
                       	});
                       </script>

				    <?php
				    }
				    else{
						echo "mail not send";
						echo "Mai id:", $user_email;
				    }

		     }
     
		   
		  
		}

?>
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title">Email Send Successfully</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                We Have Send a Link To Your Email Check it.
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
  </div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>
</html>