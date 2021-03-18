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
	<li><a href="shop_rev.php">Shop&nbspReview</a></li>
	
	
</ol>
</ul>
</td>



</table>

		
			<td>
				<b>Welcome Sir!</b> <table align="right"><table>
					<table border="1" align="center" width="790px">
						<tr>
							

						<td>
							

<?php
$jsonobj = '{"Cricket World Today sell":2454,"Football World Today sell":22204,"KiddusToday sell":643}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>


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
