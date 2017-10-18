<?php 
	$conn = mysqli_connect("localhost", "root", "", "stacione");

	$unazaLat = array("41.335033", "41.336003", "41.337985", "41.339878", "41.339660", "41.336591", "41.336599", "41.333046", "41.330541", "41.329558", "41.327705", "41.325159", "41.323789", "41.323028", "41.322073", "41.322317", "41.325194", "41.328211", "41.331865");
	$un = array("19.811492", "19.817112", "19.821758", "19.825674", "19.829225", "19.831317", "19.831285", "19.833763", "19.833817", "19.831575", "19.827584", "19.824424", "19.817826", "19.812864", "19.806759", "19.805096", "19.803852", "19.802666", "19.804361");

	$tlat = array("41.338878","41.338072","41.335463","41.331518","41.325791","41.322051","41.322153","41.320939","41.320300","41.321299","41.318608","41.318044","41.319130","41.317929","41.322812","41.330355","41.334434","41.335672","41.335239","41.334609","41.333707","41.335689","41.337441");
	$tlng = array("19.787921","19.785139","19.783136","19.783874","19.787015","19.789142","19.791483","19.793176","19.799230","19.805409","19.808778","19.812963","19.818140","19.821830","19.820210","19.818177","19.816890","19.814958","19.811800","19.808006","19.802513","19.797031","19.792176");
	$tname = array("Blloku Gintash","Dogana","Ura mbi Lane","Bojra Astir","Alpet","Fabrika e Miellit","Ish Parku","Selite","pa Emer","Vasil Shanto","Stadiumi Dinamo","Sheshi Uillson","Libri Universitar","Sheshi Nene Tereza","Piramida","Qender","Stacioni i Trenit","Jordan Misja","Harry Fultz","Don Bosko","Pallati i Sportit","Kupola","Laprake");

	echo sizeof($tlng)."<br>";
	echo $tname[0]."<br>";

	// for ($i=0; $i < sizeof($tlng); $i++) {
	// 	$sql = "insert into `linja` (`gjer`, `gjat`, `emri`, `linja`, `user_id`) values('$tlat[$i]', '$tlng[$i]', '$tname[$i]', 'T_R', 1)";
	// 	// $sql = 'update unaza set user_id = "1" where u_id = '.$i;
	// 	if(mysqli_query($conn, $sql)){
	// 		echo "done";
	// 	}else{
	// 		echo mysqli_error($conn);
	// 		break;
	// 	}
	// }
	for ($i=0; $i < sizeof($unazaLat); $i++) { 
		// $sql = "insert into `linja` (`gjer`, `gjat`, `emri`, `linja`, `user_id`) values('$unazaLat[$i]', '$un[$i]', 'emri', 'Unaza', 1)";
		$sql = 'update linja set `linja` = "Tirana e Re" where linja = "T_R"';
		if(mysqli_query($conn, $sql)){
			echo "done";
		}else{
			echo mysqli_error($conn);
			break;
		}
	}
	mysqli_close($conn);
?>


<!-- 		<table>
<?php //foreach ($data as $d):?>
		<tr>
			<td><input type='hidden' value='<?php echo $d["id"]; ?>'></td>
			<td style='padding-right: 10px;'><label>Stacioni: <b><?php echo $d["emri"] ?></b></label></td>
			<td style='padding-right: 10px;'><input type='text' class='form-control mb-2 mr-sm-2 mb-sm-0' id='inlineFormInput f<?php echo $d["id"]; ?>' value='<?php echo $d["gjer"]; ?>' readonly></td>
			<td><label id="f<?php echo $d["id"]; ?>"><?php echo $d["gjer"]; ?></label></td>
			<td style='padding-right: 10px;'><input type='text' class='form-control mb-2 mr-sm-2 mb-sm-0' id='inlineFormInput f<?php echo $d["id"]; ?>-<?php echo $d["id"]; ?>' value='<?php echo $d["gjat"]; ?>' readonly></td>
			<td><button class='btn btn-success pull-right' id='m<?php echo $d["id"]; ?>'>Modifiko</button></td>
		</tr>
<?php //endforeach; ?>
	</table> -->

	select count(*) from hotele where adresa like '_e%a'; 