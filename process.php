<?php
include("connection.php");
if(isset($_POST['btn']));
{
    $name=$_POST['name'];
    $em=$_POST['em'];
    $result=mysqli_query($con,"insert into form values('$name','$em')");
    if($result){
      echo "register success";  
    }
    else{
        echo"failed";
    }
}
?>