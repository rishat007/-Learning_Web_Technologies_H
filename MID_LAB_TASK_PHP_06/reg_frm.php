<?php

if (isset($_POST['submit']))
 {
	//$user=$_POST['username'];
	$password=$_POST['password'];
	$co_pass=$_POST['con_pass'];

	if (strlen($password)>8 || $password==$con_pass)
	{
		for ($i=0; $i <strlen($password) ; $i++) 
		{ 
			if(($i="@")||($i="#")||($i="$")||($i="%"))
			{
				# code...
               echo "stong password";
			}
			# code...
		}

	}
	
	else {
		echo "invalid password";
		# code...
	}

 // $reng=range(3, 10);
	// if (strlen($user)=$reng)
	// {
	// 	for ($i=0; $i <strlen($user) ; $i++) 
	// 	{ 
	// 		if(($i="a-z")||($i="A-Z")||($i="1-99")||($i="_"))

	// 		{
	// 			# code...
 //               echo "stong user";
	// 		}
	// 		# code...
	// 	}
		
	// }
	
	// else {
	// 	echo "invalid user";
	// 	# code...
	// }


}




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>
						<tr>
						<td>Name:</td>
						<td><input type="text" name="name">
						</td>
                         </tr>

                         <tr>
                         	<td>Email</td>
                         	<td><input type="email" name="email"></td>
                         </tr>

                         <tr>
                         	<td>User Name</td>
                         	<td><input type="text" name="username">
                         	</td>
                         </tr>

                         <tr>
                         	<td>Password</td>
                         	<td><input type="Password" name="password"></td>
                         </tr>
                         <tr>
                         	<td>Conform Password</td>
                         	<td><input type="Password" name="con_pass"></td>
                         </tr>
                         <tr>
                         	 <td colspan="2">
                      <fieldset> <legend>Gender</legend>
                        
                         	<input type="radio" id="male" name="gender" value="male"><label>Male</label>
                         	<br>
                            <input type="radio" id="female" name="gender" value="female"><label>Female</label>
                            <br>
                            <input type="radio" id="other" name="gender" value="other"><label>Other</label>
                        </fieldset>
                            </td>
                           
                        </tr>
<tr>
	<td colspan="2">
		 <fieldset> <legend>Birthday</legend>
                       

  <input type="date" id="birthday" name="birthday">
  
                            </td>
                        </tr>

                   
                        	<tr>
                        		<td>
                        		<input type="submit" name="submit">
                        		<input type="reset" name="reset">
                        	</td>
                        	</tr>






					</td>
				</tr>

			</table>
	</fieldset>
	</form>

</body>
</html>