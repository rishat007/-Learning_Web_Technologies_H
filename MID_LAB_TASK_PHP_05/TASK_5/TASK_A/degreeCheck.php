<?php

	if(isset($_POST['submit']))
	{

		$degree = $_POST['degree'];

		if($degree == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>