<?php
	$_SESSION['user'] = false;
	setcookie('user', '', time()-3600);
	header("Location: home.html");
?>