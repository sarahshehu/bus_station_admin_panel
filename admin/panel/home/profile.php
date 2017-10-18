<?php session_start(); 
      include("maps/connect.php");
      $conn = connect();

      if (isset($_POST["submit"])) {
            session_destroy();
            header("Location: ../../login.php");
      }

      if (isset($_POST['update'])) {
            $name = $_POST["emri"];
            $password = md5($_POST["password"]);
            $poz = $_POST["poz"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $u_id = $_SESSION["user_id"];

            $query = "update users set username = '".$name."', password = '".$password."', pozicioni='".$poz."', email='".$email."', tel='".$tel."' where user_id = ".$u_id;
            if (mysqli_query($conn, $query)) {
                  echo "sukses";
                  header("Location: index.php");
            }
      }


?>

<div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
      </svg>
</div>      


<div class="row page-titles">
      <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Profili</h3>
            <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Paneli</a></li>
                  <li class="breadcrumb-item active">Profili</li>
            </ol>
      </div>
</div>

<!-- Row -->
<div class="row">
      <!-- Column -->
      <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                  <div class="card-block">
                        <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                              <h4 class="card-title m-t-10"><?php echo $_SESSION["username"]; ?></h4>
                              <h6 class="card-subtitle"><?php echo $_SESSION["pozicioni"]; ?></h6>
                              <div class="row text-center justify-content-md-center">
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                              </div>
                        </center>
                  </div>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <input type="submit" name="submit" class="btn btn-danger" value="Dilni" style="width: 100%; border-radius: 0px;">
            </form>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                  <div class="card-block">
                        <form class="form-horizontal form-material" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                              <div class="form-group">
                                    <label class="col-md-12">Emri</label>
                                    <div class="col-md-12">
                                          <input name="emri" type="text" placeholder="<?php echo $_SESSION['username']; ?>" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                          <input name="email" type="email" placeholder="<?php echo $_SESSION['email']; ?>" class="form-control form-control-line" id="example-email">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="example-email" class="col-md-12">Pozicioni</label>
                                    <div class="col-md-12">
                                          <input name="poz" type="text" placeholder="Shkruani pozicionin" class="form-control form-control-line" id="example-email">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-md-12">Fjalekalimi</label>
                                    <div class="col-md-12">
                                          <input name="password" type="password" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-md-12">Numri i telefonit</label>
                                    <div class="col-md-12">
                                          <input name="tel" type="number" placeholder="<?php echo $_SESSION['tel']; ?>" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-sm-12">
                                          <input type="submit" name="update" class="btn btn-success" value="Ndyshoni te dhenat personale">
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <!-- Column -->
</div>




<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
