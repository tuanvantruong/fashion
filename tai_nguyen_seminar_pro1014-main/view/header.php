<?php

?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from webcotheme.com/honour/demo2/hon001/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 08:26:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Honour Index</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/fotorama.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>
<body>
<div class="se-pre-con"></div>
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 col-xs-12">
          <div class="newsletter-inner"> <img src="images/newsletter-icon.png" alt="Honour">
            <h2 class="main_title">Subscribe Emails</h2>
            <span>Get Latest News & Update</span>
            <p>also the leap into electronic typesetting, remaining essentially</p>
            <form>
              <input type="email" placeholder="Email Here...">
              <button class="btn-black" title="Subscribe">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main"> 
  <!-- HEADER START -->
  <header class="navbar navbar-custom " id="header">
    <div class="container">
      <div class="header-inner">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
          <a class="navbar-brand page-scroll" href="index.html"> <img alt="Honour" src="images/logo.png"> </a> </div>
        <div class="right-side float-none-sm">
          <div id="menu" class="navbar-collapse collapse left-side" >
            <ul class="nav navbar-nav navbar-left">



                     <?php
                      foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '<li class="level"> <span class="opener plus"></span> <a href="'.$linkdm.'" class="page-scroll">'.$name.'</a></li>'
                        
                        ;
                        
                      }

                     ?>
              <!-- <li class="level"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Women</a> -->
                <!-- <div class="megamenu mobile-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2"> <a href="shop.html"><span>Women Clothings</span></a>
                        <ul class="sub-menu-level2">
                          <li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
                        </ul>
                      </li>
                      <li class="level2"> <a href="shop.html"><span>Women Fashion</span></a>
                        <ul class="sub-menu-level2 ">
                          <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div> -->
              <!-- </li> -->
              <!-- <li class="level"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Men</a> -->
                <!-- <div class="megamenu full mobile-sub-menu">
                  <div class="container">
                    <div class="megamenu-inner">
                      <div class="megamenu-inner-top">
                        <div class="row">
                          <div class="col-md-3 level2"> <a href="shop.html"><span>Men Fashion</span></a>
                            <ul class="sub-menu-level2 ">
                              <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                            </ul>
                          </div>
                          <div class="col-md-3 level2"> <a href="shop.html"><span>Juniors kid</span></a>
                            <ul class="sub-menu-level2 ">
                              <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                            </ul>
                          </div>
                          <div class="col-md-3 level2"> <a href="shop.html"><span>Men Clothings</span></a>
                            <ul class="sub-menu-level2 ">
                              <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Chinos & Trousers</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Underwear</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                            </ul>
                          </div>
                          <div class="col-md-3 level2 visible-lg visible-md"> <a href="shop.html"> <img src="images/drop_banner.jpg" alt="Honour"> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li> -->
              <!-- <li class="level"><a href="shop.html" class="page-scroll">Juniors</a></li> -->
              <!-- <li class="level"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Kids</a> -->
                <!-- <div class="megamenu mobile-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2"> <a href="shop.html"><span>Kids Fashion</span></a>
                        <ul class="sub-menu-level2 ">
                          <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </li> -->
              <!-- <li class="level"><a href="shop.html" class="page-scroll">Baby</a></li> -->
              <li class="level"> <span class="opener plus"></span> <a class="page-scroll">Pages</a>
                <div class="megamenu mobile-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2">
                        <ul class="sub-menu-level2 ">
                          <li class="level3"><a href="about.html"><span>■</span>About Us</a></li>
                          <li class="level3"><a href="account.html"><span>■</span>Account</a></li>
                          <li class="level3"><a href="checkout.html"><span>■</span>Checkout</a></li>
                          <li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
                          <li class="level3"><a href="404.html"><span>■</span>404 Error</a></li>
                          <li class="level3"><a href="blog.html"><span>■</span>Blog</a></li>
                          <li class="level3"><a href="single-blog.html"><span>■</span>Single Blog</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="right-side float-left-xs header-right-link">
            <ul>
              <li class="main-search">
                <div class="header_search_toggle desktop-view">
                  <form>
                    <div class="search-box">
                      <input class="input-text" type="text" placeholder="Search entire store here...">
                      <button class="search-btn"></button>
                    </div>
                  </form>
                </div>
              </li>
              <li class="account-icon"> <a href="#"><span></span></a>
                <div class="header-link-dropdown account-link-dropdown">
                  <ul class="link-dropdown-list">
                    <li> <span class="dropdown-title">Default welcome msg!</span>
                      <ul>
                        <li><a href="login.html">Sign In</a></li>
                        <li><a href="register.html">Create an Account</a></li>
                      </ul>
                    </li>
                    <li> <span class="dropdown-title">Language :</span>
                      <ul>
                        <li><a class="active" href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">German</a></li>
                      </ul>
                    </li>
                    <li> <span class="dropdown-title">Currency :</span>
                      <ul>
                        <li><a class="active" href="#">USD</a></li>
                        <li><a href="#">AUD</a></li>
                        <li><a href="#">EUR</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="cart-icon"> <a href="#"> <span> <small class="cart-notification">2</small> </span> </a>
                <div class="cart-dropdown header-link-dropdown">
                  <ul class="cart-list link-dropdown-list">
                    <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                      <div class="media"> <a class="pull-left"> <img alt="Minimo" src="images/1.jpg"></a>
                        <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                          <p class="cart-price">$14.99</p>
                          <div class="product-qty">
                            <label>Qty:</label>
                            <div class="custom-qty">
                              <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                      <div class="media"> <a class="pull-left"> <img alt="Minimo" src="images/2.jpg"></a>
                        <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                          <p class="cart-price">$14.99</p>
                          <div class="product-qty">
                            <label>Qty:</label>
                            <div class="custom-qty">
                              <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                  <div class="clearfix"></div>
                  <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="header_search_toggle mobile-view">
          <form>
            <div class="search-box">
              <input class="input-text" type="text" placeholder="Search entire store here...">
              <button class="search-btn"></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER END --> 