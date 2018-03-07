<?php
include "connection.php";

$_SESSION['id']=$_GET['id'];
echo $id=$_SESSION['id'];

$query="SELECT * from address where id='$id'";


$m=mysqli_query($con,$query);


$check=mysqli_fetch_assoc($m);


//  if(isset($_POST['update']))
// {

// $FullName=$_POST['fullname'];
// $Address=$_POST['address'];
// $PhoneNo=$_POST['phone'];
// $Website=$_POST['website'];
// $NickName=$_POST['nickname'];
// $Email=$_POST['email'];

// echo $id;

// $sql="UPDATE addressTest SET FullName='$FullName',NickName='$NickName',Email='$Email',Address='$Address',PhoneNo='$PhoneNo',Website='$Website' WHERE id='$id'"; //NOT TO FIND ID ERROR IN $id


// $edit=mysqli_query($con,$sql);

// if($edit)
// {
// //	header("location:home.php");
// }
// else
// {
// 	echo "error occur";
// }

// }




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
   	  <a class="navbar-brand" href="index.php">Online Address Book</a>

      <ul class="nav navbar-nav navbar-right">


    <li> <a href="home.php">Back</a> </li>
    <li> <a href="Logout.php">Logout</a></li>
    <!-- <li> <a href="#">About Us</a></li> -->

    </ul>
    </div>

</div>


  <!--Starting body section -->
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Please Edit your Information</h1>
                    <hr />
                  </div>
              </div> 

        <div class="main-login main-center">

          <!--Starting form section in head-->
          <form class="form-horizontal" method="POST" action='allPost.php' >
          
          
          <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">FullName</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="fullname" value="<?php echo $check['name'];?>" placeholder="Enter your FullName"/>
                </div>
              </div>
            </div>

            
            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Your Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" value="<?php echo $check['email'];?>"  placeholder="Enter your Email"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Address" class="cols-sm-2 control-label">Your Address</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="address" value="<?php echo $check['Address'];?>"  placeholder="Enter your Address"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="cols-sm-2 control-label">Your Phone no</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone" value="<?php echo $check['phone'];?>"  placeholder="Enter your phone no"/>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="phone" class="cols-sm-2 control-label">Your Website</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="website" value="<?php echo $check['website'];?>"  placeholder="Enter your website no"/>
                </div>
              </div>
            </div>


            <input type="hidden" name="id" value='<?php echo $id ;?>' >
            <div class="form-group ">
            <!--  <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button> -->
            <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="update" >

            </div>
            <!--
            <div class="login-register">
                    <a href="index.php" class="btn btn-info">Login</a>
                 </div>
                 -->
          </form>

            <!--Ending form section in head-->
        </div>
      </div>
    </div>
            <hr>


           <!---Footer header is started-->
           <div class="copyright">
           		<div class="container">

           			<div class="col-md-6">
           			  <p> @ 2017 -ALL Rights with EASIR ARAFAT</p>
           			  </div>


           			<div class="col-md-6">

           				<ul class="bottom_ul">
           					<li> <a href="#">FACEBOOK</a></li>
           					<li> <a href="#">TWITER</a></li>
           					<!-- <li> <a href="#">YOUTUBE</a><li> -->
           					<!-- <li> <a href="#">BLOG</a></li> -->
           					<li> <a href="#">GMAIL</a></li>
           					<!-- <li> <a href="#">Site Map</a></li> -->

           				</ul>

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
