<?php 


$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

$e_id=$_POST['e_id'];
$output="";
$sql1="SELECT * FROM staff_registration WHERE id= {$e_id} ";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){

     while($row=mysqli_fetch_assoc($result1)){
       $emp_name= $row["emp_name"];
      $depart= $row['department'];

      $abc=array($emp_name,$depart);
     
     }
    echo $abc[0];
}



?>