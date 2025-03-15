<?php 
include('config.php');

$fetchMsg = mysqli_query($config,"SELECT * FROM chat_message");
$chatTextR = [];

while($row = mysqli_fetch_assoc($fetchMsg))
{
	if($row['senders_name'] === "{$_SESSION['activeUser']}")
	{
	$chatTextR[] = '<div class="alert alert-primary" role="alert">'.$row['shared_message'].'</div>';
	}
	elseif($row['senders_name'] !== "{$_SESSION['activeUser']}")
	{
	 $chatTextR[] = '<div class="alert alert-warning" role="alert">'.$row['shared_message'].'</div>';	
	}
}

echo implode('',$chatTextR);

?>
