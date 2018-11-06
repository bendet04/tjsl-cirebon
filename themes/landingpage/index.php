<script type="text/javascript">
var url = "<?php echo site_url('home/') ?>";
</script> 
<?php 
echo theme_view('header'); 
?>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light opaque-navbar">

            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                     <!-- dark Logo text -->
                     <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                     <!-- Light Logo text -->    
                     <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                     </span> 
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                
                <ul class="navbar-nav mr-auto mt-md-0">
                    
                    <!-- ============================================================== -->
                    <!-- buat menu samping logo -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                <!-- navbar -->
                <?php 
                     $url = $this->uri->segment(1);
                     if($url){?>
                     <?php echo theme_view('nav/'.$this->uri->segment(1));?>
                     <?php } else { ?>
                     <?php echo theme_view('nav/home')?>
                <?php } ?>
                    
                </ul>
            </div>
        </nav>
    </header>
    <!-- End Topbar header -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- sidebar / menu -->
                    <?php 
                         $url = $this->uri->segment(1);
                         if($url){?>
                         <?php echo theme_view('sidebar/'.$this->uri->segment(1));?>
                         <?php } else { ?>
                         <?php echo theme_view('sidebar/home')?>
                    <?php } ?>
                    
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid" style="padding: 0px">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- gambar header -->
            <div class="fix-width" style="padding: 0 !important; background-repeat: no-repeat; background-size: cover; background-position: bottom; margin-top: -10px !important;">

                
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/5.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

<div class="row white-space">
    <div class="col-md-12 ">
        <div class="fix-width icon-section"> 
            <div class="text-center m-b-20">
                <h2 class="display-7"><b>Program Unggulan</b></h2>
                <h3 class="display-9">Beberapa Program Unggulan kami yang telah berhasil memberikan manfaat bagi masyarakat</h3>
            </div>
        <!-- Row -->
        <div class="row m-t-40">
            <!-- .col -->
            <div class="col-lg-3 col-md-6"> <i class="ti-paint-bucket display-5 text-info"></i>
                <h4 class="font-500">LINGKUNGAN</h4>
                <p>We have included 6 pre-defined color schemes with Admin Press .
                </p>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-lg-3 col-md-6"> <i class="ti-layout-sidebar-right display-5 text-info"></i>
                <h4 class="font-500">PENDIDIKAN</h4>
                <p>Included Dark and Light Sidebar for getting desire look and feel.</p>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-lg-3 col-md-6"><i class="ti-layers-alt display-5 text-info"></i>
                <h4 class="font-500">KESEHATAN</h4>
                <p>Yes, we have 5 demos &amp; 120+ Pages per demo to make it easier.</p>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-lg-3 col-md-6"><i class="ti-paint-roller display-5 text-info"></i>
                <h4 class="font-500">EKONOMI MASYARAKAT</h4>
                <p>Almost 500+ UI Components being given with Admin Press Pack.
                </p>
            </div>
            <!-- /.col -->
           
        </div>
    </div>
    <br/><br/>
    <br/><br/>
</div>
<!-- peta -->
<div class="col-md-12">
    <div class="text-center m-b-20">
        <h2 class="display-7"><b>Peta Realisasi dan Permohonan Proram TJSL</b></h2>
        <h4 class="display-9">Beberapa Program Unggulan kami yang telah berhasil memberikan manfaat bagi masyarakat</h4>
    </div>
    <center>
        <div class="col-md-6">
        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
            <option>Select</option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
                <option value="AZ">Arizona</option>
                <option value="CO">Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </optgroup>
        </select>
        </div>
    </center> <br><br>
    <div id="markermap" class="gmaps"></div>
<br/><br/>
<br/><br/>
</div>
<!-- ////// -->
<!-- alur partisipasi pembangunan -->
<div class="container terasi">
    <div class="col-12">
        <div class="text-center m-b-20">
            <h2 class="display-7"><b>Alur Partisipasi Program Pembangunan</b></h2>
        </div>
            <div class="card">
               <div class="col-md-12">
                    <a class="image-popup-no-margins" href="<?php echo base_url('themes/landingpage/') ?>assets/images/big/Persyaratan-TJSL.png"> <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/Persyaratan-TJSL.png" alt="image" class="img-responsive" style="height: 120%"/> </a>
                </div>
            </div>
            <br><br><br>
            <div class="card">
               <div class="col-md-12">
                    <iframe width="100%" height="628" src="https://www.youtube.com/embed/12FkTIwIFTA">
                    </iframe> 
                </div>
            </div>
    </div>
<br/><br/><br/><br/>
</div>
<!-- ///// -->
<div class="container terasi">
    <div class="text-center m-b-20">
        <!--<small class="text-info">ALMOST COVERED EVERYTHING</small>-->
        <h2 class="display-7">Berita Terbaru</h2>
    </div>
<br/>
<!-- Row -->
            <!-- <div class="row"> -->
                <div class="col-12">
                    <!-- Row -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-6 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/img1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-6 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url('themes/landingpage/') ?>assets/images/big/img2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                    </div>
                    <!-- Row -->
                </div>
            <!-- </div> -->
            <!-- End Row -->
        </div>
<!-- Logo  -->
<div class="row light-green" >
<div class="container">
    <div class="col-md-12">
        <div class="text-center m-b-40">
                <h2 class="banner-tulisan"> Mitra Kami </h2>
        </div>
<!-- <div class="max-width"> -->
    <div class="row ">
        <div class="col-md-3 text-center">
            <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo.png" width="150">
        </div>
        <div class="col-md-3 text-center">
            <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo.png" width="150">
        </div>
        <div class="col-md-3 text-center">
            <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo.png" width="150">
        </div>
        <div class="col-md-3 text-center">
            <img src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo.png" width="150">
        </div>
    </div>
<!-- </div> -->
</div>
</div>
</div>


    <br/>
    <br/>
    <br/>




</div>
</div>

<div class="row">
    <div class="col-md-12 call-to-action footer-light-green">
        <div class="fix-width">
            <div class="row">
                <div class="col-md-6 m-t-20 m-b-10"><span>Dasar Hukum</span></div>
                <div class="col-md-3 align-self-center text-right"><a href="https://themeforest.net/item/admin-press-the-ultimate-powerful-bootstrap-4-admin-template/20470856?ref=MARUTI" target="_blank" class="btn btn-outline btn-rounded btn-default buy-btn m-t-10 m-b-10">Download Perda No. 13 Tahun 2013 </a></div>
                <div class="col-md-3 align-self-center text-right"><a href="https://themeforest.net/item/admin-press-the-ultimate-powerful-bootstrap-4-admin-template/20470856?ref=MARUTI" target="_blank" class="btn btn-outline btn-rounded btn-default buy-btn m-t-10 m-b-10">Download Perda No. 354 Tahun 2014 </a></div>
            </div>
        </div>
    </div>
</div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
             <!-- footer -->
            <!-- ============================================================== -->
            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
            <footer class="footer row">
                <div class="fix-width">
                        <div class="clearfix"></div>
                        <div class="col-md-12 sub-footer">
                            <span>Copyright 2018. All Rights Reserved by <a class="text-white" href="#" target="_blank">TJSL Cirebon
</a></span>
                            <span class="pull-right">Design & Developed by <a class="text-white" href="http://themedesigner.in" target="_blank">TJSL Cirebon</a></span>
                        </div>
                    <!-- </div> -->
                </div>
            </footer>
            <!-- End footer -->
          
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php
    echo theme_view('footer');
?>