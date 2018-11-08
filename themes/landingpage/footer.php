 <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/morrisjs/morris.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/js/dashboard1.js"></script>
    <!-- Magnific popup JavaScript -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
    <!-- ============================================================== -->
    <!-- google maps api -->
    <!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&sensor=true"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgP7Og3t7CZhdJdxMQjv3d5HKHuqWj0fc&callback=myMap"></script>
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/gmaps/jquery.gmaps.js"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- slect 2 -->
    <script src="<?php echo base_url('themes/landingpage/') ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>


    <script type="text/javascript">

    // Toggle tranparent navbar when the user scrolls the page

      $(window).scroll(function() {
        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
        {
            $('.linked').addClass('activate');
            // $('.opaque-navbar').css("padding-top", "-20px");
            $('.scroll-sidebar').css("margin-top", "-60px");
            $('.left-sidebar').css("box-shadow", "0 12px 20px -10px rgba(154, 158, 154, 0.3), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(21, 8, 13, 0.2)");

            // box-shadow: 0 12px 20px -10px rgba(159, 0, 255, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(21, 8, 13, 0.2);

        } else {
            $('.linked').removeClass('activate')
            // $('.opaque-navbar').css("padding-top", "0px");
            $('.scroll-sidebar').css("margin-top", "0px");
            $('.left-sidebar').css("box-shadow", "1px 0px 20px rgba(0, 0, 0, 0.08)");


        }
      });

    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();

        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>

    <?php echo Assets::js(); ?>

</body>

</html>
