<!DOCTYPE html>
<html>
<head>
	<title>Changing password</title>
</head>
<body>
	<table>
		<tr>
			<td align="center">
		<table>
			<tr>
				<td>
	
              <form method="POST">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			<table>	
			<tr>
				<td>
			<label >Current password</label></td>
			</tr>
			<tr>
			<td><input type="password" name="current_password" value="" required="true"></td>
		</tr>
		<tr>
			<td>
			
			<label>New Password</label>
		</td>
		</tr>
		<tr>
		<td>
			<input type="password" name="new_password" value="" required="">
		</td>
	</tr>
	<tr>
		<td>
			
			<label>Retype New Password</label></td>
			<td></tr>
				<tr>
			<input type="password" name="retype_password" value="" required=""></td>
		</tr>
			
			
		<tr>
		<td>	
			<input type="submit" name="submit" value="Save"></td>
			<td>	
			<td align="center"><a href="login.php">Home</a>
		</tr>

	</table>

</body>
</html>