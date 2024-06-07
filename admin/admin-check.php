<?php
	$login = $_POST['login'];
	$password = $_POST['password'];

	if ($login == 'mmadmin' and $password == '262526nvi') {
	  session_start();
	  $_SESSION['mmadmin'] = true;
	  header('location: index.php');
	} else {
    header('location: admin.php');
	}
?>
