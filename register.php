<?php 
include('master_pages/ui_masterHeader.php');
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
		    <label class="form-label"><strong class="text-danger">User's Full Name :</strong></label>
		    <input type="text" class="form-control" id="userfullName" name="userfullName" placeholder="Your Registered Email" required>
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
		    <label class="form-label"><strong class="text-danger">Your Name:</strong></label>
		    <input type="text" class="form-control" id="userfullName" name="userfullName" placeholder="Your Registered Email">
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