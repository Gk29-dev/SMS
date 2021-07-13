<?php

 session_start();

?>

<?php 

$db_host='localhost';
  $db_user='root';
  $db_password='';
  $db_name="admin";

  $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

 if($conn){

         $token=$_SESSION['Token_value'];

         $name=$_POST['admin_name'];
         $email=$_POST['admin_email'];
         $password=$_POST['admin_password'];
         $phone=$_POST['admin_phone'];
         $address=$_POST['admin_address'];

		 $sql="UPDATE admin_info SET Admin_name='$name' , Admin_email= '$email' ,Admin_password='$password' , Admin_phone=$phone , Admin_address='$address' WHERE Token= $token "; 

		 $result=mysqli_query($conn,$sql);
		 if($result){
		 	echo "<script> location.href='admin-profile.php' </script>";
		 }
		 else{
		 	echo "<script> alert('Error'); </script>";
		 }

 }

 ?>

