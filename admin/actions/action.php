<?php 
	session_start();
	include('../../connect.php');
	$username = $_POST["us"];
	$password = md5($_POST["pa"]);
	$id = '';
	$poz = '';
	$qyteti = '';
	$email = '';
	$tel = '';
	$logged = FALSE;

	$sql = "SELECT * FROM users WHERE username = '".$username."' AND password='".$password."'";
    $get_id = getResult($sql);
    foreach ($get_id as $key) {
        $id = $key["user_id"];
        $poz = $key["pozicioni"];
        $email = $key["email"];
        $tel = $key["tel"];
        $qyteti = $key["qyteti"];
    }
    $result = nr_total_elemente($sql); 
    if ($result == 1) {            
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["user_id"] = $id;
        $_SESSION["pozicioni"] = $poz;
        $_SESSION['tel'] = $tel;
        $_SESSION['email'] = $email;
        $logged = TRUE;
    }
    echo $logged;
?>