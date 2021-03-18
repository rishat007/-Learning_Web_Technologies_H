<?php
	session_start();

	if(isset($_POST['signup'])){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$repass = $_POST['repass'];
		$shop=$_POST['shopname'];
		$type = $_POST['bee'];
		$gender = $_POST['gender'];

		if( $name ==""||$phone ==""||$email ==""|| $id ==""||$username ==""||	$password ==""||$repass ==""||$shop==""||$type==""||$gender ="" ){
			echo "null submission...";
		}
		else{

			if($password == $repass){

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email,
						      'name' =>$name,
                              'phone'=>$phone,
                              'id'=>$id,
							'password'=>$password, 
							'shopname'=> $shop,
						      'bee' =>$type,
                              'gender'=>$gender 

						];

				
				$_SESSION['current_user'] = $user;

				header('location:../view/sing_in_owner.php');
			}
			else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>