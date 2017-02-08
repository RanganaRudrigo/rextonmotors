<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php $this->view('inc/header_tag_top'); ?>
    <style>
        .page-banner {background-image:url('<?= base_url('media/images/contact_us_banner_final.jpg')?>')}
    </style>
</head>
<body class="boxed-layout pt-20 pb-40 pt-sm-0" data-bg-img="<?= base_url('media/images/') ?>pattern/p13.png">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <!--<div id="preloader">
        <div id="spinner">
            <img alt="" src="<?/*= base_url('media/images/') */?>preloaders/10.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>-->

    <!-- Header -->
    <header id="header" class="header">
        <?php $this->view('inc/site_header_main'); ?>
    </header>

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <div class="page-banner">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Brands</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="product">
                            <div class="col-md-5">
                                <div class="product-image">
                                    <div class="zoom-gallery">
                                        <a href="<?=UP.$details->Image?>" title="<?= $details->ServiceTitle ?>">
                                            <img src="<?=UP.$details->Image?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-summary">
                                    <h2 class="product-title"><?= $details->ServiceTitle ?></h2>


                                    <div class="short-description">
                                        <p>
                                            <?= $details->ShortDescription ?>
                                        </p>
                                    </div>
<!--                                    <div class="tags"><strong>SKU:</strong> EA34</div>-->



                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="horizontal-tab product-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#details" data-toggle="tab">Description</a></li>
                                        <li><a href="#video" data-toggle="tab" style="display: <?= ($details->VideoEmbedCode == '') ? 'none' : ''; ?>">You Tube Video</a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="details">
                                            <p>
                                                <?= $details->Description ?>
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="video">
                                            <?= $details->VideoEmbedCode ?>
                                        </div>

                                    </div>

                                    <div id="grid" class="gallery-isotope grid-4 gutter mt-30 clearfix">


                                        <?php $MoreImage = (array) json_decode($details->MoreImage ); ?>
                                        <?php foreach ( $MoreImage as $img): ?>
                                        <div class="gallery-item wheel">
                                            <div class="work-gallery">
                                                <div class="gallery-thumb">
                                                    <img class="img-fullwidth" alt="" src="<?= UP. $img ?>">
                                                    <div class="gallery-overlay"></div>
                                                    <div class="gallery-contect">
                                                        <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                            <li>
                                                                <a data-rel="prettyPhoto" href="<?= UP. $img ?>">
                                                                    <i class="fa fa-arrows"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-30">
                            <h3 class="line-bottom">Our Services</h3>
                            <div class="row multi-row-clearfix">
                                <div class="products related">
                                    <?php foreach ( $related_products as $related_product): ?>

                                    <div class="col-sm-6 col-md-3 col-lg-3 mb-30">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <img alt="" src="<?=UP.$related_product->Image?>" class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="<?= base_url().'Service-Details/'.url_title($related_product->ServiceTitle).'/'.$related_product->ServiceId?>">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="<?= base_url().'Service-Details/'.url_title($related_product->ServiceTitle).'/'.$related_product->ServiceId?>">
                                                    <h5 class="product-title"> <?= $related_product->ServiceTitle ?></h5>
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
        document.getElementById("service").className = "active";
    }
</script>

</body>
</html>