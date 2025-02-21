<?php 
include('config.php');


$fetchFriendsList = mysqli_query($config,"SELECT * FROM users_directory WHERE present_friend_status = 'Friend'");
echo mysqli_num_rows($fetchFriendsList);
?>