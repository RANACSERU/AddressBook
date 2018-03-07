<?php
session_start();
include "connection.php";


 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('FullName', 'NickName', 'Address', 'Email', 'PhoneNo','Website'));  

		$user_id=$_SESSION['user_id'];
		//$record="SELECT * FROM `addressTest` ";

      $query = "SELECT FullName,NickName,Address,Email,PhoneNo,Website from addressTest where user_id='$user_id'";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
?>
