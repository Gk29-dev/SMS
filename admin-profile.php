<?php

session_start();
include 'header.php';

 ?>

<?php
$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);


  if($conn){ 

  	$email_id= $_SESSION['Admin_email'];

  	$sql="SELECT * FROM admin_info WHERE Admin_email='$email_id'";
  	$result=mysqli_query($conn,$sql);
  	if(mysqli_num_rows($result)>0){

  		$row=mysqli_fetch_assoc($result);

  		$admin_name= $row['Admin_name'];
  		$admin_email= $row['Admin_email'];
  		$admin_password= $row['Admin_password'];
  		$admin_gender= $row['Admin_gender'];
  		$admin_age=$row['Admin_age'];
  		$admin_address=$row['Admin_address'];
  		$admin_phone=$row['Admin_phone'];
  		$token_value=$row['Token'];
  	}
       
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
    	#admin-profile-card{
    		box-shadow: inset -3px -3px 5px #ffffff70,   inset 3px 3px 15px #00000070;
    	}
    </style>

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
<div class=" heading float-left mt-3"><h4 class="float-left ml-5">Stationary <span class="text-white">Management System</span></h4></div>
<button class="btn btn-outline-secondary btn-sm text-white float-right mr-5 mt-2" name="logout"  data-target="#mymodal" data-toggle="modal">Logout</button>
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
	

    			<div class="col-md-9">
    				<div class="h2 py-5 px-5 center" id="adm-title">Admin Profile</div>

    		      <div class="card" id="admin-profile-card" style="width: 600px; margin:auto;">	
	    				<div class="row">
	    					<div class="col-md-12  mb-5">
	    							
	                                         <div class="images-file mt-3" style="margin-left: 200px; display: inline-block;  border-radius:50%; height:200px; width:200px;">
	                                            <img src="images/user-image.jpg" alt="" id="blah" class="images-file card-img-top" style="margin-left: 0px; margin-top:20px; border-radius:50%;">
	                                        </div>
	                                       <div  class="ml-5" style=" display: inline-block;">
	                                       	<button class="btn btn-primary btn-sm" data-target="#edit-profile" data-toggle="modal">Edit Profile</button>
	                                       </div>
                                    

	    					</div>
	    				</div>
	    				<div class="card-body" style="margin-top:-50px;">
	    					<h4 class="card-title text-center"><?php echo $admin_name ?></h4>
	    					<p class="card-text text-center">STATIONARY MANAGEMENT ADMINISTRATOR</p>

	    					<div class="d-flex p-3 ml-4">
	    					  <div class="p-4 text-center ml-5">Age<h6 class="py-3"><b><?php echo $admin_age ?></b></h6></div>
	    					  <div class="p-4 text-center">Sex<h6 class="py-3"><b><?php echo $admin_gender ?></b></h6></div>
	    					  <div class="p-4 text-center">Email<h6 class="py-3"><b><?php echo $admin_email ?></b></h6></div>
	    					</div>

	    					<hr>
                                 <div class="row">
                                 	<div class="col-md-6">
				    					<h4 class="px-3 py-4">ADDRESS</h4>
				    					<p><?php echo $admin_address; ?></p>
				    					
			    				    </div>
			    				    <div class="col-md-6">
				    					<h4 class="px-3 py-4 text-right">Contact</h4>
				    					<p class="text-right">Phone: <?php echo $admin_phone ?></p>
			    				    </div>
			    			</div>
	    				</div>
    				</div>			
    			</div>
    		</div>
    	</div>
    </div>


    <div class="modal fade" id="edit-profile">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h4 class="modal-title"><?php echo "Hi,".$row['Admin_name']; ?></h4>
    				<button class="close" data-dismiss="modal">&times;</button>
    			</div>

    			<div class="modal-body">
    				<h5 class="text-center">Edit Your Profile</h5>

    				<form action="edit-admin-profile.php" method="POST">
    					<div class="form-group">
    						<label for="">Name</label>
    						<input type="text" class="form-control" name="admin_name" id="admin_name" value="<?php echo $admin_name; ?>">
    					</div>

    					<div class="form-group">
    						<label for="">Email</label>
    						<input type="text" class="form-control" name="admin_email" id="admin_name" value=<?php echo $admin_email; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Password</label>
    						<input type="text" class="form-control" name="admin_password" id="admin_name" value=<?php echo $admin_password; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Phone</label>
    						<input type="text" class="form-control" name="admin_phone" id="admin_name" value=<?php echo $admin_phone; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Address</label>
    						<input type="text" class="form-control" name="admin_address" id="admin_name" value="<?php echo $admin_address; ?>">
    					</div>
    				

    			</div>

    			 <div class="modal-footer">
    			 	<input type="submit" name="" id="update" value="Save changes" class="btn btn-primary btn-sm">
    				<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
    			 </div>
    			</form>
    		</div>
    	</div>
    </div>


    <!--------Catch the Value From Moal-------->




  




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
