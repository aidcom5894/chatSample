<?php 
include('config.php');

$fetchSuggestedFriends = mysqli_query($config, "SELECT * FROM enrolling_users WHERE user_email != '{$_SESSION['activeUser']}' ORDER BY rand()");

$friends = [];
while ($row = mysqli_fetch_assoc($fetchSuggestedFriends)) {
    $friends[] = '<div>
        <div  class="card" style="width: 14rem;">
            <center>
                <img id="userAvatar" src="avatar/'.$row['user_image'].'" class="card-img-top" alt="..." style="width: 75px;">
                <div class="card-body">
                    <h5 class="card-title" id="friendsName">'.$row['users_name'].'</h5>
                    <a href="messanger?receivers_name='.$row['users_name'].'" class="btn btn-primary">Add as Friend</a>
                </div>
            </center>
        </div>
    </div>';
}


// Join the array elements into a single string and echo it
echo implode('', $friends);
?>
