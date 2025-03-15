<?php 
include('config.php');

$receiverName = $_GET['receivers_name'];

$getMessageOwner = mysqli_query($config,"SELECT * FROM chat_message ");

$chatText = [];

while($row = mysqli_fetch_assoc($getMessageOwner))
{
	$chatText[] = '<div class="alert alert-danger" role="alert">'.$row['shared_message'].'</div>';
}

echo implode('',$chatText);

?>
