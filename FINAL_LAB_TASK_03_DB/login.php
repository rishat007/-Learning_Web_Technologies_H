<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
if (isset($_POST['username']))
 {
        $username = stripslashes($_REQUEST['username']);   
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
     
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
          
            header("Location: bob_prof.php");
        }
    } else {
        
       
?>
   
        <fieldset>
            <legend>login</legend>
            <table>

            <tr>
                <td>user Id:</td>
            </tr>
            <tr>
                <td>
                    <input type="numder" name="username" value="" required="true">
                </td>
            </tr>

            <tr>
                <td>Password:</td>
            </tr>
            <tr>
                <td>
                    <input type="Password" name="username" value="" required="true">
                </td>
            </tr>
             <tr>
                <td>
                    <input type="checkbox" name="">Remember me
                </td>
            </tr>
            <tr>
                <td>
            <form action="bob_prof.php"><input type="submit" name="" value="login">
                </td>
                <td>
                    <a href="reg.php">Register</a>
                </td>
                </tr>
            </table>

<?php
  }
?>
</body>
</html>