<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reset Password</title>
	<meta id="reset_password_url" content="{{route('ResetPasswordAction')}}"/>
	<meta id="login_url" content="{{route('Login')}}"/>
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
				<h4 class="card-title mt-3 text-center">Reset Password</h4>
				<!-- <form  method="post" action=""> -->
				<p class="code-login-box-msg" id="reset-password-box-msg"></p>
				@csrf
					<div class="form-group input-group">
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="email" id="email" class="form-control" placeholder="Email address" type="email">
					</div>
					<div class="inline-block">
                		<p class="text-danger" id="reset_message_email"></p>
            		</div><!-- form-group// -->
                    <div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="code" id="code" class="form-control" placeholder="Code" type="password">
					</div> 
					<div class="inline-block">
                		<p class="text-danger" id="reset_message_code"></p>
            		</div><!-- form-group// -->
					<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block"
                        onclick="adminUserResetPassword();">Confirm</button>
					</div> <!-- form-group// -->
					<p class="text-center">Have an account? <a href="{{ route('Login')}}">Log In</a> </p>
				<!-- </form> -->
			</article>
		</div>
	</div>
	<script src="/js/admin-user.resetpassword.js"></script>
</body>

</html>