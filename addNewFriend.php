<?php 
include('config.php');

$active_username = $_POST['active_username'];
$active_userID = $_POST['active_userID'];
$connecting_userID = $_POST['connecting_userID'];

mysqli_query($config,"INSERT INTO newfriends_list(active_username,active_userID,connecting_userID) VALUES('$active_username','$active_userID','$connecting_userID')");

 mysqli_query($config,"UPDATE users_directory SET present_friend_status = 'Friend' WHERE users_uniqueID = '$connecting_userID'");

echo "<script>alert('Success')</script>";

?>


