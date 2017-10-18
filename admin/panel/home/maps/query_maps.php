<?php
	include("connect.php");
	$linja = $_POST['linja'];
	$data = getResult("select * from linja where `linja` = '".$linja."'");
	echo json_encode($data);
?>



