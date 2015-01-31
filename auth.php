<?php
function auth($user, $pass){
	$isAuthed = system("python auth.py ".$user." ".$pass);
	return $isAuthed;
}
?>
