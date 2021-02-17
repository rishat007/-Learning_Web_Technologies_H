<?php

    if(isset($_POST['submit']))
    {
    if(!empty($_POST['select']))
     {
        $selected = $_POST['select'];
        echo 'You have chosen: ' .$selected;
    } 
    else 
    {
        echo 'Please select the value.';
    }
    }
?>