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

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">About Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row mt-50">
                        <div class="col-md-5">
                            <div class="class-item1">
                                <div class="thumb"> <a href="#">
                                        <img class="img-responsive img-fullwidth mb-20" src="http://placehold.it/450x450" alt="..."></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mt-20">
                            <div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Best Services We Provided </span>
                                <h3 class="text-uppercase text-theme-colored font-weight-600 letter-space-2 mt-5">Whell Alignment</h3>
                                <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30 text-justify">
                        <div class="col-md-7">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>
                        </div>
                        <div class="col-md-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro placeat totam eum iusto, dolore velit? Voluptas autem asperiores soluta ducimus, tempore dolorem molestias eaque iusto nesciunt, qui velit quaerat? Ratione error fugit sapiente at doloremque modi voluptatibus et quasi iure quas. Nulla, similique dolores fugit ex. Quia, dolores itaque minus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Divider  -->
        <section class="divider parallax layer-overlay overlay-theme-colored-7" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-content text-center">
                            <h2 class="text-white letter-space-4 font-32">Your Personal <span class="text-theme-color-2">Expert</span></h2>
                            <h3 class="text-white text-uppercase font-weight-300 mt-0">I will customize your workouts so that you can achieve your training goals. It's Truly Personal</h3>
                            <a href="" class="btn btn-default mt-10 btn-md text-uppercase"> Contact Me</a> </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Features -->
        <section class="bg-lighter">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Features</span></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-scissors text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Less CSS</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-pen text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Special ShortCode</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-tools text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Easy Customiz</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-phone text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Responsive</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-vector text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">W3 validation</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box p-0 mb-30">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-light text-white"></i>
                                        </a>
                                        <div class="icon-box-details ml-sm-0">
                                            <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Retina Ready</h5>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Working Skill</span></h3>
                            <div class="progressbar-container">
                                <div class="progress-item mb-30">
                                    <div class="progress-title">
                                        <h5 class="text-uppercase letter-space-2">Engine</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-theme-colored" data-percent="85"></div>
                                    </div>
                                </div>
                                <div class="progress-item mb-30">
                                    <div class="progress-title">
                                        <h5 class="text-uppercase letter-space-2">Oil</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-theme-colored" data-percent="45"></div>
                                    </div>
                                </div>
                                <div class="progress-item mb-30">
                                    <div class="progress-title">
                                        <h5 class="text-uppercase letter-space-2">Paint</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-theme-colored" data-percent="95"></div>
                                    </div>
                                </div>
                                <div class="progress-item mb-30">
                                    <div class="progress-title">
                                        <h5 class="text-uppercase letter-space-2">Air Condition</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-theme-colored" data-percent="65"></div>
                                    </div>
                                </div>
                                <div class="progress-item mb-30">
                                    <div class="progress-title">
                                        <h5 class="text-uppercase letter-space-2">Brake</h5>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-theme-colored" data-percent="88"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        document.getElementById("about").className = "active";
    }
</script>

</body>
</html>