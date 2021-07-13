<?php

$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){
    $month=$_POST['month_name'];
    $output="";

    $sql1="SELECT issue_date FROM issue_item";
    $result1=mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_assoc($result1)){
         $abc=explode("-", $row1['issue_date']);
         $year=$abc[0];
         $month1=$abc[1];
         $date=$abc[2];
         $year_month=$abc[0]."-".$abc[1];
    }

    if($month==$year_month){
        $sql="SELECT * FROM issue_item WHERE qty= (SELECT MIN(qty) FROM issue_item WHERE item_name='paper')";
        $result=mysqli_query($conn,$sql);
        
    
        if(mysqli_num_rows($result)>0){
            $output.= '<table class="table table-bordered table-striped text-center">
                        <thead class="bg-primary text-white">
                         <tr>
                            <td>Empoyee ID</td>
                            <td> Empoyee Name</td>
                            <td>Item ID</td>
                            <td>Item Name</td>
                            <td>Quantity</td>
                            <td>Department</td>
                         </tr>
                        </thead> ';
            while($row=mysqli_fetch_assoc($result)){
                $output.='<tr>
                            <td>'.$row['e_id'].'</td>
                            <td>'.$row['e_name'].'</td>
                            <td>'.$row['item_id'].'</td>
                            <td>'.$row['item_name'].'</td>
                            <td>'.$row['qty'].'</td>
                            <td>'.$row['depart'].'</td>
                            
                       </tr>';
              
            }
            $output.="</table>";
        }
    
       
        echo $output;
    
    
    }
    else{
        echo $output;
    }
    

}
