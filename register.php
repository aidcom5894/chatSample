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
		    <label class="form-label">User Name:</label>
		    <input type="text" class="form-control" id="enrollingUserName" name="enrollingUserName" oninput="generateUniqueID()">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User Email:</label>
		    <input type="text" class="form-control" id="enrollinguserEmail" name="enrollinguserEmail">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User Contact:</label>
		    <input type="text" class="form-control" id="enrollingUserContact" name="enrollingUserContact" min="1" onkeypress="if(this.value.length === 10)return false;">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password:</label>
		    <input type="password" class="form-control" id="enrollingPassword" name="enrollingPassword">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">AASHI Unique ID:</label>
		    <input type="text" class="form-control" id="enrollingUniqueID" name="enrollingUniqueID" readonly>
		  </div>


		  <button type="submit" name="submitData" class="btn btn-primary">Submit</button>

		   <div class="mb-3">
		   <a href="index.php"><label class="form-label float-end">Already Have an account? Login Here</label></a>
		  </div>

		  
		</form>
   	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript">
	var userfullName = document.getElementById('enrollingUserName');
	var uniqueID = document.getElementById('enrollingUniqueID');

	var randomCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('').sort(function(){return 0.5-Math.random()}).join('').substr(0,4);
	
	var randomNum = randomCharacters + Math.floor(Math.random(randomCharacters)*1000);

	function generateUniqueID()
	{
		userfullName.value = userfullName.value.replace(/\w\S*/g, text => text.charAt(0).toUpperCase() + text.substring(1).toLowerCase());
		uniqueID.value = userfullName.value.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '').substring(0,3).toUpperCase()+randomNum;
	}
</script>

<?php 

$userFullname = $_POST['enrollingUserName'];
$usersEmail = $_POST['enrollinguserEmail'];
$usersContact = $_POST['enrollingUserContact'];
$usersPassword = password_hash($_POST['enrollingPassword'], PASSWORD_DEFAULT);

$avatarImages = array('avatar1.png','avatar2.png','avatar3.png','avatar4.png','avatar5.png','avatar6.png','avatar7.png','avatar8.png','avatar9.png','avatar10.png','avatar11.png','avatar12.png','avatar13.png','avatar14.png','avatar15.png','avatar16.png','avatar17.png','avatar18.png','avatar19.png');

$userImage = $avatarImages[array_rand($avatarImages,1)];

$uniqueID = $_POST['enrollingUniqueID'];

$checkExistingEntry = mysqli_query($config,"SELECT * FROM users_directory WHERE users_email = '$usersEmail' OR users_contact = '$usersContact'");

if(isset($_POST['submitData']))
{
	if(mysqli_num_rows($checkExistingEntry)>0)
	{
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () {';
        echo '  swal({';
        echo '      title: "Duplicate Data!",';
        echo '      text: "The user contact details you are trying to use for registration is already associated with an account. Please log in to the portal using your credentials. If you have forgotten your credentials, kindly contact the admin for assistance.",';
        echo '      icon: "warning"';
        echo '  }).then(function() {';
        echo '      window.location.href = "register.php";';  
        echo '  });';
        echo '}, 100);';
        echo '</script>';
	}
	else
	{
		mysqli_query($config,"INSERT INTO users_directory(users_name,	users_email,users_contact,users_password,users_uniqueID,user_avatar,present_friend_status) VALUES('$userFullname','$usersEmail','$usersContact','$usersPassword','$uniqueID','$userImage','Not a Friend')");

			echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () {';
      echo '  swal({';
      echo '      title: "User Registered",';
      echo '      text: "We have successfully registered the New User to the Portal.",';
      echo '      icon: "success"';
      echo '  }).then(function() {';
      echo '      window.location.href = "index.php";';  
      echo '  });';
      echo '}, 100);';
      echo '</script>';
	}
}


?>