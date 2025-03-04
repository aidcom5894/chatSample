<?php 
include('master_pages/ui_masterHeader.php');
include('config.php');
?>
  
  <!-- section for body starts here -->
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
		    <label class="form-label"><strong class="text-danger">User's Full Name:</strong></label>
		    <input type="text" class="form-control" id="userfullName" oninput="changeToTitle()" name="userfullName" placeholder="Your Full Name">
		  </div>
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">User's Email :</strong></label>
		    <input type="email" class="form-control" id="usersEmail" name="usersEmail" placeholder="Your Registered Email" required>
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Password:</strong></label>
		    <input type="password" class="form-control" id="credential" name="credential" placeholder="Your Password">
		  </div>
		 
		  <button type="submit" class="btn btn-primary form-control" name="registerUsers">Submit</button>

		  <div class="container mt-4 text-center">
		  	<small>Already have an account ?<a class="text-primary" href="<?php echo $base_url; ?>" style="text-decoration: none;"> Login Here</a></small>
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
		    <label class="form-label"><strong class="text-danger">User's Full Name:</strong></label>
		    <input type="text" class="form-control" id="userfullName" oninput="changeToTitle()" name="userfullName" placeholder="Your Full Name">
		  </div>
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Email:</strong></label>
		    <input type="email" class="form-control" id="usersEmail" name="usersEmail" placeholder="Your Registered Email">
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label"><strong class="text-danger">Password:</strong></label>
		    <input type="password" class="form-control" id="credential" name="credential" placeholder="Your Password">
		  </div>
		 
		  <button type="submit" class="btn btn-primary form-control" name="registerUsers">Submit</button>

		  <div class="container mt-4 text-center">
		  	<small>Existing User ?<a class="text-primary" href="<?php echo $base_url; ?>" style="text-decoration: none;"> Login Here</a></small>
		  </div>
		</form>
  	</div>
  </div>

  <!-- mobile section display -->
 
  <!-- section for body starts here -->

<?php 
include('master_pages/ui_masterFooter.php');
?>

<script type="text/javascript">
	function changeToTitle()
	{
		var usersName = document.getElementById('userfullName');
		usersName.value = usersName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
	}
</script>

<?php 

$usersAvatar = array('avatar1.png','avatar2.png','avatar3.png','avatar4.png','avatar5.png','avatar6.png','avatar7.png','avatar8.png','avatar9.png','avatar10.png','avatar11.png','avatar12.png','avatar13.png','avatar14.png','avatar15.png','avatar16.png','avatar17.png','avatar18.png','avatar19.png','avatar20.png','avatar21.png','avatar22.png','avatar23.png','avatar24.png','avatar25.png');

$enrollingUserName = $_POST['userfullName'];
$enrollingUsersEmail = $_POST['usersEmail'];
$enrollingUsersCred = password_hash($_POST['credential'], PASSWORD_DEFAULT);
$enrollingUsersAvatar = $usersAvatar[array_rand($usersAvatar,1)];

$matchEntry = mysqli_query($config,"SELECT * FROM enrolling_users WHERE user_email = '$enrollingUsersEmail'");


if(isset($_POST['registerUsers']))
{
	if(mysqli_num_rows($matchEntry)>0)
	{
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
		echo '<script type="text/javascript">';
		echo 'swal({
	        title: "Duplicate User Found!",
	        text: "The email you are providing is already registered with us. To avoid duplicacy we do not allow registering users with the same email. Please provide unique Email to register to the Portal.",
	        icon: "warning"
	      }).then(function() {
	        window.location.href = "'.$base_url.'"; 
	      });';
		echo '</script>';
	}
	else
	{
		mysqli_query($config,"INSERT INTO enrolling_users(users_name,user_email,user_password,user_image) VALUES('$enrollingUserName','$enrollingUsersEmail','$enrollingUsersCred','$enrollingUsersAvatar')");
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
		echo '<script type="text/javascript">';
		echo 'swal({
	        title: "User Successfully Registered!",
	        text: "New User has been successfully registered to the Portal!",
	        icon: "success"
	      }).then(function() {
	        window.location.href = "'.$base_url.'"; 
	      });';
		echo '</script>';
	}
	
}

?>
