<?php
$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){

    $item_name=$_POST['item_name'];
    $qty=$_POST['qty'];
    $output="";

	$sql="SELECT item_qty FROM add_item WHERE item_name='{$item_name}'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
	    if($qty>$row['item_qty']){
            $output.="The Quantity Should Be Less Than Or Equal to". $row['item_qty'];
        }
	}

	echo $output;
}
?>