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
  <div id="preloader">
    <div id="spinner"> <img alt="" src="<?= base_url('media/images/') ?>preloaders/10.gif"> </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
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

                            <h3 class="title text-white">Contact Us</h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body"> <strong>Address</strong>
                    <p>G-2, Arnorld Rathnayake Mawatha, Colombo-10, Sri Lanka.</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body"> <strong>Telephone</strong>
                    <p>+94 112 684 374</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>E-MAIL</strong>
                    <p>info@rextonmorters.lk</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <!--<div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-film text-theme-colored"></i></a>

                                    <div class="media-body"> <strong>Make a Video Call</strong>

                                        <p>ThemeMascotSkype</p>

                                    </div>

                                </div>-->
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Happy to hear from you!</h3>
            <?=@$message?>
            <p class="mb-20">We provide best quality products and services to our customers, We are always available to fulfill your needs.<br><br></p>
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
          <!--
                    <div

                        data-address="G-2, Arnorld Rathnayake Mawatha, Colombo-10, Sri Lanka"

                        data-popupstring-id="#popupstring1"

                        class="map-canvas autoload-map"

                        data-mapstyle="style8"

                        data-height="400"

                        data-latlng="6.922957, 79.862866"

                        data-title="Rexton Motors"

                        data-zoom="15"

                        data-marker="<?= base_url('media/') ?>images/map-marker.png">

                    </div>

                    <div class="map-popupstring hidden" id="popupstring1">

                        <div class="text-center">

                            <h3>We are Here!</h3>

                            <p>G-2, Arnorld Rathnayake Mawatha, Colombo-10, Sri Lanka</p>

                        </div>

                    </div>-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.3646181844304!2d79.86154625549347!3d6.922935894997978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259127abbd79d%3A0x7a1b3993e0b47847!2sRexton+Motors!5e0!3m2!1sen!2slk!4v1485257172781" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
