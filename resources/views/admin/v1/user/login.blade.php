<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<meta id="login_url" content="{{route('LoginAction')}}"/>
	<meta id="dashboard_view_url" content="{{route('Dashboard')}}"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="card bg-light mt-5">
			<article class="card-body" style="padding: 0px 270px;">
				<h4 class="card-title mt-3 text-center">Register Account</h4>
				<p>
					<a style="background-color: #42AEEC;color: #fff;" href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
					<a style="background-color: #405D9D;color: #fff;" href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
						facebook</a>
				</p>
				<p class="divider-text" style="position: relative;text-align: center;margin-top: 15px;margin-bottom: 15px;">
        			<span class="bg-light" style="padding: 7px;font-size: 12px;position: relative;z-index: 2;">OR</span>
    			</p>
				<!-- <form  method="post" action="">
                    @csrf -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="email" id="email" class="form-control" placeholder="Email address" type="email">
					</div>
					<div class="inline-block">
                		<p class="text-danger" id="login_message_email"></p>
            		</div>
					 <!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password" id="password" class="form-control" placeholder="Password" type="password">
					</div> 
					<div class="inline-block">
                		<p class="text-danger" id="login_message_password"></p>
            		</div>
					<!-- form-group// -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('ForgotPassword')}}"> Forgot Password</a>
                    </div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block"
                        onclick="adminUserLogin();">Login</button>
					</div> <!-- form-group// -->
					<p class="text-center">Do not have an account? <a href="{{ route('Register')}}">Register</a> </p>
				<!-- </form> -->
			</article>
		</div>
	</div>
	<script src="/js/admin-user.login.js"></script>
</body>

</html>