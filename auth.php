<?php
function auth($user, $pass){
	
	$cmd = "python auth.py ".$user." ".$pass;
	$isAuthed = exec($cmd);
	return $isAuthed;
}
?>
