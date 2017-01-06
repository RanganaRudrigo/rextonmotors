<?php
/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 12/29/2016
 * Time: 1:48 PM
 */
?>
<!-- Header Top -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="header-top-left form-inline col-lg-6 col-md-5 col-sm-6 compact-hidden hidden-sm hidden-xs">
                <div class="form-group navbar-welcome " >
                    Welcome to The Micro World - Satellite Equipments.
                </div>
            </div>
            <div class="header-top-right collapsed-block text-right col-lg-6 col-md-7 col-sm-12 col-xs-12 compact-hidden">
                <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                <div class="tabBlock" id="TabBlock-1">
                    <ul class="top-link list-inline">
                        <li class="account btn-group" id="my_account" onclick="window.location.href='<?= base_url('Home') ?>'">
                            <a href="<?= base_url('Home') ?>"  class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">Home</span>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="mailto:info@microworld.lk" id="wishlist-total" class="top-link-wishlist" >
                                <span class="hidden-xs">info@microworld.lk</span>
                            </a>
                        </li>
                        <li class="checkout"><a href="" class="top-link-checkout" title="Checkout">
                                <span class="hidden-xs">+94 770 834 008</span></a></li>

                    </ul>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Header Top -->

<!-- Header center -->
<div class="header-center left">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="navbar-logo col-md-4-1 col-sm-12 col-xs-12">
                <a href="<?= base_url('Home') ?>" >
                    <img src="<?= base_url('media/images/') ?>logo.png" title="Your Store" alt="Your Store" />

                </a>
            </div>
            <!-- //end Logo -->

            <!-- Main Menu -->
            <div class="megamenu-hori navbar-menu col-lg-6 col-md-7 col-sm-6 col-xs-6">
                <div class="responsive so-megamenu ">
                    <nav class="navbar-default">
                        <div class=" container-megamenu  horizontal">

                            <div class="navbar-header">
                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                Navigation
                            </div>

                            <div class="megamenu-wrapper">
                                <span id="remove-megamenu" class="fa fa-times"></span>
                                <div class="megamenu-pattern">
                                    <div class="container">
                                        <ul class="megamenu " data-transition="slide" data-animationtime="250">

                                            <li class="with-sub-menu hover">

                                                <a href="<?= base_url('About-Us') ?>" class="clearfix">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="with-sub-menu hover">
                                                <a href="<?= base_url('Products') ?>" class="clearfix">
                                                    produts
                                                    <div class="caret"></div>
                                                </a>
                                                <div class="sub-menu" style="width: 40%; ">
                                                    <div class="content" >
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <ul class="row-list">
                                                                    <?php foreach ($categories_menu as $k => $category_list): ?>
                                                                    <li>
                                                                        <a class="subcategory_item" href="<?= base_url('Products/').url_title($category_list->CategoryTitle).'/'.$category_list->CategoryId ?>">
                                                                            <?= $category_list->CategoryTitle ?>
                                                                        </a>
                                                                    </li>
                                                                    <?php endforeach; ?>

                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="with-sub-menu hover">
                                                <a href="<?= base_url('Packages') ?>" class="clearfix">
                                                    Packages

                                                </a>

                                            </li>
                                            <li class="with-sub-menu hover">
                                                <a href="<?= base_url('IP-Tv') ?>">Ip Tv </a>

                                            </li>
                                            <li class="with-sub-menu hover">

                                                <a href="<?= base_url('Services') ?>" class="clearfix">
                                                    Services
                                                </a>

                                            </li>
                                            <li class="">

                                                <a href="<?= base_url('Contact-Us') ?>" class="clearfix">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- //Main Menu -->

            <!-- Secondary menu -->
            <div class="col-md-3-1 col-sm-6 col-xs-6 shopping_cart pull-right">
                <!--cart-->
                <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                        <div class="shopcart">
                            <span class="handle pull-left"></span>
                            <span class="title">Hotline</span>
                            <p class="text-shopping-cart cart-total-full">+94 777 412 483</p>
                        </div>
                    </a>


                </div>
                <!--//cart-->
            </div>
        </div>

    </div>
</div>
<!-- //Header center -->

<!-- Header Bottom -->
<div class="header-bottom compact-hidden">
    <div class="container">
        <div class="row">

            <div class="sidebar-menu col-md-3 col-sm-6 col-xs-8 ">
                <div class="responsive so-megamenu ">
                    <div class="so-vertical-menu no-gutter compact-hidden">
                        <nav class="navbar-default">
                            <div class="container-megamenu vertical open">
                                <div id="menuHeading">
                                    <div class="megamenuToogle-wrapper">
                                        <div class="megamenuToogle-pattern">
                                            <div class="container">
                                                <div>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                All Categories
                                                <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-header">
                                    <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    All Categories
                                </div>
                                <div class="vertical-wrapper" >
                                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container">
                                            <ul class="megamenu">

                                                <?php foreach ($menu as $k => $category): ?>
                                                <li class="item-vertical style1 with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="<?= base_url('Products/').url_title($category->CategoryTitle).'/'.$category->CategoryId ?>" class="clearfix">
                                                        <img src="<?= base_url('media/images/') ?>5.png" alt="icon">
                                                        <span> <?= $category->CategoryTitle ?></span>


                                                        <?php if(count($category->sub)> 0){ ?>
                                                        <b class="caret"></b>
                                                        <?php } ?>
                                                    </a>

                                                    <?php if(count($category->sub)> 0){ ?>
                                                    <div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
                                                        <div class="content" style="display: none;">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <?php foreach ($category->sub as $k => $sub): ?>
                                                                                    <li>
                                                                                        <a href="<?= base_url('Product/').url_title($category->CategoryTitle).'/'.url_title($sub->SubCategoryTitle).'/'.$sub->SubCategoryId ?>" class="main-menu">
                                                                                            <?= $sub->SubCategoryTitle ?>
                                                                                        </a>
                                                                                    </li>
                                                                                    <?php endforeach; ?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                                </li>


                                                <?php endforeach; ?>



                                                <li class="loadmore">
                                                    <i class="fa fa-plus-square-o"></i>
                                                    <span class="more-view">More Categories</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>

            <!-- Search -->
            <div class="header-bottom-right  col-md-9 col-sm-6 col-xs-4 ">
                <div id="sosearchpro" class="col-sm-7 search-pro">
                    <form method="GET" action="<?= base_url('Products/Search?');?>">
                        <div id="search0" class="search input-group">
                            <div class="select_category filter_type icon-select">
                                <select class="no-border" name="category_id">
                                    <option value=""> Select Category</option>
                                    <?php foreach ($categories as $k => $cate_list_search): ?>
                                    <option value="<?= $cate_list_search->CategoryId ?>" <?= set_value('category_id', $this->input->get('category_id')) == $cate_list_search->CategoryId ? "selected" : "" ?> >
                                        <?= $cate_list_search->CategoryTitle ?>
                                    </option>
                                    <?php endforeach; ?>


                                </select>
                            </div>

                            <input class="autosearch-input form-control" type="text" value="<?= set_value('key',$this->input->get('key')) ?>" size="50" autocomplete="off" placeholder="Search" name="key">
								<span class="input-group-btn">
								<input type="submit" class="button-search btn btn-primary " value="Search"><i class="fa fa-search"></i></input>
								</span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //end Search -->

        </div>
    </div>

</div>

