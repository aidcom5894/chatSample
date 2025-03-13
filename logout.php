<?php 

include('config.php');
session_start();
session_unset();
unset($_SESSION['activeUsers']);
session_destroy();
header('Location:'.$base_url.'');
	
?>