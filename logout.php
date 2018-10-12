<?php
session_start();
if(!isset($_SESSION["username"]))
{
	echo "NO SESSION";
	exit();
}
session_destroy();
echo "SESSION DESTROYED";
header("location: login.php");
?>