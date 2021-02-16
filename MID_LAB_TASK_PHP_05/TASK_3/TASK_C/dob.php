<?php
	
	
	if(isset($_POST['submit']))
	{
		$date		= $_POST['date'];
		if($date == ""){
			echo "null submission";
		}else{
			echo "Date=".$date;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Date of Birth</legend>
		      <input type="date" name="date" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>