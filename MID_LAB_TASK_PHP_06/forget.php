<?php

if (isset($_POST['submit']))
 {
	$new_pass=$_POST['new_password'];
	$cur_password=$_POST['current_password'];
	$ret_pass=$_POST['retype_password']; 

	if ($new_pass ==$ret_pass)
	{

if ($new_pass !=$cur_password)
	{
		echo "Password Chanaged";
		}

		else
		{
			echo "please enter a unique password";
		}
		echo "<br>";
		//echo "done";

		}

		else
		{
			echo "<br>";
			echo "please enter a same password as new password";
		}
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			<table>	
			<tr>
				<tr>
				<td>
			<label >Current password</label></td>
			<td><input type="password" name="current_password" value="" required="true"></td>
		</tr>
		<tr>
			<td>
			
			<label style="color: green ">New Password</label>
		</td>
		<td>
			<input type="password" name="new_password" value="" required="">
		</td>
	</tr>
	<tr>
		<td>
			
			<label style="color: red">Retype New Password</label></td>
			<td>
			<input type="password" name="retype_password" value="" required=""></td>
		</tr>
			
			
		<tr>
		<td>	
			<input type="submit" name="submit"></td>
			<td>
			<a href="#">Close</a></td>
		</tr>
	</tr>
</table>


		</fieldset>
	</form>

</body>
</html>