@extends('layouts.master')
@section('judul', 'Dashboard')

@section('css')

@endsection

@section('content')

    <!-- BEGIN #slider -->
    <div id="slider" class="section-container p-0 bg-black">
        <!-- BEGIN carousel -->
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- BEGIN carousel-inner -->
            <div class="carousel-inner">
                <!-- BEGIN item -->
                <div class="carousel-item active" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url(../assets/img/slider/slider-1-cover.jpg) center 0 / cover no-repeat;">
                    <div class="container">
                        <img src="../assets/img/slider/slider-1-product.png" class="product-img right bottom fadeInRight animated" alt="" />
                    </div>
                    <div class="carousel-caption carousel-caption-left">
                        <div class="container">
                            <h3 class="title mb-5px fadeInLeftBig animated">iMac</h3>
                            <p class="mb-15px fadeInLeftBig animated">The vision is brighter than ever.</p>
                            <div class="price mb-30px fadeInLeftBig animated"><small>from</small> <span>Rp 21.999.999</span></div>
                            <a href="{{('productDetail')}}" class="btn btn-outline btn-lg fadeInLeftBig animated">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- END item -->
                <!-- BEGIN item -->
                <div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url(../assets/img/slider/slider-2-cover.jpg) center 0 / cover no-repeat;">
                    <div class="container">
                        <img src="../assets/img/slider/slider-2-product.png" class="product-img left bottom fadeInLeft animated" alt="" />
                    </div>
                    <div class="carousel-caption carousel-caption-right">
                        <div class="container">
                            <h3 class="title mb-5px fadeInRightBig animated">iPhone X</h3>
                            <p class="mb-15px fadeInRightBig animated">Say hello to the future.</p>
                            <div class="price mb-30px fadeInRightBig animated"><small>from</small> <span>Rp 6.999.999</span></div>
                            <a href="{{('productDetail')}}" class="btn btn-outline btn-lg fadeInRightBig animated">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- END item -->
                <!-- BEGIN item -->
                <div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url(../assets/img/slider/slider-3-cover.jpg) center 0 / cover no-repeat;">
                    <div class="carousel-caption">
                        <div class="container">
                            <h3 class="title mb-5px fadeInDownBig animated">Macbook Air</h3>
                            <p class="mb-15px fadeInDownBig animated">Thin.Light.Powerful.<br />And ready for anything</p>
                            <div class="price fadeInDownBig animated"><small>from</small> <span>Rp 12.999.999</span></div>
                            <a href="{{('productDetail')}}" class="btn btn-outline btn-lg fadeInUpBig animated">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- END item -->
            </div>
            <!-- END carousel-inner -->
            <a class="carousel-control-prev" href="#main-carousel" data-bs-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main-carousel" data-bs-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <!-- END carousel -->
    </div>
    <!-- END #slider -->

    <!-- BEGIN #promotions -->
    <div id="promotions" class="section-container bg-white">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN section-title -->
            <h4 class="section-title clearfix">
                    <span class="flex-1">
                    Exclusive promotions
                    <small>from 01 Januari 2025 - 30 Januari 2025</small>
                </span>
                <a href="#" class="btn">SHOW ALL</a>
            </h4>
            <!-- END section-title -->
            <!-- BEGIN row -->
            <div class="row gx-2">
                <!-- BEGIN col-6 -->
                <div class="col-lg-6">
                    <!-- BEGIN promotion -->
                    <div class="promotion promotion-lg bg-black">
                        <div class="promotion-image text-end promotion-image-overflow-bottom">
                            <img src="../assets/img/product/product-iphone-12.png" alt="" />
                        </div>
                        <div class="promotion-caption promotion-caption-inverse">
                            <h4 class="promotion-title">iPhone 12</h4>
                            <div class="promotion-price"><small>from</small> Rp 7.749.000</div>
                            <p class="promotion-desc">A big step for small.<br />A beloved design. Now with more to love.</p>
                            <a href="#" class="promotion-btn">View More</a>
                        </div>
                    </div>
                    <!-- END promotion -->
                </div>
                <!-- END col-6 -->
                <!-- BEGIN col-3 -->
                <div class="col-lg-3 col-md-6">
                    <!-- BEGIN promotion -->
                    <div class="promotion bg-blue">
                        <div class="promotion-image promotion-image-overflow-bottom promotion-image-overflow-top">
                            <img src="../assets/img/product/product-apple-watch-sm.png" alt="" />
                        </div>
                        <div class="promotion-caption promotion-caption-inverse text-end">
                            <h4 class="promotion-title">Apple Watch</h4>
                            <div class="promotion-price"><small>from</small> Rp 4.000.000</div>
                            <p class="promotion-desc">You. At a glance.</p>
                            <a href="#" class="promotion-btn">View More</a>
                        </div>
                    </div>
                    <!-- END promotion -->
                    <!-- BEGIN promotion -->
                    <div class="promotion bg-gray-200">
                        <div class="promotion-image text-center promotion-image-overflow-bottom">
                            <img src="../assets/img/product/product-mac-mini.png" alt="" />
                        </div>
                        <div class="promotion-caption text-center">
                            <h4 class="promotion-title">Mac Mini</h4>
                            <div class="promotion-price"><small>from</small> Rp 2.985.000</div>
                            <p class="promotion-desc">It’s mini in a massive way.</p>
                            <a href="#" class="promotion-btn">View More</a>
                        </div>
                    </div>
                    <!-- END promotion -->
                </div>
                <!-- END col-3 -->
                <!-- BEGIN col-3 -->
                <div class="col-lg-3 col-md-6">
                    <!-- BEGIN promotion -->
                    <div class="promotion bg-gray-200">
                        <div class="promotion-image promotion-image-overflow-right promotion-image-overflow-bottom text-end">
                            <img src="../assets/img/product/product-mac-accessories.png" alt="" />
                        </div>
                        <div class="promotion-caption text-center">
                            <h4 class="promotion-title">Apple Accessories</h4>
                            <div class="promotion-price"><small>from</small> Rp. 999.000</div>
                            <p class="promotion-desc">Redesigned. Rechargeable. Remarkable.</p>
                            <a href="#" class="promotion-btn">View More</a>
                        </div>
                    </div>
                    <!-- END promotion -->
                    <!-- BEGIN promotion -->
                    <div class="promotion bg-black">
                        <div class="promotion-image text-end">
                            <img src="../assets/img/product/product-mac-pro.png" alt="" />
                        </div>
                        <div class="promotion-caption promotion-caption-inverse">
                            <h4 class="promotion-title">Mac Pro</h4>
                            <div class="promotion-price"><small>from</small> Rp. 11.999.999</div>
                            <p class="promotion-desc">Built for creativity on an epic scale.</p>
                            <a href="#" class="promotion-btn">View More</a>
                        </div>
                    </div>
                    <!-- END promotion -->
                </div>
                <!-- END col-3 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #promotions -->

    <!-- BEGIN #trending-items -->
    <div id="trending-items" class="section-container">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN section-title -->
            <h4 class="section-title clearfix">
                <span class="flex-1">
                    Trending Items
                <small>Shop and get your favourite items at amazing prices!</small>
                </span>
                <div class="btn-group">
                    <a href="#" class="btn"><i class="fa fa-angle-left fs-16px"></i></a>
                    <a href="#" class="btn"><i class="fa fa-angle-right fs-16px"></i></a>
                </div>
            </h4>
            <!-- END section-title -->
            <!-- BEGIN row -->
            <div class="row gx-2">
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-iphone.png" alt="" />
                            <div class="discount">35% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('productDetail')}}">iPhone 6s Plus<br />16GB</a>
                            </h4>
                            <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                            <div class="item-price">Rp 3.899.350</div>
                            <div class="item-discount-price">Rp 5.999.000</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-ipad-pro.png" alt=""  />
                            <div class="discount">32% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('product')}}">9.7-inch iPad Pro<br />32GB</a>
                            </h4>
                            <p class="item-desc">Super. Computer. Now in two sizes.</p>
                            <div class="item-price">Rp 6.109.800</div>
                            <div class="item-discount-price">Rp 8.985.000</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-imac.png" alt="" />
                            <div class="discount">10% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('product')}}">21.5-inch iMac<br />with Retina Display</a>
                            </h4>
                            <p class="item-desc">Retina. Now in colossal and ginormous.</p>
                            <div class="item-price">Rp 19.799.999</div>
                            <div class="item-discount-price">Rp 21.999.999</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-apple-watch.png" alt="" />
                            <div class="discount">13% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('product')}}">Apple Watch<br />Stainless steel cases</a>
                            </h4>
                            <p class="item-desc">You. At a glance.</p>
                            <div class="item-price">Rp 7.164.450</div>
                            <div class="item-discount-price">Rp 8.235.000</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-macbook-pro.png" alt="" />
                            <div class="discount">7% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('product')}}">MacBook Pro<br />with Retina Display</a>
                            </h4>
                            <p class="item-desc">Stunning Retina Display</p>
                            <div class="item-price">Rp 11.625.000</div>
                            <div class="item-discount-price">Rp 12.500.000</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
                <!-- BEGIN col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- BEGIN item -->
                    <div class="item item-thumbnail">
                        <a href="{{('productDetail')}}" class="item-image">
                            <img src="../assets/img/product/product-apple-tv.png" alt="" />
                            <div class="discount">40% OFF</div>
                        </a>
                        <div class="item-info">
                            <h4 class="item-title">
                                <a href="{{('product')}}">Apple Tv<br />32GB</a>
                            </h4>
                            <p class="item-desc">The future of television is here.</p>
                            <div class="item-price">Rp 1.341.000</div>
                            <div class="item-discount-price">Rp 2.235.000</div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END col-2 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #trending-items -->

    <!-- BEGIN #mobile-list -->
    <div id="mobile-list" class="section-container pt-0">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN section-title -->
            <h4 class="section-title clearfix">
                <span class="flex-1">
                    Mobile Phones
                    <small>Shop and get your favourite phone at amazing prices!</small>
                </span>
                <a href="#" class="btn">SHOW ALL</a>
            </h4>
            <!-- END section-title -->
            <!-- BEGIN category-container -->
            <div class="category-container">
                <!-- BEGIN category-sidebar -->
                <div class="category-sidebar">
                    <ul class="category-list">
                        <li class="list-header">Top Categories</li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Xiaomi</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Vivo</a></li>
                        <li><a href="#">Huawei</a></li>
                        <li><a href="#">Realme</a></li>
                        <li><a href="#">Google Pixel</a></li>
                        <li><a href="#">HTC</a></li>
                        <li><a href="#">Assus</a></li>
                        <li><a href="#">All Brands</a></li>
                    </ul>
                </div>
                <!-- END category-sidebar -->
                <!-- BEGIN category-detail -->
                <div class="category-detail">
                    <!-- BEGIN category-item -->
                    <a href="#" class="category-item full">
                        <div class="item">
                            <div class="item-cover">
                                <img src="{{asset('assets/img/product/product-galaxy-zfold6.jpeg')}}" alt="" height="80%" />
                            </div>
                            <div class="item-info bottom">
                                <h4 class="item-title">Samsung Galaxy Z Fold6</h4>
                                <p class="item-desc">Redefine what a phone can do</p>
                                <div class="item-price">Rp 24.299.000</div>
                            </div>
                        </div>
                    </a>
                    <!-- END category-item -->
                    <!-- BEGIN category-item -->
                    <div class="category-item list">
                        <!-- BEGIN item-row -->
                        <div class="item-row">
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="../assets/img/product/product-iphone.png" alt="" />
                                    <div class="discount">35% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('productDetail')}}">iPhone 6s Plus<br />16GB</a>
                                    </h4>
                                    <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                                    <div class="item-price">Rp 3.899.350</div>
                                    <div class="item-discount-price">Rp 5.999.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="../assets/img/product/product-samsung-note5.png" alt="" />
                                    <div class="discount">32% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('product')}}">Samsung Galaxy Note 5<br />Black</a>
                                    </h4>
                                    <p class="item-desc">Super. Computer. Now in two sizes.</p>
                                    <div class="item-price"> Rp 4.114.000.</div>
                                    <div class="item-discount-price">Rp 6.050.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="../assets/img/product/product-iphone-se.png" alt="" />
                                    <div class="discount">20% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('product')}}">iPhone SE<br />32/64Gb</a>
                                    </h4>
                                    <p class="item-desc">A big step for small.</p>
                                    <div class="item-price">Rp 4.788.000</div>
                                    <div class="item-discount-price">Rp 5.985.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                        </div>
                        <!-- END item-row -->
                        <!-- BEGIN item-row -->
                        <div class="item-row">
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="../assets/img/product/product-zenfone2.png" alt="" />
                                    <div class="discount">15% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('productDetail')}}">Assus ZenFone 2<br />‏(ZE550ML)</a>
                                    </h4>
                                    <p class="item-desc">See What Others Can’t See</p>
                                    <div class="item-price">Rp 5.985.000</div>
                                    <div class="item-discount-price">Rp 6.795.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="{{asset('assets/img/product/product-galaxy-zflip6.jpeg')}}" alt="" />
                                    <div class="discount">5% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('product')}}">Samsung Galaxy Z Flip6</a>
                                    </h4>
                                    <p class="item-desc">For unexpectedly beautiful moments</p>
                                    <div class="item-price">Rp 16.624.050</div>
                                    <div class="item-discount-price">Rp 17.499.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                            <!-- BEGIN item -->
                            <div class="item item-thumbnail">
                                <a href="{{('productDetail')}}" class="item-image">
                                    <img src="{{asset('assets/img/product/product-iphone-13.jpg')}}" alt="" />
                                    <div class="discount">10% OFF</div>
                                </a>
                                <div class="item-info">
                                    <h4 class="item-title">
                                        <a href="{{('product')}}">Iphone 13<br />Black</a>
                                    </h4>
                                    <p class="item-desc">1 Year Local Manufacturer Warranty</p>
                                    <div class="item-price">Rp 9.249.000</div>
                                    <div class="item-discount-price">Rp 10.299.000</div>
                                </div>
                            </div>
                            <!-- END item -->
                        </div>
                        <!-- END item-row -->
                    </div>
                    <!-- END category-item -->
                </div>
                <!-- END category-detail -->
            </div>
            <!-- END category-container -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #mobile-list -->

    <!-- BEGIN #policy -->
    <div id="policy" class="section-container bg-white">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-4 -->
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                    <!-- BEGIN policy -->
                    <div class="policy">
                        <div class="policy-icon"><i class="fa fa-truck"></i></div>
                        <div class="policy-info">
                            <h4>Secure Shipping for All Orders</h4>
                            <p>Experience reliable and secure delivery for every purchase, no minimum spending required. Shop with confidence and ease from the comfort of your home.</p>
                        </div>
                    </div>
                    <!-- END policy -->
                </div>
                <!-- END col-4 -->
                <!-- BEGIN col-4 -->
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                    <!-- BEGIN policy -->
                    <div class="policy">
                        <div class="policy-icon"><i class="fa fa-umbrella"></i></div>
                        <div class="policy-info">
                            <h4>1-Year Warranty on All Smartphones</h4>
                            <p>Shop confidently with a full 1-year warranty on all smartphones purchased through our marketplace.</p>
                        </div>
                    </div>
                    <!-- END policy -->
                </div>
                <!-- END col-4 -->
                <!-- BEGIN col-4 -->
                <div class="col-lg-4 col-md-4">
                    <!-- BEGIN policy -->
                    <div class="policy">
                        <div class="policy-icon"><i class="fa fa-user-md"></i></div>
                        <div class="policy-info">
                            <h4>6-Month Warranty on Accessories</h4>
                            <p>Get reliable protection with a 6-month warranty for all tech accessories bought from us.</p>
                        </div>
                    </div>
                    <!-- END policy -->
                </div>
                <!-- END col-4 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #policy -->

    <!-- BEGIN #subscribe -->
    <div id="subscribe" class="section-container">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <!-- BEGIN subscription -->
                    <div class="subscription">
                        <div class="subscription-intro">
                            <h4> LET'S STAY IN TOUCH</h4>
                            <p>Get updates on sales specials and more</p>
                        </div>
                        <div class="subscription-form">
                            <form name="subscription_form" action="index.html" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
                                    <button type="submit" class="btn btn-inverse"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END subscription -->
                </div>
                <!-- END col-6 -->
                <!-- BEGIN col-6 -->
                <div class="col-md-6">
                    <!-- BEGIN social -->
                    <div class="social">
                        <div class="social-intro">
                            <h4>FOLLOW US</h4>
                            <p>We want to hear from you!</p>
                        </div>
                        <div class="social-list">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- END social -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #subscribe -->

@endsection
