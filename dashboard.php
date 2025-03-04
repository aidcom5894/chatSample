<?php 

session_start();

if(!isset($_SESSION['activeUsers']))
{
	session_start();
	unset($_SESSION['activeUsers']);
	session_unset();
	session_destroy();
	header('Location:index');
}
else
{
	echo $_SESSION['activeUsers'];
}

?>