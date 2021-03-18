<?php
	$title= "Home Page";
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Owner Home</title>
</head>
<body>
	<form action="login.php" method="POST">
	<table  align="center" width="790px">
		<tr>
			<td>

	<table border="1" align="center" width="790px">
		<tr>
			<td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">
<table  align="right"  >
	<tr>
		<td>
	<a href="sign_in_owner.php">Back</a>
</td>

</td>
</tr>
	</table>
</td>
</tr>
<tr>
	<td>
	<table align="center">
		<tr>
	
			</td>
		</tr>

		<tr>
			<td colspan="2"  height="190px">
		<form method="POST">
		<fieldset>
			<legend><h3>Change_Password</h3></legend>
			<label > Current Password &nbsp &nbsp:</label>
			<input type="Password" name="oldPassword" value="" required="true">
			<br>
			<br>
			<label>New Password &nbsp &nbsp &nbsp &nbsp:</label>
			<input type="password" name="newpassword" value="" required="true">
			<br>
			<label>Confirm Password &nbsp:</label>
			<input type="password" name="newpassword" value="" required="true">
			<br>
			<br>
			<form action="#"><input type="submit" name="submit">
			<a href="forgot_pass.php">Forgot Password</a>

</form>
		</fieldset>
	</form>
</td>
</tr>
</table>
<br>
			</td>
		</tr>

         <tr>

			<td colspan="2" align="left" height="30px">
				<b>Contuct us :</b>
				<table align="right">
				<tr>
					<td>
					<a href="https://www.facebook.com/amin.rishat"> <img src="../pic/facebook1.png" height="30px" &nbsp> </a>
					</td>
					<td>
					<a href="https://mail.google.com/mail/u/1/#inbox"><img src="../pic/gmail.png"height="15px" &nbsp></a>
					</td>
					<td>
					<a href="https://twitter.com/RishatAmin"> <img src="../pic/twitter.png" height="20px"> </a>
					</td>
				</tr>

			</td>
			
		</tr>

	</table>
</td>
</tr>
</table>
</form>

</body>
</html>