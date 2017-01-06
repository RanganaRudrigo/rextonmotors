<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('inc/header_tag.php'); ?>
</head>

<body class="common-home res layout-home2">
<div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">

        <?php $this->view('inc/site_header.php'); ?>

    </header>
    <!-- //Header Container  -->
    <!-- Block Spotlight1  -->
    <section class="so-spotlight1">

        <?php $this->view('inc/site_slider.php'); ?>

    </section>
    <!-- //Block Spotlight1  -->

    <!-- Block Spotlight2  -->
    <section class="so-spotlight2">
        <div class="container">
            <div class="row">
                <div class="news-letter col-md-3 col-sm-12 col-xs-12">
                    <img src="<?= UP.$home_addz_01->Image; ?>" class="img img-responsive" />
                </div>
                <div class="banner-html  hidden-xs col-md-9 col-sm-12 col-xs-12">
                    <div class="module">
                        <div class="modcontent clearfix">
                            <div class="m-banner">
                                <div class="m-banner-right">
                                    <div class="m-banner2 banners">
                                        <div>
                                            <a href="<?= UP.$home_addz_01->AddURL; ?>"><img src="<?= UP.$home_addz_02->Image; ?>" alt="banner1"></a>
                                        </div>
                                    </div>

                                    <div class="m-banner2 banners">
                                        <div>
                                            <a href="<?= UP.$home_addz_01->AddURL; ?>"><img src="<?= UP.$home_addz_03->Image; ?>" alt="banner1"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-banner1 banners hidden-xs">
                                    <div>
                                        <a href="<?= UP.$home_addz_01->AddURL; ?>"><img src="<?= UP.$home_addz_04->Image; ?>" alt="banner1"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Block Spotlight2  -->

    <!-- Main Container  -->
    <div class="main-container container">

        <div class="row">
            <div id="content" class="col-md-9 col-sm-12 col-xs-12">

                <div class="module tab-slider titleLine">
                    <h3 class="modtitle">Our Product</h3>
                    <div id="so_listing_tabs_3" class="so-listing-tabs first-load module">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap ">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected">Local Tv Antenna	</span> <span class="ltabs-tab-arrow">?</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <?php foreach ($our_product_1 as $i=> $pro1): ?>
                                            <li class="ltabs-tab <?= ($i == 0) ? 'tab-sel' : ''; ?>" data-category-id="<?= $pro1->CategoryId; ?>" data-active-content=".items-category-<?= $pro1->CategoryId; ?>"> <span class="ltabs-tab-label"> <?= $pro1->CategoryTitle; ?></span> </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                            <div class="ltabs-items-container" >
                                <!--Begin Items-->
                                <?php foreach ($our_product_1 as $i=> $pro1): ?>


                                <div class="ltabs-items <?= ($i == 0) ? ' ltabs-items-selected' : ''; ?> items-category-<?= $pro1->CategoryId; ?> grid" data-total="10">
                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <?php foreach ($pro1->product as $val): ?>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= UP.$val->Image ?>"   class="img-responsive" />
                                                        <img src="<?= UP.$val->Image ?>"   class="img_0 img-responsive" />
                                                    </div>

                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="<?= base_url().'Product-Details/'.url_title($val->ProductTitle).'/'.$val->ProductId?>">
                                                                <?= $val->ProductTitle ?></a></h4>
                                                    </div>

                                                    <div class="button-group">
                                                        <a href="<?= base_url().'Product-Details/'.url_title($val->ProductTitle).'/'.$val->ProductId?>" class="addToCart" type="button" data-toggle="tooltip" title="Read More" >
                                                            <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Read More</span>
                                                        </a>

                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <?php endforeach; ?>


                                    </div>

                                </div>
                                <?php endforeach; ?>

                            </div>
                            <!--End Items-->


                        </div>

                    </div>
                </div>


                <div class="module">
                    <div class="modcontent clearfix">
                        <div class="banners">
                            <div>
                                <a href="<?= UP.$home_addz_05->AddURL; ?>"><img src="<?= UP.$home_addz_05->Image; ?>" alt="left-image"></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="module tab-slider titleLine" >
                    <h3 class="modtitle">Products</h3>
                    <div id="so_listing_tabs_4" class="so-listing-tabs first-load module">
                        <div class="ltabs-wrap ">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected">Local Tv Anntena	</span> <span class="ltabs-tab-arrow">?</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <?php foreach ($our_product_2 as $k=> $pro2): ?>
                                                <li class="ltabs-tab <?= ($k == 0) ? 'tab-sel' : ''; ?>" data-category-id="<?= $pro2->CategoryId; ?>" data-active-content=".items-category-<?= $pro2->CategoryId; ?>"> <span class="ltabs-tab-label"> <?= $pro2->CategoryTitle; ?></span> </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                            <div class="ltabs-items-container">
                                <!--Begin Items-->
                                <?php foreach ($our_product_2 as $k=> $pro2): ?>
                                <div class="ltabs-items  <?= ($k == 0) ? ' ltabs-items-selected' : ''; ?> items-category-<?= $pro2->CategoryId; ?> grid" data-total="10">
                                    <div class="ltabs-items-inner ltabs-slider ">
                                    <?php foreach ($pro2->product2 as $val2): ?>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= UP.$val2->Image ?>"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= UP.$val2->Image ?>"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="text-center">
                                                            <a href="<?= base_url().'Product-Details/'.url_title($val2->ProductTitle).'/'.$val2->ProductId?>">
                                                                <?= $val2->ProductTitle; ?>
                                                            </a>
                                                        </h4>

                                                    </div>

                                                    <div class="button-group " style="margin-left:2%;" >
                                                        <a href="<?= base_url().'Product-Details/'.url_title($val2->ProductTitle).'/'.$val2->ProductId?>" class="addToCart" type="button" data-toggle="tooltip" title="Read More" >
                                                            <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Read More</span>
                                                        </a>

                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                       <?php endforeach; ?>
                                    </div>

                                </div>
                                <?php endforeach; ?>

                            </div>
                            <!--End Items-->


                        </div>

                    </div>
                </div>



            </div>
            <aside class="col-md-3 col-xs-12  content-aside right_column" >
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
                <div class="module">
                    <div class="modcontent clearfix">
                        <div class="">
                            <div>
                                <img src="<?= UP.$home_addz_06->Image; ?>" alt="banner1">
                            </div>
                        </div>

                    </div>
                </div>

            </aside>

        </div>
    </div>
    <!-- //Main Container -->
    <!-- Block Spotlight3  -->

    <!-- //Block Spotlight3  -->


    <!-- Footer Container -->
    <footer class="footer-container" >

        <?php $this->view('inc/site_footer.php'); ?>

    </footer>
    <!-- //end Footer Container -->
    <!-- //end Footer Container -->

