<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>    <?php $this->view('inc/header_tag_top'); ?>
    <style>        .page-banner {
            background-image: url('<?= base_url('media/images/brand_image.jpg')?>')
        }    </style>
</head>
<body class="boxed-layout pt-20 pb-40 pt-sm-0" data-bg-img="<?= base_url('media/images/') ?>pattern/p13.png">
<div id="wrapper" class="clearfix">    <!-- preloader -->
    <div id="preloader">
        <div id="spinner"><img alt="" src="<?= base_url('media/images/') ?>preloaders/10.gif"></div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>
    <!-- Header -->
    <header id="header" class="header">        <?php $this->view('inc/site_header_main'); ?>    </header>
    <!-- Start main-content -->
    <div class="main-content">        <!-- Section: inner-header -->
        <div class="page-banner">
            <div class="container pt-90 pb-50">                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12"><h3 class="title text-white">Brands</h3></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="">
            <div class="container p-30">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="row multi-row-clearfix">
                                <div
                                    class="products">
                                    <?php foreach ($brands as $brand): ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                                            <div class="product">
                                                <div class="product-thumb">
                                                    <a href="<?= base_url('Products-Brand/').url_title($brand->BrandTitle).'/'.$brand->BrandId ?>">
                                                    <img alt="" src="<?= UP . $brand->Image ?>"
                                                                                class="img-responsive img-fullwidth">
                                                    </a>
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <a href="<?= base_url('Products-Brand/').url_title($brand->BrandTitle).'/'.$brand->BrandId ?>">
                                                    <h5 class="product-title"> <?= $brand->BrandTitle ?></h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->    <!-- Footer -->
    <footer id="footer" class="footer"
            data-bg-color="#1f1f1f">
        <?php $this->view('inc/site_footer_main'); ?><?php $this->view('inc/site_footer_copyright'); ?>    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a></div>
<!-- end wrapper --><!-- Footer Scripts --><?php $this->view('inc/footer_js'); ?>
<script type="text/javascript">    window.onload = function () {
        document.getElementById("brand").className = "active";
    }</script>
</body>
</html>