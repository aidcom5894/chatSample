<?php 
session_start();
include('config.php');

$activeUserAccount = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email='{$_SESSION['activeUser']}'");
while($row = mysqli_fetch_assoc($activeUserAccount))
{
	$activeUserID = $row['users_uniqueID'];
	$activerUsername = $row['users_name'];
}

if(!isset($_SESSION['activeUser']))
{
	header('Location:index.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aashi Chat App</title>
  </head>
  <body>
    
    <!-- section for navbar starts here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aashi Chat App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $activeUserID; ?></a>
        </li>
      </ul>
      
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
</nav>
    <!-- section for navbar starts here -->

    <!-- section for suggested Friends -->
   <div class="container-fluid mt-4">
   	<h4>Suggested Friends</h4>
    <form method="POST">
      <input type="text" id="activeUserName" name="activeUserName" value="<?php echo $activerUsername; ?>">
        <input type="text" id="activeUserID" name="activeUserID" value="<?php echo $activeUserID;  ?>">
        <input type="text" id="selectedFriend" name="selectedFriend" oninput="insertData()">
   		<div class="row row-cols-1 row-cols-md-6 g-4">

   		<?php 
   		$friendSuggestion = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email != '{$_SESSION['activeUser']}' AND present_friend_status = 'Not a Friend' ORDER BY rand() LIMIT 6;");
   		while($row = mysqli_fetch_assoc($friendSuggestion)){?>
		  <div class="col">
		    <div class="card h-100">
		      <img src="<?php echo "avatar/".$row['user_avatar']; ?>" class="card-img-top" alt="..." style="width: 65px; height: 65px;">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $row['users_name']; ?></h5>

            <input type="text" id="myFriendsName" name="friendsName" value="<?php echo $row['users_name']; ?>" style="display: block;">

            <input type="text" id="myFriendsUID" name="friendsUID" value="<?php echo $row['users_uniqueID']; ?>" style="display: block;">

		        <button type="submit" id="addFriend" onclick="fetchID('<?php echo $row['users_uniqueID']; ?>')" class="btn btn-success">Add Friends</button>
		      </div>
		    </div>
		  </div>
		<?php } ?>
  
		</div>
   </div>
    <!-- section for suggested Friends -->
    </form>

    <!--  -->

    <!-- section for showing added friends -->
    <div class="container-fluid row-cols-md-6 mt-4">
    	<ul class="list-group">
		  <li class="list-group-item active" aria-current="true">Friends List</li>

		  <?php 
   		$friendList = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email != '{$_SESSION['activeUser']}' AND present_friend_status = 'Friend'");
   		while($row = mysqli_fetch_assoc($friendList)){?>

		  <li class="list-group-item" id="friendsList"><img src="<?php echo "avatar/".$row['user_avatar']; ?>" style="width:35px; height: 35px;"><?php echo $row['users_name']; ?> <?php if($row['present_live_status'] == 'Offline'){?><span class="badge rounded-pill bg-danger"><?php echo $row['present_live_status']; ?></span><?php }else{ ?> <span class="badge rounded-pill bg-success"><?php echo $row['present_live_status']; ?></span> <?php  } ?> </li>
		 <?php } ?>
		</ul>
    </div>
    <!-- section for showing added friends -->

    <!-- section for showing online status -->
   
    <!-- section for showing online status -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript">

  var activeAdminName = $('#activeUserName').val();
  var activeAdminCode = $('#activeUserID').val();
  var friendsUID = $('#myFriendsUID').val();  

  function fetchID(friendsUID)
  {    
    $('#selectedFriend').val(friendsUID);
      $.ajax({
        method:'POST',
        url:'addNewFriend.php',
        data:{
          active_username: activeAdminName,
          active_userID: activeAdminCode,
          connecting_userID : friendsUID
        },
        success:function(response)
        {
           alert('Data Successfully Inserted');
        
        },
        error:function(xhr,status,error)
        {
          alert('Failed with Error:'+error);
        }
      });
  }

</script>
