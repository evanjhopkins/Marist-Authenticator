<?php
include 'auth.php';
if(isset($_POST['username'])){
	$response = auth($_POST['username'], $_POST['password']);
}
?>
<html>
<h1>Marist Authenticator</h1>
<form method="post" action="">
<table>
<tr>
<td>Username:</td><td><input type="text" name="username"></td>
</tr><tr>
<td>Password:</td><td><input type="password" name="password"></td>
</tr><tr>
<td><input type="submit" value="Submit"></td><td></td>
</tr>
</table>
<?php
	if($response==1){
		echo "LOGIN SUCCESS";
	}else{
		echo "LOGIN FAILED";
	}
?>

</html>
