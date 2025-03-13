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

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

    <title>Chat App</title>

    <style type="text/css">
    	
    </style>
  </head>

  <body>
    
    <!-- section for navbar starts here -->
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
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo "Welcome, ".$activeUserName; ?></a>
        </li>
      </ul>

      <form class="d-flex">
        
        	<div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
			  <a class="btn btn-danger me-md-2" href="logout.php">Logout</a>
			</div>
      </form>

    </div>
  </div>
</nav>
    <!-- section for navbar ends here -->

    	<div class="container mt-4 text-center text-primary">
    		<small>Suggested Friends List</small>
    	</div>
    <!-- section for displaying friends List Starts here -->
	  	<div class="container owl-carousel mt-4">


			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Friend List 1</h5>
					    <a href="#" class="btn btn-primary">Add as Friend</a>
					  </div>
					</div>
			  </div>

			  <!-- dummy section -->
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Friend List 1</h5>
					    <a href="#" class="btn btn-primary">Add as Friend</a>
					  </div>
					</div>
			  </div>
			  
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					   <div class="card-body">
					    <h5 class="card-title">Friend List 1</h5>
					    <a href="#" class="btn btn-primary">Add as Friend</a>
					  </div>
					</div>
			  </div>
			  
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Friend List 1</h5>
					    <a href="#" class="btn btn-primary">Add as Friend</a>
					  </div>
					</div>
			  </div>
			  
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
			  </div>
			  
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
			  </div>
			  
			  <div>
			  	<div class="card" style="width: 18rem;">
					  <img src="https://images.pexels.com/photos/1107717/pexels-photo-1107717.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
			  </div>
			  
			  
			  <!-- dummy section -->

			</div>
    <!-- section for displaying friends List Ends here -->



<div class="fixed-bottom">
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-6">
	      <!-- section for viewing friends List -->
			<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">View Friends List</button>

			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
			  <div class="offcanvas-header">
			    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
			    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			  </div>
			  <div class="offcanvas-body">
			    <p>.....</p>
			  </div>
			</div>
		<!-- section for viewing friends List -->
	    </div>

	    <div class="col-6">
	      <!-- section for chatting -->
			<button class="btn btn-primary float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Chat Now</button>

			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			  <div class="offcanvas-header">
			    <h5 id="offcanvasRightLabel">Friends Online</h5>
			    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			  </div>
			  <div class="offcanvas-body">

			      <div class="row">
					    <div class="col">
					      <a class="navbar-brand" href="#">
      <img src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg" alt="" width="30" height="24">
    </a>
					    </div>
					    <div class="col-6">
					     <button type="button" class="btn btn-primary position-relative">
  Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button>
					    </div>
					  </div>

			  </div>
			</div>
			<!-- section for chatting -->
	    </div>
	   
	  </div>
	</div>

</div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

		<script src="owlcarousel/dist/owl.carousel.min.js"></script>

  </body>
</html>


<script type="text/javascript">

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});


</script>