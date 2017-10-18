    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>      

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Menaxhimi i hartes</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Paneli</a></li>
            <li class="breadcrumb-item active">Menaxhimi i hartes</li>
        </ol>
    </div>
            <div class="col-md-6 col-8 align-self-center">
                <form class="form-material">
                    <div class="form-group">
                        <label class="col-sm-2 pull-left" style="margin-top: 1.7%;">Linja</label>
                        <div class="col-sm-10 pull-right">
                              <select class="form-control form-control-line" id="linjat">
                                    <option selected="false">Zgjidhni linjen</option>
                                    <option>Tirana e Re</option>
                                    <option>Unaza</option>
                                    <option>Kombinat Kinostudio</option>
                                    <option>Porcelani</option>
                                    <option>Sharre</option>
                              </select>
                        </div>
                    </div>
                </form>    
            </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                
                <h4 class="card-title">Harta e stacioneve</h4>
                <div id="map" class="gmaps"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <script>$('#linjat').change(function(){$('#stacioni').text($(this).val());});</script>
                <h4 class="card-title" id="stacioni"></h4>
                <hr>
                <div class="result"></div>
            </div>
        </div>
    </div>
</div>

<script src="js/load.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8vnHNOlgcYkG07SXlK2Vsx8DlKC_OR3E&callback=initMap"></script>


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
