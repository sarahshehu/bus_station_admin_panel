<?php 
	include("connect.php");
	$c = connect();
	$id = $_POST['target'];
	$query = "Delete from users where user_id=".$id;

	mysqli_query($c, $query);

?>