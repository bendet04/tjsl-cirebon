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

<!-- End Topbar header -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">

            <ul id="sidebarnav" style="display: flex; justify-content: center; align-items: center">
                <!-- sidebar / menu -->

                <a href="<?php echo base_url();?>" style="float: left; padding:10px" >
                    <span>
                        <img style="height:50px; width:300px;"  src="<?php echo base_url('themes/landingpage/') ?>assets/images/logo.png" class="light-logo" alt="homepage" />
                    </span>
                </a>

                <?php echo theme_view('sidebar/home')?>

                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->

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
    <footer id="footer" class="footer" align="center">
        <br>
        <span>Copyright 2018. All Rights Reserved by <a class="text-white" href="#" target="_blank">TJSL Cirebon</a></span>
    </footer>
    <!-- End footer -->


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
<script>

$(document).ready(function() {

 var docHeight = $(window).height();
 var footerHeight = $('#footer').height();
 var footerTop = $('#footer').position().top + footerHeight;

 if (footerTop < docHeight) {
  $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
 }
});
</script>
