<?php


$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$id=$_POST['e_id'];
$emp_name=$_POST['emp_name'];
$mail=$_POST['mail'];
$addr=$_POST['addr'];
$department=$_POST['depart'];
$date_birth=$_POST['emp_date'];

$sql="INSERT INTO staff_registration(id, emp_name, mail, addr, department, date_birth) VALUES ($id, '{$emp_name}', '{$mail}', '{$addr}', '{$department}', '{$date_birth}')";
$result=mysqli_query($conn,$sql);
if($result){
    echo 1;
}
else{
    echo 0;
}
