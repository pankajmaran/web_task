<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user'];
    $result = mysqli_query($conn,"SELECT * FROM user_details where user='" . $_POST['user'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['user'];
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color: black ;
  font-size:22px;
  text-align:center;
  padding-top: 30px;
 }

</style>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user name:</td><td><input type='text' name='user_id'/></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td> <button type="submit" name="save" class="submit btn btn-success btn-lg btn-block">submit</button></td></tr>
</table>
</form>
</body>
</html>