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

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <!-- <img src="<?php //echo base_url('themes/landingpage/') ?>assets/images/new_logo.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo text -->
                            <img style="height:50px; width:300px;" src="<?php echo base_url('themes/landingpage/') ?>assets/images/new_logo.png" class="light-logo" alt="homepage" />
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


                <?php echo theme_view('nav/home')?>


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


                <?php echo theme_view('sidebar/home')?>


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
        <?php echo isset($content) ? $content : Template::content(); ?>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
    <footer class="footer row">
        <div class="fix-width">
            <div class="col-md-12 call-to-action">
                <br/>
                <br/>
                <div class="fix-width">
                    <div class="row">
                        <div class="col-md-6 m-t-20 m-b-10"><span>Dasar Hukum</span></div>
                        <div class="col-md-3 align-self-center text-right"><a href="https://themeforest.net/item/admin-press-the-ultimate-powerful-bootstrap-4-admin-template/20470856?ref=MARUTI" target="_blank" class="btn btn-outline btn-rounded btn-default buy-btn m-t-10 m-b-10">Download Perda No. 13 Tahun 2013 </a></div>
                        <div class="col-md-3 align-self-center text-right"><a href="https://themeforest.net/item/admin-press-the-ultimate-powerful-bootstrap-4-admin-template/20470856?ref=MARUTI" target="_blank" class="btn btn-outline btn-rounded btn-default buy-btn m-t-10 m-b-10">Download Perda No. 354 Tahun 2014 </a></div>
                    </div>
                </div>
            </div>
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
