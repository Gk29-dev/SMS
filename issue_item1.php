<?php



$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){

    
    $e_id=$_REQUEST['e_id'];
    $e_name=$_REQUEST['e_name'];
    $item_name=$_REQUEST['item_name'];
    $item_id=$_REQUEST['item_id'];
    $qty=$_REQUEST['qty'];
    $depart=$_REQUEST['depart'];
    $issue_date=$_REQUEST['issue_date'];

    $sql="INSERT INTO issue_item(e_id,e_name,item_name,item_id,qty,depart,issue_date) VALUES($e_id,'{$e_name}','{$item_name}',$item_id,$qty,'{$depart}','{$issue_date}')";
    $result=mysqli_query($conn,$sql);
    if($result){

        //Update the Item in Add_item Table
        $sql1="SELECT item_qty FROM add_item WHERE item_id={$item_id}";
        $result1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $item_qty=$row['item_qty'];

       $sql2="UPDATE add_item SET item_qty={$item_qty}-{$qty}";
       $result2=mysqli_query($conn,$sql2);
        echo 1;
     

    }
    else{
        echo 0;
    }
}
