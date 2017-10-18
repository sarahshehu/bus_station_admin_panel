<?php 
	$conn = connect();
	if (isset($_POST['add'])) {
        $name = $_POST["emri"];
        $password = md5($_POST["password"]);
        $poz = $_POST["poz"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $prioriteti = $_POST["prioriteti"];
        $query = "insert into users(username, password, pozicioni, email, tel, prioriteti) values('".$name."', '".$password."', '".$poz."', '".$email."', '".$tel."', '".$prioriteti."')";
        if (mysqli_query($conn, $query)) {
              header("Location: index.php");
        }else{
        	echo "ERROR";
        }
      }

 ?>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal1">Hiq user</button>

<div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Fshini administratore nga sistemi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">


      <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Emri i Perdoruesit</th>
                <th>Pozicioni</th>
                <th>Prioriteti</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $data): ?>
                <tr class="<?php echo $data['user_id']; ?>">
                    <td><?php echo $data['user_id'] ?></td>
                    <td><?php echo $data['username'] ?></td>
                    <td><?php echo $data['pozicioni'] ?></td>
                    <td><?php echo $data['prioriteti'] ?></td>
                    <td><button id="<?php echo $data['user_id']; ?>" class="btn btn-danger del" style="border-radius: 0px;">Fshij</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mbyll</button>
      </div>
    </div>

  </div>
</div>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal2">Shto user</button>

<div id="modal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Shtoni administratore ne sistem</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
		
		<form class="form-horizontal form-material" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="emri" type="text" placeholder="Emri" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="email" type="email" placeholder="Email" class="form-control form-control-line" id="example-email">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="poz" type="text" placeholder="Shkruani pozicionin" class="form-control form-control-line" id="example-email">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="password" type="password" placeholder="Fjalekalimi" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="tel" type="number" placeholder="Telefon" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-md-12">
                                          <input name="prioriteti" type="number" placeholder="1 ose 0" class="form-control form-control-line" min="0" max="1">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-sm-12">
                                          <input type="submit" name="add" class="btn btn-warning" value="Shtoni perdoruesin">
                                    </div>
                              </div>
                        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mbyll</button>
      </div>
    </div>

  </div>
</div>
<button>Kredencialet</button>
<button>Shiko kerkesat</button>


<script>
	$(document).ready(function($) {
		$('.del').click(function(event) {
			var idClicked = event.target.id;
			$("."+idClicked).remove();
			$.post('maps/deleteUser.php', {target: idClicked});
		});
	});
</script>