<?php
	
	
	if(isset($_POST['submit']))
	{
		$genderr = $_POST['gender'];
		if($gender == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Gender</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender"> male
  		        <input type="radio" name="gender"> female
  		        <input type="radio" name="gender"> other <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>