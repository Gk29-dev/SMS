<?php

$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){

    $item_name=$_POST['item_name'];
    $output="";
    $sql="SELECT item_id from item WHERE item_name='{$item_name}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $output.=$row['item_id'];
        }
    }
    echo $output;
}
?>    