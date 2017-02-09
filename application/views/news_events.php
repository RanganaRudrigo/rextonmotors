<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>    <?php $this->view('inc/header_tag_top'); ?>
    <style>        .page-banner {
            background-image: url('<?= base_url('media/images/event.jpg')?>')
        }

        .section-content {
            top: 40px;
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
                        <div class="col-md-12"><h3 class="title text-white">Our Events</h3></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: News & Blog -->
        <section id="news">
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row">                        <?php foreach ($latast_news as $news): ?>
                            <div class="col-sm-6 col-md-4">
                                <article class="post clearfix mb-30 bg-lighter">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb"><img src="<?= UP . $news->Image ?>" alt=""
                                                                           class="img-responsive img-fullwidth"></div>
                                    </div>
                                    <div class="entry-content p-15 pt-10 pb-10">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip"><h4
                                                        class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                        <a href="<?= base_url() . 'News-Event/' . url_title($news->NewsTitle) . '/' . $news->NewsId ?>">                                                            <?= $news->NewsTitle ?>                                                        </a>
                                                    </h4></div>
                                            </div>
                                        </div>
                                        <!--<p class="mt-5">                                        <? /*= $news->ShortDescription */ ?>                                        <a class="text-theme-color-2 font-12 ml-5" href="#"> View Details</a>                                    </p>-->
                                    </div>
                                </article>
                            </div>                        <?php endforeach; ?>
                        <div class="col-md-12">
                            <nav>
                                <ul class="pagination theme-colored">                                    <?= $links; ?>                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->    <!-- Footer -->
    <footer id="footer" class="footer"
            data-bg-color="#1f1f1f">        <?php $this->view('inc/site_footer_main'); ?><?php $this->view('inc/site_footer_copyright'); ?>    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a></div>
<!-- Footer Scripts --><?php $this->view('inc/footer_js'); ?>
<script type="text/javascript">    window.onload = function () {
        document.getElementById("news").className = "active";
    }</script>
</body>
</html>