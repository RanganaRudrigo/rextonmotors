<div class="header-top bg-theme-color-2 sm-text-center">

    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <div class="widget no-border m-0">

                    <ul class="list-inline font-13 sm-text-center mt-5">

                        <li>
                            <a class="text-white" href="#">Welcome To Rexton Motors</a>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="col-md-3">





                <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">

                    <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">

                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>

                        <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>

                        <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>

                        <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="header-middle p-0 bg-lightest xs-text-center">

    <div class="container pt-0 pb-0">

        <div class="row">

            <div class="col-xs-12 col-sm-2 col-md-8">

                <div class="widget no-border m-0">

                    <a href="index-mp-layout1.html" class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10"><img alt="" src="<?= base_url('media/images/') ?>logo-wide.png"></a>

                </div>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-2">

                <div class="widget no-border m-0">

                    <div class="mt-10 mb-10 text-right flip sm-text-center">

                        <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-18"></i> Mail Us Today</div>

                        <a href="#" class="font-12 text-gray"> info@rextonmotors.lk</a>

                    </div>

                </div>

            </div>



            <div class="col-xs-12 col-sm-3 col-md-2">

                <div class="widget no-border m-0">

                    <div class="mt-10 mb-10 text-right flip sm-text-center">

                        <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-18"></i> +94 112 684 374</div>

                        <a href="#" class="font-12 text-gray"> Call us for more details</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="header-nav">

    <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">

        <div class="container">

            <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">

                <ul class="menuzord-menu">

                    <li id="home"><a href="<?= base_url('Home') ?>">Home</a>



                    </li>

                    <li id="about" ><a href="<?= base_url('About-Us') ?>">About Us </a>



                    </li>

                    <li id="service"><a href="<?= base_url('Services') ?>">Services</a>



                    </li>

                    <li id="product"><a href="<?= base_url('Products') ?>">Products </a>
					<ul class="dropdown">

                        <?php
                        foreach($categories as $val):
                        ?>
                      <li><a href="<?=  base_url('Products/').url_title($val->CategoryTitle).'/'.$val->CategoryId ?>"><?= $val->CategoryTitle; ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                    </li>

                    <li id="brand"><a href="<?= base_url('Brands') ?>">Brands</a>



                    </li>

                    <li id="news"><a href="<?= base_url('News-Events') ?>">News &amp Events</a>



                    </li>

                    <li id="contact"><a href="<?= base_url('Contact-Us') ?>">Contact Us</a>



                    </li>





                    </li>

                </ul>

                <ul class="pull-right flip hidden-sm hidden-xs">

                    <li>

                        <!-- Modal: Book Now Starts -->

                        <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15"  href="<?= base_url('Contact-Us') ?>">Call Back Request</a>

                        <!-- Modal: Book Now End -->

                    </li>

                </ul>

                <div id="top-search-bar" class="collapse">

                    <div class="container">

                        <form role="search" action="#" class="search_form_top" method="get">

                            <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">

                            <span class="search-close"><i class="fa fa-search"></i></span>

                        </form>

                    </div>

                </div>

            </nav>

        </div>

    </div>

</div>