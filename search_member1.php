<?php



$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){
    $e_id=$_POST['e_id'];
    $e_name=$_POST['e_name'];
    $output="";

    $sql="SELECT * FROM issue_item WHERE e_id={$e_id} ";
    $result=mysqli_query($conn,$sql);
    

    if(mysqli_num_rows($result)>0){
        $output.= '<table class="table table-bordered table-striped text-center">
                    <thead class="bg-primary text-white">
                     <tr>
                       <td>Employee ID</td>
                       <td>Employee Name</td>
                       <td>Issue Item Name</td>
                       <td>Item ID</td>
                       <td>Item Qunatity</td>
                       <td>Department</td>
                       <td>Issue Date</td>
                     </tr>
                    </thead> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.='<tr>
                      <td>'.$row['e_id'].'</td>
                      <td>'.$row['e_name'].'</td>
                      <td>'.$row['item_name'].'</td>
                      <td>'.$row['item_id'].'</td>
                      <td>'.$row['qty'].'</td>
                      <td>'.$row['depart'].'</td>
                      <td>'.$row['issue_date'].'</td>
                   </tr>';
          
        }
        $output.="</table>";
    }

   
    echo $output;



}
?>