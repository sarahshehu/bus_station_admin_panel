<?php 
	function connect(){
		$dblink = mysqli_connect("localhost", "root", "", "stacione");
		if (!$dblink) {
			die("Lidhja me databazen deshtoi");
		}
		return $dblink;
	}

	function getResult($query){
		$conn = connect();
		$data = array();
		$res = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
    	return $data;
	}

	function nr_total_elemente($query){
		$conn = connect();
		$res = mysqli_query($conn, $query);
		$num_rows = mysqli_num_rows($res);
		return $num_rows;
	}

?>