<?php
require_once('inc/autoload.php');
if (!isset($_COOKIE["cookie_id"])) {
       setcookie("cookie_id", gen_id(20), time() + 60 * 60 * 24 * 30, '/');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <?php include('pages/metadata.php'); ?>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/select2-bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/pagination.css">
    <link rel="stylesheet" href="/assets/css/superslides.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="">
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-menu">
                    <a href="https://wa.me/923061209000" target="_blank"><i class="fa fa-whatsapp"></i> +92 306 120 9000</a>
                    <a href="mailto:hello@hassanamin.com"><i class="fa fa-envelope-o"></i> hello@hassanamin.com</a>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container main-header-inner">
                <div class="row">
                    <div  class="col-sm-12">
                        <div class="logo">
                        </div>
                    </div>
                    <div class="col-sm-11 main-menu-wapper">
                        <a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
                        <nav id="main-menu" class="main-menu">
                            <ul class="navigation">
                                <li><a href="/">Home</a></li>
                                <li class="menu-item-has-children item-mega-menu">
                                    <a href="#">About Company</a>
                                    <div class="sub-menu mega-menu">
                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-2">
                                                <div class="widget">
                                                    <h3 class="widgettitle">INTECH</h3>
                                                    <ul>
                                                      <li><a href="#">Group Profile</a></li>
                                                      <li><a href="#">CEO Statement</a></li>
                                                      <li><a href="#">Director Statement</a></li>
                                                      <li><a href="#">Brands</a></li>
                                                      <li><a href="#">Production Map</a></li>
                                                      <li><a href="#">History</a></li>
                                                      <li><a href="#">Vision and Mission</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget">
                                                    <a href="#"><img src="/assets/images/megamenus/company.jpg" alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                </li>
                                <?php $Categories->get_category_top(); ?>
                                <li class="menu-item-has-children item-mega-menu">
                                    <a href="#">Download</a>
                                    <div class="sub-menu mega-menu style2">
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-3">
                                                <div class="widget">
                                                    <a href="/catalog-request-form"><img src="/assets/images/megamenus/surgical-catalog.png" alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="widget">
                                                    <a href="/catalog-request-form"><img src="/assets/images/megamenus/dental-catalog.png" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-1">
                        <!-- Mini cart -->
                        <div class="mini-cart" id="cart_container">
                            <a class="icon" href="#">Cart<span class="count">0</span></a>
                            <div class="mini-cart-content">
                                <p class="sub-toal-wapper">
                                    <span><i class="fa fa-shopping-cart"></i> <span class="sub-total">0</span></span>
                                </p>
                                <a href="/cart" class="btn-view-cart">VIEW ENQUIRY CART</a>
                                <a href="#" class="btn-check-out">SUBMIT ENQUIRY</a>
                            </div>
                        </div>
                        <!-- ./Mini cart -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner bg-parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-content text-center">
              <h1 class="text-left">Welcome <span>to</span> demo <span>ecommerce website</span>.</h1>
              <h3 class="text-left">Built with PHP! I have created this website to showcase the capabilities of our ecommerce platform and highlight the features that I can offer to my clients.</h3>
            </div>
        </div>
        <!--pro_search form-->
        <div class="pro_search clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <span class="btn make-appoint"> Advanced-Search<i class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pro_search-form clearfix animated">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 common">
                                    <span class="pro_search-form competitor"> Search By Competitor Reference:</span>
                                </div>
                                <?php $Competitor->show_competitor(); ?>
                						<div class="col-md-4 col-sm-6 common select">
                  						<form id="pro_search_form_one" action="/competitor_reference" method="GET" >
                  							<select class="form-control input-lg select2-single" name="customer_reference" id="customer_reference" onchange="this.form.submit()">
                  								<option value="">Select Competitor Reference Number</option>
                  							</select>
                  						</form>
                						</div>
                          </div>
                        <form name="search" class="clearfix" id="pro_search_form_two" action="/search" method="GET">
                            <div class="row">
                                <div class="col-sm-10 common">
                                  <input type="text" name="query" id="opt_search" class="opt_search required" required placeholder="Search With Article Number Or Product Name" oninvalid="this.setCustomValidity('Search Query Required. Please Enter Required Product Name')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-sm-2 common">
                                    <input type="submit" class="button-add-to-cart" value="SEARCH NOW!">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!--pro_search form end-->
    </section>
