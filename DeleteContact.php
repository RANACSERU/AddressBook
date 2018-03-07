<?php

include "connection.php";

 $id=$_GET['id'];

$del="DELETE FROM address where id='$id'";

$result=mysqli_query($con,$del);
$error=false;
  
  
  if (!$error) {
    if($result==1)
    {
      
        echo "<script> alert('Data delete Successfully!')</script>";
    } 
    else {
            echo "<script> alert('Some problem occur!')</script>";
    }
}

header("location:home.php");


?>