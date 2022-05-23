<?php
session_start();
if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
}

	if("voter_id"){
	session_destroy();
	unset($_SESSION['voter_id']);
	include'login.php';
	}
?>
