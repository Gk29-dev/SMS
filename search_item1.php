<?php



$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){
    $item_name=$_POST['item_name'];
    $output="";

    $sql="SELECT * FROM add_item WHERE item_name='{$item_name}' ";
    $result=mysqli_query($conn,$sql);
    

    if(mysqli_num_rows($result)>0){
        $output.= '<table class="table table-bordered table-striped text-center">
                    <thead class="bg-primary text-white">
                     <tr>
                       <td>ID</td>
                       <td>Item Name</td>
                       <td>Quantity</td>
                       <td>Entry Date</td>
                     </tr>
                    </thead> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.='<tr>
                      <td>'.$row['item_id'].'</td>
                      <td>'.$row['item_name'].'</td>
                      <td>'.$row['item_qty'].'</td>
                      <td>'.$row['date_entry'].'</td>
                   </tr>';
          
        }
        $output.="</table>";
    }

   
    echo $output;



}
