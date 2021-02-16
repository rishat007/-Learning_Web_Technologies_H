<?php

	if(isset($_POST['submit']))
	{

		$date = $_POST['date'];

		if($date == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>