</div>
<!-- Social widgets -->
<?php $this->view('inc/right_side_social_bar.php'); ?>

<!-- End Social widgets -->

<!-- Cpanel Block -->






<link rel='stylesheet' property='stylesheet'  href='<?= base_url('media/css/') ?>cpanel.css' type='text/css' media='all' />

<!-- Preloading Screen -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloading Screen -->


<?php $this->view('inc/footer_js.php'); ?>

<?php foreach ($our_product_1 as $i=> $pro1): ?>
<script>
    $(document).ready(function($) {
        var $tag_id = $('#so_listing_tabs_3'),
            parent_active = $('.items-category-<?= $pro1->CategoryId; ?>', $tag_id),
            total_product = parent_active.data('total'),
            tab_active = $('.ltabs-items-inner', parent_active),
            nb_column0 = 3,
            nb_column1 = 2,
            nb_column2 = 2,
            nb_column3 = 1,
            nb_column4 = 1;
        tab_active.owlCarousel2({
            nav: true,
            dots: false,
            margin: 25,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 5000,
            navRewind: true,
            navText: ['', ''],
            responsive: {
                0: {
                    items: nb_column4,
                    nav: total_product <= nb_column4 ? false : ((true) ? true : false),
                },
                480: {
                    items: nb_column3,
                    nav: total_product <= nb_column3 ? false : ((true) ? true : false),
                },
                768: {
                    items: nb_column2,
                    nav: total_product <= nb_column2 ? false : ((true) ? true : false),
                },
                992: {
                    items: nb_column1,
                    nav: total_product <= nb_column1 ? false : ((true) ? true : false),
                },
                1200: {
                    items: nb_column0,
                    nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                },
            }
        });
    });
</script>

<?php endforeach; ?>


<?php foreach ($our_product_2 as $k=> $pro2): ?>
    <script>
        $(document).ready(function($) {
            var $tag_id = $('#so_listing_tabs_4'),
                parent_active = $('.items-category-<?= $pro2->CategoryId; ?>', $tag_id),
                total_product = parent_active.data('total'),
                tab_active = $('.ltabs-items-inner', parent_active),
                nb_column0 = 3,
                nb_column1 = 2,
                nb_column2 = 2,
                nb_column3 = 1,
                nb_column4 = 1;
            tab_active.owlCarousel2({
                nav: true,
                dots: false,
                margin: 25,
                loop: false,
                autoplay: false,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 5000,
                navRewind: true,
                navText: ['', ''],
                responsive: {
                    0: {
                        items: nb_column4,
                        nav: total_product <= nb_column4 ? false : ((true) ? true : false),
                    },
                    480: {
                        items: nb_column3,
                        nav: total_product <= nb_column3 ? false : ((true) ? true : false),
                    },
                    768: {
                        items: nb_column2,
                        nav: total_product <= nb_column2 ? false : ((true) ? true : false),
                    },
                    992: {
                        items: nb_column1,
                        nav: total_product <= nb_column1 ? false : ((true) ? true : false),
                    },
                    1200: {
                        items: nb_column0,
                        nav: total_product <= nb_column0 ? false : ((true) ? true : false),
                    },
                }
            });
        });
    </script>

<?php endforeach; ?>

</body>
</html>