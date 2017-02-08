<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <?php $this->view('inc/header_tag_top'); ?>
</head>
<body class="boxed-layout pt-20 pb-40 pt-sm-0" data-bg-img="<?= base_url('media/images/') ?>pattern/p13.png">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="<?= base_url('media/images/') ?>preloaders/10.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
        <?php $this->view('inc/site_header_main'); ?>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
        <div style="background-image:url('http://rextonmotors.lk/site/media/images/contact_us_banner_final.jpg') ">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Contact</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: inner-header -->
<!--        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">-->
<!-- <div class="container pt-90 pb-50">-->
<!--                <!-- Section Content -->
<!--                <div class="section-content pt-100">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h3 class="title text-white">Contact</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <!-- Divider: Contact -->
        <section class="divider">
            <div class="container">
                <div class="row pt-30">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                                        <p>#405, Lan Streen, Los Vegas, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                        <p>+325 12345 65478</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                                        <p>supporte@yourdomin.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-film text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>Make a Video Call</strong>
                                        <p>ThemeMascotSkype</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
                        <?=@$message?>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</p>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="" method="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                                <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->

                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Google Map -->
        <section>
            <div class="container-fluid pt-0 pb-0">
                <div class="row">

                    <!-- Google Map HTML Codes -->
                    <div
                        data-address="121 King Street, Melbourne Victoria 3000 Australia"
                        data-popupstring-id="#popupstring1"
                        class="map-canvas autoload-map"
                        data-mapstyle="style8"
                        data-height="400"
                        data-latlng="-37.817314,144.955431"
                        data-title="sample title"
                        data-zoom="12"
                        data-marker="<?= base_url('media/') ?>images/map-marker.png">
                    </div>
                    <div class="map-popupstring hidden" id="popupstring1">
                        <div class="text-center">
                            <h3>CharityFund Office</h3>
                            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                        </div>
                    </div>
                    <!-- Google Map Javascript Codes -->
                    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                    <script src="<?= base_url('media/') ?>js/google-map-init.js"></script>

                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <?php $this->view('inc/site_footer_main'); ?>

        <?php $this->view('inc/site_footer_copyright'); ?>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<?php $this->view('inc/footer_js'); ?>

<script type="text/javascript">

    window.onload = function()
    {
        document.getElementById("contact").className = "active";
    }
</script>

</body>
</html>