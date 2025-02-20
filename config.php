<?php 
$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'aashi';

$config = mysqli_connect($hostname,$username,$password,$dbname);

	if($config)
	{
		echo "";
	}
	else
	{
		echo "Connection to DB Failed with Error:".mysqli_connect_error();
	}
?>