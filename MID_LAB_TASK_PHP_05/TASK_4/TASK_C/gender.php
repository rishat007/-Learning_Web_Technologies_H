<?php
	
	
	if(isset($_POST['submit']))
	{
		$gender		= $_POST['gender'];
		if($gender == ""){
			echo "null submission";
		}else{
			echo "gender=".$gender;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Gender </title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Gender</legend>
		    
		      <input type="radio" name="gender" value=""> male
  		        <input type="radio" name="gender" value=""> female
  		        <input type="radio" name="gender" value=""> other <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>