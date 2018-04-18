<?php 
	session_start();
	echo "LOGOFF";
	session_destroy();
	print_r($_SESSION);
?>