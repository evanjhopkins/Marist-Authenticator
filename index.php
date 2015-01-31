<?php
include 'auth.php';
if(isset($_POST['username'])){
	$response = auth($_POST['username'], $_POST['password']);
}
?>
<html>
<h1>Marist Authenticator</h1>
<form method="post" action="">
Username:<input type="text" name="username"><br>
Password:<input type="password" name="password"><br>
<input type="submit" value="Submit"><br>
<?php
	if($response==1){
		echo "LOGIN SUCCESS";
	}else{
		echo "LOGIN FAILED";
	}
?>

</html>
