<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>    <?php $this->view('inc/header_tag_top'); ?></head>
<body class="boxed-layout pt-20 pb-40 pt-sm-0" data-bg-img="<?= base_url('media/images/') ?>pattern/p13.png">
<div id="wrapper" class="clearfix">    <!-- preloader -->
    <div id="preloader">
        <div id="spinner"><img alt="" src="<?= base_url('media/images/') ?>preloaders/10.gif"></div>
        <!--<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>  -->    </div>
    <!-- Header -->
    <header id="header" class="header">        <?php $this->view('inc/site_header_main'); ?>    </header>
    <!-- Start main-content -->
    <div class="main-content">        <!-- Section: home -->
        <section id="home">
            <div
                class="rev_slider_wrapper">                <?php $this->view('inc/site_slider_main'); ?>            </div>
        </section>
        <!-- Section: Sevices -->        <!-- Section: About -->
        <section id="about">
            <div class="container mt-0 pt-15">
                <div class="section-content">
                    <div class="row mt-10">
                        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.5s"><h3 class="text-uppercase mt-0 ">Welcome To <span
                                    class="text-theme-color-2">  Rexton Motors! </span></h3>
                            <!--   <p class="lead">We are a small enterprise in imports of vehicle.accessories for the whole sale and retail market. </p>-->
                            <p class="mb-20">The industry leader in automobile multimedia systems, electronics, alarm
                                systems, accessories, care packages, and everything vehicle related,Advance Car Audio is
                                here to help you with anything and everything you need.<br>Our state-of-the art showroom
                                and workshop in Maradana along with our teams of professionals are always ready to do an
                                above par job.<br>Come check us out</p>                            <a
                                href="<?= base_url('Services'); ?>"
                                class="btn btn-colored btn-theme-colored btn-sm mt-20">View Details</a></div>
                        <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/31suApPTAEk"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center bg-color">
            <div class="container pb-20">
                <div class="section-title text-center mb-10">
                    <div class="row">
                        <div class="col-md-12"><h2 class="line-height-1 mt-0 mb-0 pb-20 text-center">Our<span
                                    class="text-theme-color-2"> Services</span></h2></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row features-style1 mt-20">
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>riz_main.jpg"></a>
                                <!-- <i class="flaticon-carfixing-car-washing-machine text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">Car Entertainment Systems</h4>

                                    <p>Car entertainment system is a collection of hardware and software in automobiles
                                        that provides audio or video entertainment.
                                        <!-- In car entertainment originated with car audio systems that consisted of radios and cassette                                         or CD players, and now includes automotive navigation systems,                                         video players, USB and Bluetooth connectivity, Carputers, in-car internet, and WiFi.                                         Once controlled by simple dashboards knobs and dials,                                         ICE systems can include steering wheel audio controls and handsfree voice control.--></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>Music_input.jpg"></a>
                                <!-- <i class="flaticon-carfixing-pistons-cross text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">AV/Aux input to connect
                                        inputs</h4>

                                    <p>Audio connectors and video connectors are electrical connectors (or optical
                                        connectors) - plugs and sockets - for carrying audio signal and video
                                        signal.</p></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>convert_1.jpg"></a>
                                <!-- <i class="flaticon-carfixing-tool-4 text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">Tv conversions of NTCS to
                                        PAL.</h4>

                                    <p>Tv conversions of NTCS to PAL is the process of changing one type of TV system to
                                        another. The most common is from NTSC to PAL or the other way around.</p></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>car_alarm_icon.jpg"></a>
                                <!--  <i class="flaticon-carfixing-tool-7 text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">Car Alarm Installations.</h4>

                                    <p>Car Alarm Installations is an electronic device installed in a vehicle in an
                                        attempt to discourage theft of the vehicle itself, its contents, or both work by
                                        emitting high volume.</p></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>Audio_acc.jpg"></a>
                                <!--  <i class="flaticon-carfixing-transport-6 text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">Car Audio accessories</h4>

                                    <p>Car Audio accessories are the products which use to fix the car audio system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box left media p-0 mr-20 mb-40"><a href="#" class="media-left pull-left">
                                    <img src="<?= base_url('media/images/') ?>bouetooht.jpg"></a>
                                <!-- <i class="flaticon-carfixing-transport-7 text-theme-colored"></i></a>-->
                                <div class="media-body"><h4 class="media-heading heading">Reverse Camera
                                        installations</h4>

                                    <p>Special type of video camera that is produced specifically for the purpose of
                                        being attached to the rear of a vehicle to aid in backing up, and to alleviate
                                        the rear blind spot.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section:why choose us 2 -->        <!-- Section: Services 1 -->        <!-- Section: tickets -->
        <!-- Section: Trainers -->        <!-- Section: Project Start Form -->        <!-- Section: Gallery -->
        <section id="gallery">
            <div class="container pb-15">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><h2 class="text-uppercase mt-0 pb-0 ">Our <span
                                    class="text-theme-color-2"> Products</span></h2></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Works Filter                            <div class="portfolio-filter">                              <a href="#" class="active mb-sm-10" data-filter="*">All</a>                              <a href="#wheel" class="" data-filter=".wheel">Wheel & Tire</a>                              <a href="#oil" class="" data-filter=".oil">Oil</a>                              <a href="#engine" class="" data-filter=".engine">Engine</a>                              <a href="#brake" class="" data-filter=".brake">Brake</a>                            </div>                            <!-- End Works Filter -->
                            <!-- Portfolio Gallery Grid -->
                            <div id="grid"
                                 class="gallery-isotope grid-4 gutter clearfix">                                <?php foreach ($related_products as $related_product): ?>                                <!-- Portfolio Item Start -->
                                    <div class="gallery-item wheel">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb"><img class="img-fullwidth" alt=""
                                                                            src="<?= UP . $related_product->Image ?>">

                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li>
                                                            <a href="<?= base_url() . 'Product-Details/' . url_title($related_product->ProductTitle) . '/' . $related_product->ProductId ?>">
                                                                <i class="fa fa-link"></i> </a></li>
                                                        <li><a data-rel="prettyPhoto"
                                                               href="<?= UP . $related_product->Image ?>"> <i
                                                                    class="fa fa-arrows"></i> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center"><h4
                                                    class="title text-uppercase font-raleway font-weight-500 m-0"><?= $related_product->ProductTitle ?></h4>
                                                <!--   <h5 class="sub-title m-0">-Worked By Brand Name -</h5>-->
                                            </div>
                                        </div>
                                    </div>                                <!-- Portfolio Item End -->                                <?php endforeach; ?>
                            </div>
                            <!-- End Portfolio Gallery Grid -->                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider with logos -->
        <section class="clients ">
            <div class="container pt-10 pb-10 pt-sm-0 pb-sm-0 ">
                <div class="row">
                    <div class="col-md-12">                        <!-- Section: Clients -->
                        <div
                            class="owl-carousel-6col transparent text-center owl-nav-top">                            <?php foreach ($brands as $brand): ?>
                                <div class="item"><a href="#"><img src="<?= UP . $brand->Image ?>" alt=""></a>
                                </div>                            <?php endforeach; ?>                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /slider with logos -->        <!-- Section: Blog -->        <!-- Section: Services -->    </div>
    <!-- end main-content -->    <!-- Footer -->
    <footer id="footer"
            class="footer-container ">        <?php $this->view('inc/site_footer_main'); ?><?php $this->view('inc/site_footer_copyright'); ?>    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a></div>
<!-- end wrapper --><!-- Footer Scripts --><?php $this->view('inc/footer_js'); ?>
<script type="text/javascript">    window.onload = function () {
        document.getElementById("home").className = "active";
    }</script>
</body>
</html>