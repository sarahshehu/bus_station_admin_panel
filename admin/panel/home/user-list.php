<?php 
    session_start();
    include("maps/connect.php");

    $sql = "select * from users";
    $checkQuery = 'select prioriteti from users where user_id = '.$_SESSION['user_id'];
    $result = getResult($sql);

    $access = getResult($checkQuery);
?>

<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>      
        
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Perdoruesit</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Paneli</a></li>
                            <li class="breadcrumb-item active">Lista e Perdoruesve</li>
                        </ol>
                    </div>

            <div class="col-md-6 col-8 align-self-center">
                <?php 
                    //if admin with priority is logged in
                    foreach ($access as $a) {
                        if($a['prioriteti'] == 1){
                            include("user_panel.php");
                        }
                    }
                ?>   
            </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Emri i Perdoruesit</th>
                                                <th>Pozicioni</th>
                                                <th>Email</th>
                                                <th>Telefon</th>
                                                <th>Aktiv</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $r): ?>
                                                <tr>
                                                    <td><?php echo $r['user_id'] ?></td>
                                                    <td><?php echo $r['username'] ?></td>
                                                    <td><?php echo $r['pozicioni'] ?></td>
                                                    <td><?php echo $r['email'] ?></td>
                                                    <td><?php echo $r['tel'] ?></td>
                                                    <td>
                                            <?php if ($_SESSION['username'] != $r['username']) {
                                            echo "<i class='fa fa-circle' aria-hidden='true' style='color: red;'></i>";     
                                                }else{
                                                echo "<i class='fa fa-circle' aria-hidden='true' style='color: green;'></i>";
                                            } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
