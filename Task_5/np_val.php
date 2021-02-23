<?php
if (isset($_POST['submit']))
 {
	$pass=$_POST['password'];

	if (strlen($pass>=8))
	{
		for($i=0;$i<=strlen($pass);$i++){
		if(($i="@")||($i="#")||($i="$")||($i="%"))
		
		echo "Stong password";
	}
	}
	# code...

		# code...
	
	else {
		echo "Weak password";
		# code...
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend>
			<label>User Naame:</label>
			<input type="text" name="username">
			<br>
			<br>

			<label>Password &nbsp &nbsp:</label>
			<input type="password" name="password">
			<br>
			<input type="checkbox" ><span>Remember Me</span>
			<br>
			<br>
			<input type="submit" name="submit">
			<a href="forget.php">Forgot Password?</a>


		</fieldset>
	</form>

</body>
</html>
