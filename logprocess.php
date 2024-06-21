<?php
include("logconnection.php");
if(isset($_POST['log']));
{
    $em=$_POST['em'];
    $pass=$_POST['pass'];
    $result=mysqli_query($con,"insert into login values('$em','$pass')");
    if($result){
      echo "register success";  
    }
    else{
        echo"failed";
    }
}
?>