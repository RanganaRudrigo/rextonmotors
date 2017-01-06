
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
            <li><a href="">Packages</a></li>



        </ul>

        <div class="row">

            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">
                <h3 class="offset_title">Featured Products</h3>
                <div class="products-category">







                    <!--changed listings-->
                    <div class="products-list row list">

                        <div class="product-layout col-md-8 col-sm-4 col-xs-12 ">
                            <div class="panel-group" id="accordion">
                                <?php foreach ($iptv as $i=> $itv): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed" href="#accordion-<?= $i+1 ?>" aria-expanded="false">
                                                    <?= $itv->CountryTitle; ?> - <?= $itv->IptvTitle; ?>
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="accordion-<?= $i+1 ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">

                                                        <div class="feature-box well">
                                                            <img src="<?= UP.$itv->Image; ?>" class="img-thumbnail" width="60px">
                                                            <div class="feature-content">
                                                                <h4> <?= $itv->CountryTitle; ?> - <?= $itv->IptvTitle; ?></h4>
                                                                <p> <?= $itv->Description ?></p>

                                                            </div>
                                                        </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>



                            </div>
                        </div>

                        <div class="product-layout col-md-4 col-sm-4 col-xs-12 ">
                            <div>
                                <a href="#"><img src="http://microworld.dev/media/images/vidcon.jpg" alt="banner1"></a>
                            </div>
                            <div class="module titleLine">
                                <h3 class="modtitle">Our Services</h3>
                                <div class="modcontent">
                                    <div class="block-clientsay block ">
                                        <ul class="simple-ul">
                                            <li>Recharge service for all Dish TVs</li>
                                            <li>Local TV antenna installation
                                                Watch all the channels crystal clear</li>
                                            <li>TV brackets installation for
                                                LED/LCD TVs
                                            </li>
                                            <li>Satellite TV system installation and repairs
                                                <!--<ul>
                                                    <li>Libero massa
                                                        dapibus
                                                        dui,
                                                        eu</li>
                                                    <li>Celerisque
                                                        nec,
                                                        rhoncus
                                                        eget</li>
                                                    <li>Praesent
                                                        vitae
                                                        dui</li>

                                                </ul> -->
                                            </li>
                                            <li>DMaster TV antenna system
                                                Get one antenna for all your TV sets</li>
                                            <li>Large dish antenna installation
                                                China, Korea, Maldive and Many European channels</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">Latest Product</h3>
                                <div class="modcontent ">
                                    <?php foreach ( $related_products as $related_product): ?>

                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>">
                                                        <img src="<?=UP.$related_product->Image?>"  class="img-responsive" style="width: 100px; height: 82px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>"> <?= $related_product->ProductTitle ?></a></h4>

                                                    </div>

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
<?php $this->view('inc/right_side_social_bar.php'); ?>



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