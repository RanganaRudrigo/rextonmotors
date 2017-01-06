<?php
/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 12/29/2016
 * Time: 1:49 PM
 */
?>
<div class="container">
    <div class="row">
        <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
            <div class="slider-container ">
                <div id="so-slideshow" >
                    <div class="module slideshow">
                        <?php foreach ($sliders as $slider): ?>
                        <div class="item">
                            <a href="#"><img src="<?= UP . $slider->Image ?>" alt="slider1" class="img-responsive"></a>
                        </div>
                        <?php endforeach; ?>
                        <div class="item">
                            <a href="#"><img src="<?= base_url('media/images/') ?>banner6.jpg" alt="slider2" class="img-responsive"></a>
                        </div>

                        <div class="item">
                            <a href="#"><img src="<?= base_url('media/images/') ?>banner4.jpg" alt="slider3" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="loader"></div>
                </div>



            </div>
        </div>
    </div>
</div>
