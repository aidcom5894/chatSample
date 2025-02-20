<?php 
include('config.php');

$friendsID = $_GET['users_uniqueID'];

$fetchNewFriend = mysqli_query($config,"SELECT * FROM users_directory WHERE users_uniqueID = '$friendsID'");
while($row = mysqli_fetch_assoc($fetchNewFriend))
{
	$fetchFriendName = $row['users_name'];
	$fetchFriendID = $row['users_uniqueID'];
}

$fetchActiveUsers = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email = '{$_SESSION['activeUser']}'");
while($row = mysqli_fetch_assoc($fetchActiveUsers))
{
	$activeUsername = $row['users_name'];
	$activeUserUID = $row['users_uniqueID'];
}




?>