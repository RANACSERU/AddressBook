<?php
session_start();
include 'connection.php';

if(isset($_POST['login_btn']))
{

    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM register WHERE user_name='$username' AND password='$password'";

    $result=mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($result);
     echo $num=mysqli_num_rows($result);
    if(mysqli_num_rows($result))
    {
      $id= $row['id'];

        $_SESSION['user_id']=$id;
        echo "<script> alert('Login Successfully!')</script>";
        header("location:home.php");
        }
        else{
    
            echo "<script> alert('Please check your username and password!')</script>";
        }
}



?>

<!DOCTYPE html>

<html tag="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login frame</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="login_style.css"/>

</head>

<body>


      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">Online Address Book</a>

      <ul class="nav navbar-nav navbar-right">

    <li> <a href="index.php">Back</a> </li>
    <li> <a href="SignUp.php">Sign up</a> </li>
    <li class="active"> <a href="login.php">Sign in</a></li>
   <!--  <li> <a href="#">About Us</a></li>
 -->
    </ul>
    </div>

</div>
<hr>

	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <!--   <img id="profile-img" class="profile-img-card" src="images.jpg" />-->
			<img src="login.png" class="img-responsive img-circle"/>
            <p id="profile-name" class="profile-name-card"></p>
              <form name="form2" method="post" action="login.php" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" >
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <input type="submit" name="login_btn" class="btn btn-lg btn-primary btn-block btn-signin" value="Sign in">

            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
	
	
	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="login_script.js"></script>

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

</body>

</html>





