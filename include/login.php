<?php
	session_start();	//Starting session
	$error = "";
	if (isset($_POST['submit']))
	{
		if (empty($_POST['username']) || empty($_POST['password']))
		{
			$error = "Username or password is invalid";
		}
		else
		{
			//Define username and password
			$username=$_POST['username'];
			$password=$_POST['password'];
			//Establish connection to database
			$link = mysqli_connect("192.168.1.106", "catus", "catus1234", "catus") or die("Error:  ".mysqli_error($link));
			//Protect from MySQL injection attack
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($link, $username);
			$password = mysqli_real_escape_string($link, $password);
			//Query database 
			$results = mysqli_query($link, "select * from users where username='$username' and password='$password'") or die("Error in the consult:  ".mysqli_error($link));
			$rows = mysqli_num_rows($results);
			if ($rows==1)
			{
				$_SESSION['login_user']=$username;	//Initialize session
				header("location:  home.php");	//Redirect to home page
			}
			else
			{
				$error = "Username or password is invalid";
			}
			mysqli_close($link); 	//Close database connection
		}
	}
?>