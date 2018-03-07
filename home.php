<?php
session_start();
include "connection.php";

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

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
   	  <a class="navbar-brand" href="#">Online Address Book</a>

      <ul class="nav navbar-nav navbar-right">


    <li> <a href="contactTest.php">Add Contact</a> </li>
    <li> <a href="searchTest.php">Search</a></li>
    <li> <a href="Logout.php">Sign out</a></li>
    <!-- <li> <a href="#">About Us</a></li> -->

    </ul>
    </div>

</div>


  <!--Starting body section -->
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Contact Information</h1>
                  
                  </div>
              </div> 





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
                                <th>Edit</th>
                                <th>Delete</th> 
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
<td> <a href="detailsinfo.php?id=<?php echo $data['id'];?>">details</a></td>
<td> <a href="EditContact.php?id=<?php echo $data['id'];?>">edit</a></td>
<td> <a href="DeleteContact.php?id=<?php echo $data['id'];?>">delete</a></td>

 
</tr>

<?php

}

?>

                            </tbody>
                        </table>


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
