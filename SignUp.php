<?php
	session_start();
	include 'connection.php';


	if(isset($_POST['register_btn']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];

		$sql="SELECT * from register where user_name='$username'";

		$result=mysqli_query($con,$sql);

		var_dump($result);

		if(mysqli_num_rows($result)>0)
		{
			echo "<script> alert('Username are exist!')</script>";
			header('location:index.php');
			die();
		}

		if($password==$confirm)
		{
			$password=md5($password);
			$sql="INSERT INTO register (user_name,email,password) VALUES('$username','$email','$password')";
			mysqli_query($con,$sql);
			echo "<script> alert('Now you are logged in!')</script>";
			header('location:login.php');
		}
		else{
	
			echo "<script> alert('Two Password are not match!')</script>";
		}
	}


?>

<!DOCTYPE html>
<html lang="en">

<!--Starting head section -->
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="style.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Register form</title>
	</head>

	<!--End of the head Section-->


	<body>  

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="home.php">Online Address Book</a>

      <ul class="nav navbar-nav navbar-right">

    <li class="active"> <a href="register.php">Sign up</a> </li>
    <li> <a href="login.php">Sign in</a></li>
    <!-- <li> <a href="#">About Us</a></li> -->

    </ul>
    </div>

</div>


	<!--Starting body section -->
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Please Sign Up</h1>
	               		<hr />
	               	</div>
	            </div> 

				<div class="main-login main-center">

					<!--Starting form section in head-->
					<form class="form-horizontal" name="form1" method="post" action="SignUp.php" >
					
					
					<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
						<!--	<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button> -->
						<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="register_btn" value="Register">
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