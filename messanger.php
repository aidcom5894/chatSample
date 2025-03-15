<?php 
session_start();
include('config.php');

if(!isset($_SESSION['activeUser']))
{
	session_start();
	unset($_SESSION['activeUser']);
	header('Location:logout.php');
}

$fetchSessionUser = mysqli_query($config,"SELECT * FROM enrolling_users WHERE user_email='{$_SESSION['activeUser']}'");
while($row = mysqli_fetch_assoc($fetchSessionUser))
{
	$activeUserName = $row['users_name'];
}

$fselected = $_GET['receivers_name'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- section for nav starts here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
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
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $activeUserName; ?></a>
        </li>

    
      </ul>
          <div class="d-flex float-end">
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
  </div>
</nav>
    <!-- section for nav ends here -->

    <!-- message section start here -->
    <div class="container mt-4" id="receiverMsg">
    
    </div>
    <!-- message section ends here -->

   
			

		<!-- section for chatbox -->
			<form method="POST">
			  <div class="container fixed-bottom mb-4">
			   	<div class="row">
			   		
				    <div class="col-sm-10"><input type="text" class="form-control" name="textMessage"></div>
				    <div class="col-sm-2"><button class="btn btn-primary" type="submit" id="sendMsg" name="sendMessage">Send</button>

				    </div>
				    
				</div>
			  </div></form>
			
		<!-- section for chatbox -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>


<?php 

$sendersName = $_SESSION['activeUser'];
$receiversname = $fselected;
$sharedMessage = $_POST['textMessage'];
$readStatus = 'Unread';

if(isset($_POST['sendMessage']))
{
	mysqli_query($config,"INSERT INTO chat_message(senders_name,receivers_name,shared_message,message_read_status) VALUES('$sendersName','$receiversname','$sharedMessage','$readStatus')");
}

?>

<script type="text/javascript">
  $(document).ready(function(){
    function fetchMyChat() {
        $.ajax({
            url: 'sendersMsg.php',
            method: 'GET',
            success: function(data) {
                $('#receiverMsg').html(data); 
            },
            error: function(xhr, status, error) {
                console.log('Data Error:', error);
            }
        });  
    }

    fetchMyChat(); 
    setInterval(fetchMyChat, 200); 
});
</script>