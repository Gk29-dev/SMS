<?php

$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){


    $item_id=$_POST['item_id'];
    $item_name=$_POST['item_name'];
    $item_qty=$_POST['item_qty'];
    $date_of_entry=$_POST['date_entry'];


        

            $sql="INSERT INTO add_item(item_id, item_name, item_qty, date_entry) VALUES ({$item_id},'{$item_name}',{$item_qty},'{$date_of_entry}')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo 1;
            }
            else{
                echo 0;
            } 

}

?>