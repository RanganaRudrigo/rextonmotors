
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
            <?php if($main_cate_sub)
                    echo $main_cate_sub;
            ?>

        </ul>

        <div class="row">

            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">
                <h3 class="offset_title">Featured Products</h3>
                <div class="products-category">







                    <!--changed listings-->
                    <div class="products-list row list">

                        <?php foreach ($products as $product): ?>

                        <div class="product-layout col-md-3 col-sm-4 col-xs-12 ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container lazy second_img ">
                                        <img data-src="<?= UP.$product->Image ?>" class="img-responsive" />
                                        <img data-src="<?= UP.$product->Image ?>" class="img_0 img-responsive" />
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4>
                                            <a href="<?= base_url().'Product-Details/'.url_title($product->ProductTitle).'/'.$product->ProductId?>">
                                                <?= $product->ProductTitle ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="button-group">
                                        <a href="<?= base_url().'Product-Details/'.url_title($product->ProductTitle).'/'.$product->ProductId?>" class="addToCart" type="button" data-toggle="tooltip" title="Read More" >
                                            <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>					<!--// End Changed listings-->
                    <!-- Filters -->
                    <div class="product-filter product-filter-bottom filters-panel" >
                        <div class="row">
                            <div class="col-md-2 hidden-sm hidden-xs">

                            </div>
                            <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                                <div class="form-group" style="margin: 7px 10px">Showing <?= $total_count ?> (<?= $pages ?> Pages)</div>
                            </div>
                            <div class="box-pagination col-md-3 col-sm-4 text-right">
                                <ul class="pagination">
                                    <?= $links; ?>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- //end Filters -->

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