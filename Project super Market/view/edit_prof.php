<?php
	$title= "Home Page";
	include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<form method="post" action="loginCheck.php"> 
	<table border="1" align="center">
		<tr>
			<td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">

<table  align="right"  >
	<tr>
		<td>
			<label>Signed_in_as</label>
	<a href="#">Rishat</a>
</td>
<td>
	<div>
	</div>
	
</td>

</td>
</tr>
	</table>
</td>
</tr>
			</td>
		</tr>

		<tr>
			<td>
				<label align="center"><b>Account </b></label>
<hr>
				<table>	
				<tr>
					<td>
				<ul>
					<ol>
	
	<li><a href="sign_in_owner.php">Home&nbspPage</a></li>
	<li><a href="viewprof.php">View&nbspProfile</a></li>
	<li><a href="edit_prof.php">Edit&nbspProfile</a></li>
	<li><a href="reg_form.php">Add&nbspClient</a></li>

	<li><a href="client_info.php">Client&nbspInformation</a></li>
	<li><a href="change_pass.php">Change&nbspPassword</a></li>
	
	
</ol>
</ul>
</td>



</table>

		
			<td>
				<b>Welcome Sir!</b> <table align="right"><table>
					<table border="1" align="center" width="790px">
						<tr>
							
<td>
	<div id="main_content">
		<table align="center"  width="30%">
			<tr>
				<td>
		
		<form method="post" action=""  >
			<fieldset>
				<legend>Update Profile</legend>
				<table align="center">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="Rishat"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="12345"> </td>
					</tr>
				
				<tr>
						<td>Phone</td>
						<td><input type="number" name="number" value="01628169748"> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="samiaulamin@gmail.com"> </td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="area" name="Address" value="Uttara , Dhaka Bangladesh"></td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td align="right">
							<br>
							<input type="submit" name="signup" value="Update">
						</td>


					</tr>
				</table>
			</fieldset>
		</form>
	</div>

</td>
</tr>
</table>


 

     </td>

 </td>
</td>
						

							

							
						</tr>
				</table>
			</td>

              

         <tr>
			<td colspan="2" height="30px">
				Since 2021	
				<table align="right">
					<td>
			<a href="../controller/logout.php">Sign_out</a>
			</td>

				
		</tr>
		


	</table>

</body>
</html>
