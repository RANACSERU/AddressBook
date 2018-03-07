<?php
include "connection.php";

?>



<?php


 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	           $sql = "INSERT into employeeinfo (emp_id,firstname,lastname,email,reg_date) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"home.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"home.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }

function get_all_records(){
		               $user_id=$_SESSION['user_id'];
    //$record="SELECT * FROM `addressTest` ";

      $query = "SELECT FullName,NickName,Address,Email,PhoneNo,Website from addressTest where user_id='$user_id'";  
       $result = mysqli_query($con, $query);  
 
 
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>Full Name</th> 
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                        </tr></thead><tbody>";
 
 
     while($row = mysqli_fetch_assoc($result)) {
 
         echo "<tr><td>" . $row['FullName']."</td>
                   <td>" . $row['PhoneNo']."</td>
                   <td>" . $row['Address']."</td>
                   
                   <td>" . $row['Email']."</td></tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
	}


}


 ?>

 