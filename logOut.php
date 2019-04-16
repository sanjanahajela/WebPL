<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->
<?php
//ends the session, removes the cookie and redirects back to homepage
	$_SESSION['user'] = false;
	setcookie('user', '', time()-3600);
	header("Location: home.html");
?>