<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<title>Admin Login Page</title>
</head>

<body>
                                        <button onclick="document.location='../Homepage.html'"> Homepage </button>
	<form action="validate.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox-login">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox-login">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button-login" type="submit"
					name="login" value="Sign In">
		</div>

	</form>
    
</body>

</html>
