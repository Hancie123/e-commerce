<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lifor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    @include('layouts.header')



</head>

<body class="bg-light">

    <!-- loader start -->
    <div class="loader-wrapper">
        <div>
            <img src="{{ url('assets/images/loader.gif') }}" alt="loader">
        </div>
    </div>
    <!-- loader end -->

    <!--header start-->
    <header id="stickyheader">
        <div class="mobile-fix-option"></div>
        @include('layouts.topnav')


       @include('layouts.nav')
       @include('layouts.categoryHeader')


        
    </header>
    <!--header end-->

    <!--top brand panel start-->
    <section class="brand-panel">
        <div class="brand-panel-box">
            <div class="brand-panel-contain ">
                <ul>
                    <li><a href="javascript:void(0)">top brand</a></li>
                    <li><a>:</a></li>
                    <li><a href="category-page(left-sidebar).html">aerie</a></li>
                    <li><a href="category-page(left-sidebar).html">baci lingrie</a></li>
                    <li><a href="category-page(left-sidebar).html">gerbe</a></li>
                    <li><a href="category-page(left-sidebar).html">jolidon</a></li>
                    <li><a href="category-page(left-sidebar).html">Wonderbra</a></li>
                    <li><a href="category-page(left-sidebar).html">Ultimo</a></li>
                    <li><a href="category-page(left-sidebar).html">Vassarette </a></li>
                    <li><a href="category-page(left-sidebar).html">Oysho</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--top brand panel end-->

    <!--slider start-->
    <section class="theme-slider home-slide b-g-white " id="home-slide">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-1">
                                        {{-- <li id="img-1"><img src="../assets/images/products/1.1.png"
                                                class="img-fluid" alt="slider"></li>
                                        <li id="img-2" class="slide-center"><img
                                                src="../assets/images/products/1.2.png" class="img-fluid"
                                                alt="slider"></li> --}}
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>mi<span>Mobile</span></h1>
                                        <h4>fast and light</h4>
                                        <h2>Pixel Perfect Deal Camera</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-2">
                                        <li id="img-3" class="slide-center"><img
                                                src="../assets/images/layout-2/slider/2.1.png" class="img-fluid"
                                                alt="slider"></li>
                                        <li id="img-4" class="slide-center"><img
                                                src="../assets/images/layout-2/slider/2.2.png" class="img-fluid"
                                                alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>big<span>Sale</span></h1>
                                        <h4>now start at $99</h4>
                                        <h2>50% off</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-3">
                                        <li id="img-5"><img src="../assets/images/layout-2/slider/3.2.png"
                                                class="img-fluid" alt="slider"></li>
                                        <li id="img-6" class="slide-center"><img
                                                src="../assets/images/layout-2/slider/3.1.png" class="img-fluid"
                                                alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>camera<span>Sale</span></h1>
                                        <h4>now start at $79</h4>
                                        <h2>70% off today</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider end-->

    <!--collection banner start-->
    <section class="collection-banner section-pt-space b-g-white ">
        <div class="custom-container">
            <div class="row collection2">
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1  p-right">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/1.jpg" class="img-fluid bg-img  "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>women</h3>
                                <h4>fashion</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-right">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/2.jpg" class="img-fluid bg-img  "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>camera</h3>
                                <h4>lenses</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-right">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/3.jpg" class="img-fluid bg-img  "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>refrigerator</h3>
                                <h4>lG mini</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection banner end-->

    <!--discount banner start-->
    <section class="discount-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="discount-banner-contain">
                        <h2>Discount on every single item on our site.</h2>
                        <h1><span>OMG! Just Look at the</span> <span>great Deals!</span></h1>
                        <div class="rounded-contain rounded-inverse">
                            <div class="rounded-subcontain">
                                How does it feel, when you see great discount deals for each product?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--discount banner end-->

    <!--tab product-->
    <section class="section-pt-space">
        <div class="tab-product-main">
            <div class="tab-prodcut-contain">
                <ul class="tabs tab-title">
                    <li class="current"><a href="tab-1">Washing Machine</a></li>
                    <li class=""><a href="tab-2">TV</a></li>
                    <li class=""><a href="tab-3">Refrigenerator</a></li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--tab product-->

    <!-- slider tab  -->
    <section class="section-py-space ratio_square product">
        <div class="custom-container">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product mb--5">
                        <div class="tab-content-cls ">

                            <div id="tab-1" class="tab-content active default">
                                <div class="product-slide-6 product-m no-arrow">
                                   
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 100.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 80.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 90.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 28.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 80.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 28.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $150.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 80.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 120.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $100.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 30.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 40.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 30.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 45.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 18.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 180.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 320.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 125.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-3" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-pagplayout4e(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 225.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 180.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $99.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 75.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 260.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 360.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 140.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 370.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 170.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 76.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 40.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg"
                                                            class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()" class="tooltip-top"
                                                        data-tippy-content="Add to cart">
                                                        <i data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                        data-tippy-content="Add to Wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view" class="tooltip-top"
                                                        data-tippy-content="Quick View">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top"
                                                        data-tippy-content="Compare">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 45.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider tab end -->

    <!--collection banner start-->
    <section class="collection-banner section-pb-space ">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="collection-banner-main banner-5 p-center">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/7.jpg" class="bg-img  "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div class="sub-contain">
                                <h3>save up to 30% off</h3>
                                <h4>women<span>fashion</span></h4>
                                <div class="shop">
                                    <a class="btn btn-normal" href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection banner end-->

    <!--deal banner start-->
    <section class="deal-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="deal-banner-containe">
                        <h2>
                            save up to 30% to 40% off
                        </h2>
                        <h1>
                            omg! just look at the great deals!
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="deal-banner-containe">
                        <diV class="deal-btn">
                            <a href="category-page(left-sidebar).html" class="btn-white">
                                View more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal banner end-->

    <!--rounded category start-->
    <section class="rounded-category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/1.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    flower
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/2.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    furniture
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/3.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    bag
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/4.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    tools
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/5.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    grocery
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/6.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    camera
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                                <div class="img-wrapper">
                                    <a href="category-page(left-sidebar).html">
                                        <img src="../assets/images/layout-1/rounded-cat/7.png" alt="category  "
                                            class="img-fluid">
                                    </a>
                                </div>
                                <a href="category-page(left-sidebar).html" class="btn-rounded">
                                    shoes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--rounded category end-->

    <!--box categroy start-->
    <section class="box-category section-py-space">
        <div class="container-fluid ">
            <div class="row">
                <div class="col ps-0">
                    <div class="slide-10 no-arrow">
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>10% off</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>under @99</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>free shipping</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>extra 10% off</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>$79 cashback</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>80% off</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>on sale</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>only $49</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>under @150</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>save money</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="category-page(left-sidebar).html">
                                <div class="box-category-contain">
                                    <h4>80% off</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--box category end-->

    <!-- media banner tab start-->
    <section class=" ratio_square">
        <div class="custom-container b-g-white section-pb-space">
            <div class="row">
                <div class="col p-0">
                    <div class="theme-tab product">
                        <ul class="tabs tab-title media-tab">
                            <li class="current"><a href="tab-7">new product</a></li>
                            <li class=""><a href="tab-8">Feature Products</a></li>
                            <li class=""><a href="tab-9">best Sellers</a></li>
                            <li class=""><a href="tab-10">On Sale</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-7" class="tab-content active default ">
                                <div class="media-slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-content ">
                                <div class="media-slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-content ">
                                <div class="media-slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-content ">
                                <div class="media-slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                            class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="product-page(left-sidebar).html">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button onclick="openCart()" class="tooltip-top"
                                                                        data-tippy-content="Add to cart"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                        class="add-to-wish tooltip-top"
                                                                        data-tippy-content="Add to Wishlist"><i
                                                                            data-feather="heart"></i></a>
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quick-view"
                                                                        class="tooltip-top"
                                                                        data-tippy-content="Quick View"><i
                                                                            data-feather="eye"></i></a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                        data-tippy-content="Compare"><i
                                                                            data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- media banner tab end -->

    <!--collection banner start-->
    <section class="collection-banner section-py-space">
        <div class="container-fluid">
            <div class="row collection2">
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-left">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/4.jpg" class="img-fluid bg-img "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>Leather</h3>
                                <h4>new bag</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-left">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/5.jpg" class="img-fluid bg-img "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>nike</h3>
                                <h4>breeze</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-left">
                        <div class="collection-img">
                            <img src="../assets/images/layout-2/collection-banner/6.jpg" class="img-fluid bg-img "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>Printing 3D</h3>
                                <h4>USB moon</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection banner end-->


    <!--hot deal start-->
    <section class="hot-deal hotdeal-first b-g-white section-big-pb-space space-abjust">
        <div class="custom-container">
            <div class="row hot-2 ">
                <div class="col-12">
                    <!--title start-->
                    <div class="title3 b-g-white text-left">
                        <h4>today's hot deal</h4>
                    </div>
                    <!--titel end-->
                </div>
                <div class="col-lg-9">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="hot-deal-contain ">
                                <div class="row hot-deal-subcontain hotdeal-block1">
                                    <div class="col-lg-4 col-md-4  ">
                                        <div class="hotdeal-right-slick border-0">
                                            <a href="product-page(left-sidebar).html">
                                                <div class="img-wrraper">
                                                    <div>
                                                        <img src="../assets/images/layout-2/hot-deal/8.jpg"
                                                            alt="hot-deal" class="img-fluid  bg-img">
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="product-page(left-sidebar).html">
                                                <div class="img-wrraper">
                                                    <div>
                                                        <img src="../assets/images/layout-2/hot-deal/7.jpg"
                                                            alt="hot-deal" class="img-fluid  bg-img">
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="product-page(left-sidebar).html">
                                                <div class="img-wrraper">
                                                    <div>
                                                        <img src="../assets/images/layout-2/hot-deal/6.jpg"
                                                            alt="hot-deal" class="img-fluid  bg-img">
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="product-page(left-sidebar).html">
                                                <div class="img-wrraper">
                                                    <div>
                                                        <img src="../assets/images/layout-2/hot-deal/5.jpg"
                                                            alt="hot-deal" class="img-fluid  bg-img">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 deal-order-3">
                                        <div class="hotdeal-right-slick border-0">
                                            <div>
                                                <div>
                                                    <a href="product-page(left-sidebar).html">
                                                        <h5>oppo find x2 </h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long
                                                        established fact that a reader.It is a long established fact
                                                        that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <h6>$50.30 <span>60.00</span></h6>
                                                    <div class="timer">
                                                        <p id="demo">
                                                        </p>
                                                    </div>
                                                    <a href="product-page(left-sidebar).html"
                                                        class="btn btn-normal btn-md ">shop now</a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="product-page(left-sidebar).html">
                                                        <h5>wooden owl </h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long
                                                        established fact that a reader.It is a long established fact
                                                        that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <h6>$60.30 <span>70.00</span></h6>
                                                    <div class="timer">
                                                        <p id="demo1">
                                                        </p>
                                                    </div>
                                                    <a href="product-page(left-sidebar).html"
                                                        class="btn btn-normal btn-md ">shop now</a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="product-page(left-sidebar).html">
                                                        <h5>office cotton seat </h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long
                                                        established fact that a reader.It is a long established fact
                                                        that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <h6>$45.30 <span>50.00</span></h6>
                                                    <div class="timer">
                                                        <p id="demo2">
                                                        </p>
                                                    </div>
                                                    <a href="product-page(left-sidebar).html"
                                                        class="btn btn-normal btn-md ">shop now</a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="product-page(left-sidebar).html">
                                                        <h5>Generic Rock Earphone </h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long
                                                        established fact that a reader.It is a long established fact
                                                        that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <h6>$85.30 <span>90.00</span></h6>
                                                    <div class="timer">
                                                        <p id="demo3">
                                                        </p>
                                                    </div>
                                                    <a href="product-page(left-sidebar).html"
                                                        class="btn btn-normal btn-md ">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="hotdeal-right-nav">
                                            <div><img src="../assets/images/layout-2/hot-deal/8.jpg" alt="hot-dea"
                                                    class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/7.jpg" alt="hot-dea"
                                                    class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/6.jpg" alt="hot-dea"
                                                    class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/5.jpg" alt="hot-dea"
                                                    class="img-fluid  "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-1-section no-arrow">
                        <div>
                            <div class="media-banner border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>New Products</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>Bajaj GX-1 Mixer</p>
                                                        </a>
                                                        <h6>$42.05 <span>$47.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>rechargeable fan</p>
                                                        </a>
                                                        <h6>$47.05 <span>$52.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>sumsung galaxy</p>
                                                        </a>
                                                        <h6>$57.05 <span>$75.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>New Products</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>sumsung galaxy</p>
                                                        </a>
                                                        <h6>$78.05 <span>$68.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>Bajaj GX-1 Mixer</p>
                                                        </a>
                                                        <h6>$72.05 <span>$63.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>rechargeable fan</p>
                                                        </a>
                                                        <h6>82.05 <span>$75.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>New Products</h5>
                                    </div>
                                </div>

                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/2.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>rechargeable fan</p>
                                                        </a>
                                                        <h6>$79.05 <span>$47.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/3.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>sumsung galaxy</p>
                                                        </a>
                                                        <h6>$51.05 <span>$76.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/media-banner/1.jpg"
                                                class="img-fluid " alt="banner">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="product-detail">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <a href="product-page(left-sidebar).html">
                                                            <p>Bajaj GX-1 Mixer</p>
                                                        </a>
                                                        <h6>$24.05 <span>$56.21</span></h6>
                                                    </div>
                                                    <div class="cart-info">
                                                        <button onclick="openCart()" class="tooltip-top"
                                                            data-tippy-content="Add to cart"><i
                                                                data-feather="shopping-cart"></i></button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                                            data-tippy-content="Add to Wishlist"><i
                                                                data-feather="heart"></i></a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view" class="tooltip-top"
                                                            data-tippy-content="Quick View"><i
                                                                data-feather="eye"></i></a>
                                                        <a href="compare.html" class="tooltip-top"
                                                            data-tippy-content="Compare"><i
                                                                data-feather="refresh-cw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hot deal start-->

    <!--testimonial start-->
    <section class="testimonial testimonial-inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="../assets/images/1.jpg" class="img-fluid rounded-circle  "
                                            alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                            College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="../assets/images/2.jpg" class="img-fluid rounded-circle  "
                                            alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                            College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="../assets/images/3.jpg" class="img-fluid rounded-circle  "
                                            alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                            College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial end-->

    <!--title start-->
    <div class="title1 section-my-space">
        <h4>Special Products</h4>
    </div>
    <!--title end-->

    <!--product start-->
    <section class="product section-pb-space mb--5">
        <div class="custom-container">
            <div class="row">
                <div class="col pr-0">
                    <div class="product-slide-6 no-arrow">
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    sony xperia z5
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 58.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/2.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a2.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Double Door Refrigerator
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 147.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 110.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    nikon d5003
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 264.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 210.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Lenovo V14 Intel
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 418.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 380.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    coffee table
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 49.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 47.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    nikon d5003
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 264.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 210.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  "
                                                alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()" class="tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                            data-tippy-content="Add to Wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" class="tooltip-top"
                                            data-tippy-content="Quick View">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Lenovo V14 Intel
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 418.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 380.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product end-->

    <!--instagram start-->
    <section class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0 position-relative">
                    <div class="insta-contant1 ">
                        <div class="slide-7 no-arrow">
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/1.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/2.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/3.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/4.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/5.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/6.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/7.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="../assets/images/insta/8.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="insta-sub-contant1">
                            <div class="insta-title">
                                <h4><span>#</span>INSTAGRAM</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--instagra end-->






    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img">
                                <img src="../assets/images/layout-1/product/3.jpg" alt=""
                                    class="img-fluid bg-img">
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <div class="pro-group">
                                    <h2>
                                        reader will be distracted
                                    </h2>
                                    <ul class="pro-price">
                                        <li>$70</li>
                                        <li><span>mrp $140</span></li>
                                        <li>50% off</li>
                                    </ul>
                                    <div class="revieu-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <a href="review.html"><span>(6 reviews)</span></a>
                                    </div>
                                    <ul class="best-seller">
                                        <li>
                                            <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m102.427 43.155-2.337-2.336a3.808 3.808 0 0 1 -.826-4.149l1.263-3.053a3.808 3.808 0 0 0 -2.063-4.975l-3.036-1.256a3.807 3.807 0 0 1 -2.352-3.519v-3.286a3.808 3.808 0 0 0 -3.809-3.808h-3.3a3.81 3.81 0 0 1 -3.518-2.35l-1.269-3.052a3.808 3.808 0 0 0 -4.98-2.059l-3.032 1.258a3.807 3.807 0 0 1 -4.152-.825l-2.323-2.323a3.809 3.809 0 0 0 -5.386 0l-2.336 2.336a3.808 3.808 0 0 1 -4.149.826l-3.053-1.263a3.809 3.809 0 0 0 -4.975 2.063l-1.257 3.036a3.808 3.808 0 0 1 -3.519 2.353h-3.285a3.808 3.808 0 0 0 -3.809 3.808v3.3a3.808 3.808 0 0 1 -2.349 3.519l-3.053 1.266a3.809 3.809 0 0 0 -2.059 4.976l1.259 3.035a3.81 3.81 0 0 1 -.825 4.152l-2.324 2.323a3.809 3.809 0 0 0 0 5.386l2.337 2.337a3.807 3.807 0 0 1 .826 4.149l-1.263 3.056a3.808 3.808 0 0 0 2.063 4.975l3.036 1.256a3.807 3.807 0 0 1 2.352 3.519v3.286a3.808 3.808 0 0 0 3.809 3.808h3.3a3.809 3.809 0 0 1 3.518 2.35l1.265 3.052a3.808 3.808 0 0 0 4.984 2.059l3.035-1.259a3.811 3.811 0 0 1 4.152.825l2.323 2.324a3.809 3.809 0 0 0 5.386 0l2.336-2.336a3.81 3.81 0 0 1 4.149-.827l3.053 1.264a3.809 3.809 0 0 0 4.975-2.063l1.257-3.037a3.809 3.809 0 0 1 3.519-2.352h3.285a3.808 3.808 0 0 0 3.809-3.808v-3.3a3.808 3.808 0 0 1 2.349-3.518l3.053-1.266a3.809 3.809 0 0 0 2.059-4.976l-1.259-3.036a3.809 3.809 0 0 1 .825-4.151l2.324-2.324a3.809 3.809 0 0 0 -.003-5.39z"
                                                        fill="#f9cc4e" />
                                                    <circle cx="64" cy="45.848" fill="#4ec4b5"
                                                        r="29.146" />
                                                    <path
                                                        d="m59.795 41.643 4.205-12.614 4.205 12.614h12.615l-8.41 8.41 4.205 12.615-12.615-8.41-12.615 8.41 4.205-12.615-8.41-8.41z"
                                                        fill="#f9cc4e" />
                                                    <path
                                                        d="m87.579 74.924h-1.6a3.809 3.809 0 0 0 -3.519 2.352l-1.257 3.037a3.809 3.809 0 0 1 -4.975 2.063l-3.053-1.264a3.81 3.81 0 0 0 -4.149.827l-2.336 2.336a3.809 3.809 0 0 1 -5.386 0l-2.323-2.324a3.811 3.811 0 0 0 -4.152-.825l-3.029 1.259a3.808 3.808 0 0 1 -4.977-2.059l-1.265-3.052a3.809 3.809 0 0 0 -3.518-2.35h-1.618l-17.417 35.386 17.255-5.872 5.872 17.256 17.868-36.304 17.868 36.3 5.872-17.256 17.26 5.876z"
                                                        fill="#f95050" />
                                                </g>
                                            </svg>
                                            3 best seller
                                        </li>
                                        <li>
                                            <svg enable-background="new 0 0 497 497" viewBox="0 0 497 497"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m329.63 405.42-.38.43c-10.048 19.522-48.375 35.567-80.775 35.607-24.881 0-53.654-9.372-71.486-20.681-5.583-3.54-2.393-10.869-6.766-15.297l19.149-5.13c3.76-1.22 6.46-4.54 6.87-8.47l8.574-59.02 82.641-2.72 12.241 28.06.837 8.668-1.844 9.951 3.456 6.744.673 6.967c.41 3.93 3.11 7.25 6.87 8.47z"
                                                        fill="#f2d1a5" />
                                                    <path
                                                        d="m420.39 497h-343.78c-6.21 0-7.159-6.156-6.089-12.266l2.53-14.57c3.82-21.96 16.463-37.323 37.683-44.153l27.702-8.561 28.754-8.035c18.34 18.57 48.615 27.957 81.285 27.957 32.4-.04 61.709-8.478 80.259-26.809l.38-.43 31.486 5.256 26.39 8.5c21.22 6.83 36.9 24.87 40.72 46.83l2.53 14.57c1.07 6.111-3.64 11.711-9.85 11.711z"
                                                        fill="#7e8b96" />
                                                    <g>
                                                        <path
                                                            d="m384.055 215c-2.94 43.71-18.85 104.74-24.92 130.96-.68 2.94-2.33 5.45-4.56 7.22-2.23 1.78-5.05 2.82-8.06 2.82-6.88 0-12.55-5.37-12.94-12.23 0 0-5.58-84.28-7.63-128.77z"
                                                            fill="#dc4955" />
                                                    </g>
                                                    <path
                                                        d="m141 271c-27.062 0-49-21.938-49-49 0-11.046 8.954-20 20-20h8.989l240.468-6.287 8.293 6.287h15.25c11.046 0 20 8.954 20 20 0 27.062-21.938 49-49 49z"
                                                        fill="#f2bb88" />
                                                    <path
                                                        d="m360.6 415.39-.06.09c-49.3 66.23-174.56 66.38-223.76.56l-.43-.63 18.171-1.91 12.669-8.02c18.34 18.57 48.41 29.8 81.08 29.8h.15c32.4-.04 62.28-11.1 80.83-29.43l.38-.43z"
                                                        fill="#a9a4d3" />
                                                    <path
                                                        d="m147.8 418.394v10.136l-32.89 10.59c-15.6 5.02-27.05 18.18-29.86 34.34l-3.59 23.54h-4.85c-6.21 0-10.92-5.6-9.85-11.71l2.53-14.57c3.82-21.96 19.5-40 40.72-46.83l26.34-8.48z"
                                                        fill="#64727a" />
                                                    <path
                                                        d="m182.19 417.45-34.39 11.08c-3.99-3.86-7.68-8.02-11.02-12.49l-.43-.63 30.84-9.93c1.828 1.848 10.344.351 12.353 2.02 2.928 2.433-.561 7.928 2.647 9.95z"
                                                        fill="#938dc8" />
                                                    <path
                                                        d="m299.7 358.2-2.71-28.06-79.861 2.255.001-.005-16.48.47-2.98 26.56-.763 6.8 2.039 12.83-3.989 4.55-.778 6.93c-.41 3.93-3.11 7.25-6.87 8.47l-20.12 6.48c4.37 4.43 9.41 8.44 15 11.97l10.02-3.22c9.79-3.17 16.79-11.79 17.88-21.97l2.058-17.506c.392-3.33 3.888-5.367 6.958-4.02 11.414 5.008 21.565 7.765 28.393 7.765 11.322.001 31.852-7.509 52.202-20.299z"
                                                        fill="#f2bb88" />
                                                    <path
                                                        d="m134.539 164.427s-.849 18.411-.849 33.002c0 38.745 9.42 76.067 25.701 105.572 20.332 36.847 72.609 61.499 88.109 61.499s68.394-24.653 89.275-61.499c14.137-24.946 23.338-55.482 25.843-87.741.458-5.894-9.799-20.073-9.799-26.058l10.491-24.775c0-38.422-36.205-111.427-114.81-111.427s-113.961 73.005-113.961 111.427z"
                                                        fill="#f2d1a5" />
                                                    <g>
                                                        <path
                                                            d="m294 227.5c-4.142 0-7.5-3.358-7.5-7.5v-15c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v15c0 4.142-3.358 7.5-7.5 7.5z"
                                                            fill="#64727a" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m203 227.5c-4.142 0-7.5-3.358-7.5-7.5v-15c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v15c0 4.142-3.358 7.5-7.5 7.5z"
                                                            fill="#64727a" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m249 260.847c-5.976 0-11.951-1.388-17.398-4.163-3.691-1.88-5.158-6.397-3.278-10.087 1.88-3.691 6.398-5.158 10.087-3.278 6.631 3.379 14.547 3.379 21.178 0 3.689-1.881 8.207-.413 10.087 3.278 1.88 3.69.413 8.207-3.278 10.087-5.447 2.775-11.422 4.163-17.398 4.163z"
                                                            fill="#f2bb88" />
                                                    </g>
                                                    <path
                                                        d="m288.989 40.759c0 22.511-9.303 40.759-40.489 40.759s-48.702-42.103-48.702-42.103 17.516-39.415 48.702-39.415c25.911 0 47.746 12.597 54.392 29.769 1.353 3.497-13.903 7.182-13.903 10.99z"
                                                        fill="#df646e" />
                                                    <path
                                                        d="m254.305 81.307c1.031-.099 2.069-.167 3.093-.295 26.96-3.081 47.572-19.928 47.572-40.252 0-3.81-.72-7.49-2.08-10.99-15.42-6.31-33.46-10.34-54.39-10.34-4.139 0-8.163.159-12.073.462-5.127.397-7.393-6.322-3.107-9.163 7.36-4.878 16.519-8.364 26.68-9.879-3.71-.56-7.56-.85-11.5-.85-25.933 0-47.766 12.621-54.393 29.813-.006.002-.011.004-.017.007-1.337 3.487-2.055 7.201-2.06 10.94 0 22.51 25.28 40.76 56.47 40.76 1.946.008 3.872-.09 5.805-.213z"
                                                        fill="#dc4955" />
                                                    <path
                                                        d="m363.31 164.43v33c0 5.99-.23 11.94-.7 17.83-4.32-.91-8.4-2.66-12.05-5.19-22.785-15.834-31.375-40.163-37.64-60.936-.382-1.268-1.547-2.134-2.871-2.134h-30.949c-4.96 0-9.65-2.15-12.89-5.91l-10.947-12.711c-1.197-1.39-3.349-1.39-4.546 0l-10.947 12.711c-3.24 3.76-7.93 5.91-12.89 5.91h-90.33c8.47-39.6 44.09-94 111.95-94 78.61 0 114.81 73 114.81 111.43z"
                                                        fill="#f2bb88" />
                                                    <path
                                                        d="m381 164.19v37.81h-11.25c-4 0-7.93-1.16-11.22-3.44-19.74-13.72-26.93-35.65-33.69-58.43-1.26-4.24-5.16-7.13-9.58-7.13h-36.165c-.873 0-1.703-.38-2.273-1.042l-21.559-25.029c-1.197-1.389-3.349-1.389-4.546 0l-21.559 25.029c-.57.662-1.4 1.042-2.273 1.042h-38.015c-5.3 0-9.68 4.14-9.98 9.44 0 0-2.331 25.591-4.032 66.31-1.765 42.256-7.908 135.02-7.908 135.02-.16 2.822-1.215 5.393-2.879 7.441-2.381 2.929-5.67.375-9.72.375-3.01 0-5.83-1.04-8.06-2.82-2.23-1.77-.792-5.474-1.472-8.414-6.7-28.94-23.83-94.686-23.83-138.351 0-13.73-.14-34.689 0-37.649.14-26.43 12.74-54.048 32-78.128 12.937-16.178 28.667-38.955 58.628-47.692 10.986-3.204 23.248-5.101 36.883-5.101 50.8 0 82.75 26.31 100.6 48.39 19.68 24.319 31.9 55.879 31.9 82.369z"
                                                        fill="#df646e" />
                                                    <path
                                                        d="m211.62 38.54c-19.38 9.9-33.55 23.84-43.37 36.44-19.26 24.69-31.27 56.78-31.41 83.88-.14 3.03-.84 25.18-.84 39.25 0 44.77 18.69 117.93 25.39 147.6.47 2.08 1.4 3.94 2.68 5.5-2.38 2.93-6.01 4.79-10.06 4.79-3.01 0-5.83-1.04-8.06-2.82-2.23-1.77-3.88-4.28-4.56-7.22-6.7-28.94-25.39-100.29-25.39-143.96 0-13.73.7-35.33.84-38.29.14-26.43 12.15-57.73 31.41-81.81 12.94-16.18 33.4-34.63 63.37-43.36z"
                                                        fill="#dc4955" />
                                                    <g>
                                                        <path
                                                            d="m316.539 193.816c-1.277 0-2.571-.327-3.755-1.013-11.762-6.82-25.806-6.82-37.567 0-3.583 2.078-8.172.858-10.25-2.726-2.078-3.583-.857-8.172 2.726-10.25 16.474-9.552 36.143-9.552 52.616 0 3.583 2.078 4.804 6.667 2.726 10.25-1.392 2.399-3.909 3.739-6.496 3.739z"
                                                            fill="#df646e" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m225.539 193.816c-1.277 0-2.571-.327-3.755-1.013-11.762-6.82-25.806-6.82-37.567 0-3.583 2.078-8.171.858-10.25-2.726-2.078-3.583-.857-8.172 2.726-10.25 16.474-9.552 36.143-9.552 52.616 0 3.583 2.078 4.804 6.667 2.726 10.25-1.392 2.399-3.909 3.739-6.496 3.739z"
                                                            fill="#df646e" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m302.143 383.517c-16.23 10.87-34.973 16.353-53.643 16.353s-37.3-5.41-53.54-16.27l3.476-6.313-1.526-11.067 4.15 3.37c28.46 20.41 66.63 20.37 95.05-.12.2-.14.39-.27.6-.39l3.826-2.211z"
                                                            fill="#a9a4d3" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m211.98 376.2-1.85 15.68c-5.23-2.27-10.31-5.03-15.17-8.28l1.95-17.38 4.15 3.37c3.5 2.51 7.15 4.72 10.92 6.61z"
                                                            fill="#938dc8" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="m269.5 306.5h-42c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h42c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z"
                                                            fill="#df646e" />
                                                    </g>
                                                </g>
                                            </svg>
                                            44 active view this
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-group">
                                    <h6 class="product-title">product infomation</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="pro-group pb-0">
                                    <h6 class="product-title size-text">select size<span>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#sizemodal">size chart</a></span></h6>
                                    <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Sheer Straight
                                                        Kurta</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body"><img src="../assets/images/size-chart.jpg"
                                                        alt="" class="img-fluid "></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="size-box">
                                        <ul>
                                            <li><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                            <li><a href="javascript:void(0)">2xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">color</h6>
                                    <div class="color-selector inline">
                                        <ul>
                                            <li>
                                                <div class="color-1 active"></div>
                                            </li>
                                            <li>
                                                <div class="color-2"></div>
                                            </li>
                                            <li>
                                                <div class="color-3"></div>
                                            </li>
                                            <li>
                                                <div class="color-4"></div>
                                            </li>
                                            <li>
                                                <div class="color-5"></div>
                                            </li>
                                            <li>
                                                <div class="color-6"></div>
                                            </li>
                                            <li>
                                                <div class="color-7"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1">
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <a href="javascript:void(0)" onclick="openCart()"
                                            class="btn cart-btn btn-normal tooltip-top"
                                            data-tippy-content="Add to cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            add to cart
                                        </a>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal tooltip-top"
                                            data-tippy-content="view detail">
                                            view detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->

    <!-- edit product modal start-->
    <div class="modal fade bd-example-modal-lg theme-modal pro-edit-modal" id="edit-product" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="pro-group">
                        <div class="product-img">
                            <div class="media">
                                <div class="img-wraper">
                                    <a href="product-page(left-sidebar).html">
                                        <img src="../assets/images/layout-2/product/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="product-page(left-sidebar).html">
                                        <h3>redmi not 3</h3>
                                    </a>
                                    <h6>$80<span>$120</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-group">
                        <h6 class="product-title">Select Size</h6>
                        <div class="size-box">
                            <ul>
                                <li><a href="javascript:void(0)">s</a></li>
                                <li><a href="javascript:void(0)">m</a></li>
                                <li><a href="javascript:void(0)">l</a></li>
                                <li><a href="javascript:void(0)">xl</a></li>
                                <li><a href="javascript:void(0)">2xl</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pro-group">
                        <h6 class="product-title">Select color</h6>
                        <div class="color-selector inline">
                            <ul>
                                <li>
                                    <div class="color-1 active"></div>
                                </li>
                                <li>
                                    <div class="color-2"></div>
                                </li>
                                <li>
                                    <div class="color-3"></div>
                                </li>
                                <li>
                                    <div class="color-4"></div>
                                </li>
                                <li>
                                    <div class="color-5"></div>
                                </li>
                                <li>
                                    <div class="color-6"></div>
                                </li>
                                <li>
                                    <div class="color-7"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pro-group">
                        <h6 class="product-title">Quantity</h6>
                        <div class="qty-box">
                            <div class="input-group">
                                <button class="qty-minus"></button>
                                <input class="qty-adj form-control" type="number" value="1" />
                                <button class="qty-plus"></button>
                            </div>
                        </div>
                    </div>
                    <div class="pro-group mb-0">
                        <div class="modal-btn">
                            <a href="cart.html" class="btn btn-solid btn-sm">
                                add to cart
                            </a>
                            <a href="product-page(left-sidebar).html" class="btn btn-solid btn-sm">
                                more detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit product modal end-->

    <!-- Add to cart bar -->
    <div id="cart_side" class="add_to_cart top ">
        <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my cart</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeCart()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>redmi not 3</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>Double Door Refrigerator</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/3.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>woman hande bag</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        subtotal : <span>$1050.00</span>
                    </li>
                    <li>
                        shpping <span>free</span>
                    </li>
                    <li>
                        taxes <span>$0.00</span>
                    </li>
                    <li>
                        <div class="total">
                            total<span>$1050.00</span>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="cart.html" class="btn btn-solid btn-sm">view cart</a>
                            <a href="checkout.html" class="btn btn-solid btn-sm ">checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add to cart bar end-->

    <!-- wishlistbar bar -->
    <div id="wishlist_side" class="add_to_cart right ">
        <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my wishlist</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeWishlist()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>redmi not 3</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>Double Door Refrigerator</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="product-page(left-sidebar).html">
                                <img alt="megastore1" class="me-3"
                                    src="../assets/images/layout-2/product/3.jpg">
                            </a>
                            <div class="media-body">
                                <a href="product-page(left-sidebar).html">
                                    <h4>woman hande bag</h4>
                                </a>
                                <h6>
                                    $80.00 <span>$120.00</span>
                                </h6>
                                <div class="addit-box">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1" />
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                    <div class="pro-add">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#edit-product">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        subtotal : <span>$1050.00</span>
                    </li>
                    <li>
                        shpping <span>free</span>
                    </li>
                    <li>
                        taxes <span>$0.00</span>
                    </li>
                    <li>
                        <div class="total">
                            total<span>$1050.00</span>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="wishlist.html" class="btn btn-solid btn-block btn-md">view wislist</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- wishlistbar bar end-->

    <!-- My account bar start-->
    <div id="myAccount" class="add_to_cart right account-bar">
        <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my account</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeAccount()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <form class="theme-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email"
                        required="">
                </div>
                <div class="form-group">
                    <label for="review">Password</label>
                    <input type="password" class="form-control" id="review" placeholder="Enter your password"
                        required="">
                </div>
                <div class="form-group">
                    <a href="javascript:void(0)" class="btn btn-solid btn-md btn-block ">Login</a>
                </div>
                <div class="accout-fwd">
                    <a href="forget-pwd.html" class="d-block">
                        <h5>forget password?</h5>
                    </a>
                    <a href="register.html" class="d-block">
                        <h6>you have no account ?<span>signup now</span></h6>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Add to account bar end-->


    <!-- add to  setting bar  start-->
    <div id="mySetting" class="add_to_cart right">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my setting</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeSetting()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="setting-block">
                <div class="form-group">
                    <select>
                        <option value="">language</option>
                        <option value="">english</option>
                        <option value="">french</option>
                        <option value="">hindi</option>
                    </select>
                </div>
                <div class="form-group">
                    <select>
                        <option value="">currency</option>
                        <option value="">uro</option>
                        <option value="">ruppees</option>
                        <option value="">piund</option>
                        <option value="">doller</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- add to  setting bar  end-->




    @include('layouts.footer')

</body>

</html>
