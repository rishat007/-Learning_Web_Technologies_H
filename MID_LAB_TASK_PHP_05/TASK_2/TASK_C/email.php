<?php
	
	
	if(isset($_POST['submit']))
	{
		$email 		= $_POST['email'];
		if($email == ""){
			echo "null submission";
		}else{
			echo "email=".$email;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="text" name="email" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>