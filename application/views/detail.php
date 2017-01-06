
<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->view('inc/header_tag.php'); ?>

</head>

<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <?php $this->view('inc/site_header.php'); ?>
    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('Home') ?>"><i class="fa fa-home"></i></a></li>
            <?= $main_cate ?>
            <?= $main_cate_sub ?>
            <li><a ><?= $details->ProductTitle ?></a></li>

        </ul>


        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">

                <div class="product-view row">
                    <div class="left-content-product col-lg-10 col-xs-12">
                        <div class="row">
                            <div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
                                <div class="large-image  ">
                                    <img itemprop="image" class="product-image-zoom" src="<?=UP.$details->Image?>" data-zoom-image="<?=UP.$details->Image?>" >
                                </div>

                                <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                    <?php $MoreImage = (array) json_decode($details->MoreImage ); ?>
                                    <?php foreach ( $MoreImage as $img): ?>
                                    <a data-index="0" class="img thumbnail " data-image="<?= UP. $img ?>" >
                                        <img src="<?= UPT. $img ?>">
                                    </a>
                                    <?php endforeach; ?>


                                </div>

                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1><?= $details->ProductTitle ?></h1>
                                </div>
                                <!-- Review ---->




                                <div class="product-box-desc">
                                    <div class="inner-box-desc">

                                        <p>
                                            <?= $details->ShortDescription ?>

                                        </p>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
                        <div class="module col-sm-12 four-block">
                            <div class="modcontent clearfix">
                                <div class="policy-detail">
                                    <div class="banner-policy">
                                        <div class="policy policy1">
                                            <a href="#"> <span class="ico-policy">&nbsp;</span>	90 day
                                                <br> money back </a>
                                        </div>
                                        <div class="policy policy2">
                                            <a href="#"> <span class="ico-policy">&nbsp;</span>	In-store exchange </a>
                                        </div>
                                        <div class="policy policy3">
                                            <a href="#"> <span class="ico-policy">&nbsp;</span>	lowest price guarantee </a>
                                        </div>
                                        <div class="policy policy4">
                                            <a href="#"> <span class="ico-policy">&nbsp;</span>	shopping guarantee </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  vertical-tabs col-xs-12">
                        <ul class="nav nav-tabs col-lg-2 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review" style="display: <?= ($details->VideoEmbedCode == '') ? 'none' : ''; ?>">You Tube Video</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5" style="display: <?= ($details->Document == '') ? 'none' : ''; ?>">Document</a></li>
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>
                                    <?= $details->Description ?>
                                </p>

                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <?= $details->VideoEmbedCode ?>
                            </div>

                            <div id="tab-5" class="tab-pane fade">
                                <a href="<?= DOC.$details->Document ?>" target="_blank">
                                    <img id="detail-icon-img" src="https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/mimetypes/pdf.png" alt="document, pdf icon" width="64" height="64">

                                </a>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->

                <!-- Related Products -->
                <div class="related titleLine products-list grid module ">
                    <h3 class="modtitle">Related Products  </h3>
                    <div class="releate-products ">

                        <?php foreach ( $related_products as $related_product): ?>
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img  src="<?=UP.$related_product->Image?>"   class="img-responsive" />
                                        <img  src="<?=UP.$related_product->Image?>"   class="img_0 img-responsive" />
                                    </div>


                                    <!--end full quick view block-->
                                </div>

                                <div class="right-block">
                                    <div class="caption">
                                        <h4>
                                            <a href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>">
                                                <?= $related_product->ProductTitle ?>
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="button-group">
                                        <a class="addToCart" type="button" data-toggle="tooltip" title="View More" href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="hidden-xs">View More</span>
                                        </a>

                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <!-- end Related  Products-->


            </div>


        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container">
        <?php $this->view('inc/site_footer.php'); ?>


    </footer>
    <!-- //end Footer Container -->

</div>






<link rel='stylesheet' property='stylesheet'  href='<?= base_url('media/css/') ?>cpanel.css' type='text/css' media='all' />


<!-- Preloading Screen -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloading Screen -->

<?php $this->view('inc/footer_js.php'); ?>

</body>
</html>