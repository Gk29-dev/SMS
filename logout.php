<?php

session_start();

if(isset($_SESSION['Admin_name'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='login-page.php?msg=You Have Been Successfully Logout' </script>";
}
else{
    echo "<script> location.href='index.php' </script>";
}

 ?>