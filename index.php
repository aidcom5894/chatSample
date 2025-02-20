<?php 
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aashi Chat App</title>
    <!-- AIDCOM AUTHORITY SECURED HITCHED INTERFACE -->
  </head>
  <body>
   	
   	<div class="container mt-4">

   		<form method="POST">
		  <div class="mb-3">
		    <label class="form-label">Email:</label>
		    <input type="text" class="form-control" id="enrollingUserName" name="enrollingUserName">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password:</label>
		    <input type="password" class="form-control" id="enrollingUsersPassword" name="enrollingUsersPassword">
		  </div>

		  <button type="submit" name="verificationSubmit" class="btn btn-primary">Submit</button>

		   <div class="mb-3">
		   <a href="register.php"><label class="form-label float-end">Don't have an account? Signup Here</label></a>
		  </div>

		  
		</form>
   	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php 

	$enteredEmail = $_POST['enrollingUserName'];
	$enteredPasswordX = $_POST['enrollingUsersPassword'];
	
	$fetchpassword = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email = '$enteredEmail'");
	while ($row = mysqli_fetch_assoc($fetchpassword))
	{
		$fetchedEmail = $row['users_email'];
		$hashedPassword = $row['users_password'];
	}

	$enteredPassword = password_verify($_POST['enrollingUsersPassword'], $hashedPassword);

	if(isset($_POST['verificationSubmit']))
	{
		if($enteredEmail == $fetchedEmail AND $enteredPasswordX == $enteredPassword)
		{
			session_start();
			$_SESSION['activeUser'] = $enteredEmail;
			header('Location:dashboard.php');
		}
		else
		{
			echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () {';
      echo '  swal({';
      echo '      title: "Incorrect Credentials!",';
      echo '      text: "The entered Details are not Correct. Please enter the correct Details to Login to the Portal.",';
      echo '      icon: "error"';
      echo '  }).then(function() {';
      echo '      window.location.href = "index.php";';  
      echo '  });';
      echo '}, 100);';
      echo '</script>';
		}
	}
	
?>