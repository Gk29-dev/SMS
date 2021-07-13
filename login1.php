<?php
   session_start();

  $db_host='localhost';
  $db_user='root';
  $db_password='';
  $db_name="admin";

  $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);



  if(isset($_REQUEST['email']) || isset($_REQUEST['Password'])){

  	$email=$_REQUEST['email'];
  	$password=$_REQUEST['Password'];

  	$sql="SELECT * FROM admin_info Where Admin_email='$email'";
  	$result=mysqli_query($conn,$sql);
  	$row=mysqli_fetch_assoc($result);
  	if($row['Admin_email']==$email && $row['Admin_password']==$password){

  		$_SESSION['Admin_name']=$row['Admin_name'];
      $_SESSION['Admin_email']=$row['Admin_email'];
      $_SESSION['Token_value']=$row['Token'];
       echo "<script> location.href='admin-dashboard.php' </script>";
  	}
  	else{
  		echo "<script> alert('Email/Password is Incorrect'); </script>";
  		echo "<script> location.href='index.php' </script>";
  	}
  }
  else{
  	echo "<script> location.href='login-page.php' </script>";
  }
