<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "rishat" || $password == "123" )
		
		{
			$user = $_SESSION['current_user'];

			
				$_SESSION['flag'] = true;
				header('location: ../view/sign_in_owner.php');
			
		}

	

		else
			{


			echo "Please Enter username and password";
		}

	}
?>
