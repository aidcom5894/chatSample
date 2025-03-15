<?php 
session_start();
include('config.php');
include('master_pages/ui_masterHeader.php');
?>
    
  <div class="container" id="desktopView">
  	<div class="position-absolute top-50 start-50 translate-middle">

  		<!-- section for describing the message service -->
  		<?php 
  		if($config){?>
  			<div class="alert alert-info text-center" role="alert">AASHI now connected with Server</div>
  		<?php } else{?>
  			<div class="alert alert-danger text-center" role="alert">Failed to Connect to Server</div>
  		<?php } ?>
  		<div class="card mb-3" style="max-width: 420px; border-style: none;">
		  <div class="row g-0">
		    <div class="col-md-4">
		      <img src="logo.jpg" id="LogoIMG" class="img-fluid rounded-start" alt="aidcomLogo" >
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title">A.A.S.H.I</h5>
		        <p class="card-text">AIDCOM Authority Secured Hitch Interface</p>
		        <p class="card-text"><small class="text-muted">A Unique Chatting Platform</small></p>
		      </div>
		    </div>
		  </div>
		</div>
  		<!-- section for describing the message service -->

  		<form method="POST">
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Email:</strong></label>
		    <input type="email" class="form-control" id="usersEmail" name="usersEmail" placeholder="Your Registered Email">
		  </div>
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Password:</strong></label>
		    <input type="password" class="form-control" id="usersPassword" name="usersPassword" placeholder="Your Password">
		  </div>

		  <div class="mb-3 text-end">
		    <small><a href="#">Forgot Password?</a></small>
		  </div>		  
		 
		  <button type="submit" class="btn btn-primary form-control" name="loginUsers">Submit</button>

		  <div class="container mt-4 text-center">
		  	<small >Don't have an account ?<a class="text-primary" href="register" style="text-decoration: none;"> Register Here</a></small>
		  </div>
		</form>
  	</div>
  </div>

  <!-- mobile section display -->
  
  <div class="container" id="mobileView">
  	<div class="position-absolute top-50 start-50 translate-middle">

  		<!-- section for describing the message service -->
  		<?php 
  		if($config){?>
  			<div class="alert alert-info text-center" role="alert">AASHI CHAT APP</div>
  		<?php } else{?>
  			<div class="alert alert-danger text-center" role="alert">Server Error</div>
  		<?php } ?>
  		<div class="card mb-3" style="max-width: 420px; border-style: none;">
		  <div class="row g-0">
		    <div class="col-md-4 text-center">
		      <img src="logo.jpg" id="LogoIMG" class="img-fluid rounded-start" alt="aidcomLogo" style="height: 85px;">
		    </div>
		  </div>
		</div>
  		<!-- section for describing the message service -->

  		<form method="POST">

		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Email:</strong></label>
		    <input type="email" class="form-control" id="usersEmail" name="usersEmail" name="mobile" placeholder="Your Registered Email">
		  </div>

		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Password:</strong></label>
		    <input type="password" class="form-control" id="usersPassword" name="usersPassword" placeholder="Your Password">
		  </div>

		  <div class="mb-3 text-end">
		    <small><a href="#">Lost Password?</a></small>
		  </div>
		 
		  <button type="submit" class="btn btn-primary form-control" name="loginUsers">Submit</button>

		  <div class="container mt-4 text-center">
		  	<small>New User ?<a class="text-primary" href="register" style="text-decoration: none;"> Signup</a></small>
		  </div>

		</form>


  	</div>
  </div>

  <!-- mobile section display -->



<?php 
$usersEmail = $_POST['usersEmail'];
$usersCredentials = $_POST['usersPassword'];

$fetchExistingUser = mysqli_query($config,"SELECT * FROM enrolling_users WHERE user_email='$usersEmail'");
while ($row = mysqli_fetch_assoc($fetchExistingUser))
{
	$fetchPassword = $row['user_password'];
}

if(isset($_POST['loginUsers']))
{

	if(mysqli_num_rows($fetchExistingUser)>0 AND password_verify($usersCredentials,$fetchPassword))
	{
		session_start();
		$_SESSION['activeUser'] = $usersEmail;
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () {';
    echo '  swal({';
    echo '      title: "Welcome Onboard!",';
    echo '      text: "Welcome to Chat, Now chat with your loved ones and connect with them securely",';
    echo '      icon: "success"';
    echo '  }).then(function() {';
    echo '      window.location.href = "dashboard";';  
    echo '  });';
    echo '}, 100);';
    echo '</script>';
	}
	else
	{
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () {';
    echo '  swal({';
    echo '      title: "Wrong Credentials!",';
    echo '      text: "Failed to Verify the Existing User Details",';
    echo '      icon: "error"';
    echo '  }).then(function() {';
    echo '      window.location.href = "'.$base_url.'";';  
    echo '  });';
    echo '}, 100);';
    echo '</script>';
	}
}



?>

 
<?php 
include('master_pages/ui_masterFooter.php');
?>