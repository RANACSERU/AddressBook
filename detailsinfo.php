<?php
session_start();
include "connection.php";
include "function.php";

$id=$_GET['id'];

$s="select * from address where id='$id'";

$m=mysqli_query($con,$s);

$check=mysqli_fetch_array($m);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Address Book Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">

   <link href="style.css" rel="stylesheet">
   <link href="mystylee.css" rel="stylesheet">


    </head>







 <body>

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="home.php"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
   	  <a class="navbar-brand" href="home.php">Online Address Book</a>

      <ul class="nav navbar-nav navbar-right">


    <li> <a href="home.php">Back</a> </li>
    <li> <a href="Logout.php">Logout</a></li>
    <!-- <li> <a href="#">About Us</a></li> -->

    </ul>
    </div>

</div>
    
    <hr>
    <hr>

<!--Import infomration-->

<div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="function.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>Form Name</legend>
 
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
 
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading..." disabled>Import</button>
                            </div>
                        </div>
 
                    </fieldset>
                </form>
 
            </div>
            <?php
               //get_all_records();   
            ?>
        </div>

<!--End of section-->


      <div class="container">
 
              <div class="row">
                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Website</th> 
                            </tr>
                            </thead>

                            <tbody>


                              <?php

$user_id=$_SESSION['user_id'];
$record="SELECT * FROM `address` where userId='$user_id'";

$fetch=mysqli_query($con,$record);

while($data=mysqli_fetch_array($fetch))
{

?>
<tr>


<td>  <?php echo $data['name']; ?> </td>
<td>  <?php echo $data['phone']; ?> </td>
<td>  <?php echo $data['Address']; ?> </td>
<td>  <?php echo $data['email']; ?> </td>
<td>  <?php echo $data['website']; ?> </td>


 
</tr>

<?php

}

?>

                            </tbody>
                        </table>


 <div>
            <form class="form-horizontal" action="exportTest.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="Export To Excel"/>
                            </div>
                   </div>                    
            </form>           
 </div>

           			</div>

           		</div>
           	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
      
      $('.cros').click(function(){
        $(this).parent('.e-message').slideUp();
      });
      $('.toggle').click(function(){
        $(this).text(function(i, v){
           return v === 'Back' ? 'Sign Up' : 'Back'
        });
        $('.login').slideToggle();
        $('.register').slideToggle();
        $('#top-text').text(function(l, m){
          return m === 'Need account singup !' ? 'Login your Account' : 'Need account singup !'
        });
        $('title').text(function(f, h){
          return h === 'Need account singup !' ? 'Login your Account' : 'Need account singup !'
        });
      
        
       
        return false;
      });
      $('.forgot-pass p').click(function(){
        $('.for-pass').slideToggle();
      }); 
    });

  </script>
  </body> <!--Ending body section -->
</html>
