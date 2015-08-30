<?php 
	include __DIR__ . '/include/login.php';  // Includes Login Script
	
	if(isset($_SESSION['login_user']))
	{
		header("location: home.php");
	}
?>

<html>
	<head>
		<title>Catus - Chore Chart</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<form class="form-signin" action="" method="post">
				<h2 class="form-signin-heading">Please Sign In</h2>
				<label for="username" class="sr-only">Username: </label>
				<input id="name" name="username" class="form-control"placeholder="Enter username" type="text" required="true">
				<label for="password" class="sr-only">Password: </label>
				<input id="password" name="password" class="form-control" placeholder="Enter password" type="password" required="true">
				<button class="btn btn-lg btn-primary btn-block" type="submit" value=" Login " name="submit">Sign In</button>
				<span><?php echo $error; ?></span>
				</form>
		</div>
	</body>
</html>

