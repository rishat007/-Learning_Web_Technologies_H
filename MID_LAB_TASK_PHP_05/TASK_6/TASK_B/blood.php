<?php

    if(isset($_POST['submit']))
    {
    if(!empty($_POST['select']))
     {
        $selected = $_POST['select'];
        echo 'You have chosen: ';
    } 
    else 
    {
        echo 'Please select the value.';
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="next.php" method="POST">
	
<label>Blood Group</label>
	<select name="select">
	<option>A+</option>
	<option>B+</option>
	<option>AB</option>
	<option>A-</option>
	<option>B-</option>
	<option>AB+</option>
</select>
<input type="submit" name="submit" value="Choose option">

</form>

</body>
</html>