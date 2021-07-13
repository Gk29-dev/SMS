<?php

$db_host='localhost';
$db_user='root';
$db_password='';
$db_name="admin";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn){
    $department=$_POST['depart_name'];
    $output="";

    $sql="SELECT * FROM staff_registration WHERE department='{$department}' ";
    $result=mysqli_query($conn,$sql);
    

    if(mysqli_num_rows($result)>0){
        $output.= '<table class="table table-bordered table-striped text-center">
                    <thead class="bg-primary text-white">
                     <tr>
                       <td>ID</td>
                       <td>Name</td>
                       <td>E-Mail Address</td>
                       <td>Address</td>
                       <td>Department Name</td>
                       <td>Date of Birth</td>
                     </tr>
                    </thead> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.='<tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['emp_name'].'</td>
                      <td>'.$row['mail'].'</td>
                      <td>'.$row['addr'].'</td>
                      <td>'.$row['department'].'</td>
                      <td>'.$row['date_birth'].'</td>
                   </tr>';
          
        }
        $output.="</table>";
    }

   
    echo $output;



}
