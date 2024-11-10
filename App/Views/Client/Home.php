<?php

namespace App\Views\Client;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {
?>
    <!-- Loader 4 -->
        <!-- <div class="preloader" style="position: fixed;top:0;left:0;width: 100%;height: 100%;background-color: #fff;display: flex;align-items: center;justify-content: center;z-index: 9999;">
            <svg version="1.1" id="L4" width="100" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 50 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="#111" stroke="none" cx="6" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite"
                        begin="0.1" />
                </circle>
                <circle fill="#111" stroke="none" cx="26" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite"
                        begin="0.2" />
                </circle>
                <circle fill="#111" stroke="none" cx="46" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite"
                        begin="0.3" />
                </circle>
            </svg>
        </div>

        <div class="search-box bg-dark position-relative">
            <div class="search-wrap">
                <div class="close-button">
                    <svg class="close" style="fill: white;">
                        <use xlink:href="#close"></use>
                    </svg>
                </div>
                <form id="search-form" class="text-lg-center text-md-left pt-3" action="index.html" method="get">
                    <input type="text" class="search-input" placeholder="Search...">
                    <svg class="search">
                        <use xlink:href="#search"></use>
                    </svg>
                </form>
            </div>
        </div> -->

        <!-- quick view -->
        <div class="modal fade" id="modaltoggle" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-lg-12 col-md-12 me-3">
                            <div class="image-holder">
                                <img src="/public/assets/client/images/summary-item1.jpg" alt="Shoes">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="summary">
                                <div class="summary-content fs-6">
                                    <div class="product-header d-flex justify-content-between mt-4">
                                        <h3 class="display-7">Running Shoes For Men</h3>
                                        <div class="modal-close-btn">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="product-price fs-3">$99</span>
                                    <div class="product-details">
                                        <p class="fs-7">Buy good shoes and a good mattress, because when you're not in one you're in the
                                            other. With four pairs of shoes, I can travel the world.</p>
                                    </div>
                                    <ul class="select">
                                        <li>
                                            <strong>Colour Shown:</strong> Red, White, Black
                                        </li>
                                        <li>
                                            <strong>Style:</strong> SM3018-100
                                        </li>
                                    </ul>
                                    <div class="variations-form shopify-cart">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="quantity d-flex pb-4">
                                                    <div
                                                        class="qty-number align-top qty-number-plus d-flex justify-content-center align-items-center text-center">
                                                        <span class="increase-qty plus">
                                                            <svg class="plus">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <input type="number" id="quantity_001" class="input-text text-center" step="1" min="1" name="quantity" value="1" title="Qty">
                                                    <div
                                                        class="qty-number qty-number-minus d-flex justify-content-center align-items-center text-center">
                                                        <span class="increase-qty minus">
                                                            <svg class="minus">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <a rel="nofollow" data-no-instant="" href="#" class="out-stock button">Out of stock</a>
                                                <button type="submit" class="btn btn-medium btn-black hvr-sweep-to-right">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- variations-form -->
                                    <div class="categories d-flex flex-wrap pt-3">
                                        <strong class="pe-2">Categories:</strong>
                                        <a href="#" title="categories">Clothing,</a>
                                        <a href="#" title="categories">Men's Clothes,</a>
                                        <a href="#" title="categories">Tops & T-Shirts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / quick view -->

        <div class="modal fade" id="modallong" tabindex="-1" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5">Cart</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shopping-cart">
                            <div class="shopping-cart-content">
                                <div class="mini-cart cart-list p-0 mt-3">
                                    <div class="mini-cart-item d-flex border-bottom pb-3">
                                        <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                            <a href="#" title="product-image">
                                                <img src="/public/assets/client/images/single-product-thumb1.jpg" class="img-fluid" alt="single-product-item">
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8">
                                            <div class="product-header d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="product-title fs-6 me-5">Sport Shoes For Men</h4>
                                                <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                                                    data-cart_item_key="abc" data-product_sku="">
                                                    <svg class="close">
                                                        <use xlink:href="#close"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="quantity-price d-flex justify-content-between align-items-center">
                                                <div class="input-group product-qty">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                                                        data-type="minus">
                                                        <svg width="16" height="16">
                                                            <use xlink:href="#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                                                    <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                                                        data-type="plus">
                                                        <svg width="16" height="16">
                                                            <use xlink:href="#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="price-code">
                                                    <span class="product-price fs-6">$99</span>
                                                </div>
                                            </div>
                                            <!-- quantity-price -->
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart cart-list p-0 mt-3">
                                    <div class="mini-cart-item d-flex border-bottom pb-3">
                                        <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                            <a href="#" title="product-image">
                                                <img src="/public/assets/client/images/single-product-thumb2.jpg" class="img-fluid" alt="single-product-item">
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8">
                                            <div class="product-header d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="product-title fs-6 me-5">Brand Shoes For Men</h4>
                                                <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                                                    data-cart_item_key="abc" data-product_sku="">
                                                    <svg class="close">
                                                        <use xlink:href="#close"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="quantity-price d-flex justify-content-between align-items-center">
                                                <div class="input-group product-qty">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                                                        data-type="minus">
                                                        <svg width="16" height="16">
                                                            <use xlink:href="#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                                                    <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                                                        data-type="plus">
                                                        <svg width="16" height="16">
                                                            <use xlink:href="#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="price-code">
                                                    <span class="product-price fs-6">$99</span>
                                                </div>
                                            </div>
                                            <!-- quantity-price -->
                                        </div>
                                    </div>
                                </div>
                                <!-- cart-list -->
                                <div class="mini-cart-total d-flex justify-content-between py-4">
                                    <span class="fs-6">Subtotal:</span>
                                    <span class="special-price-code">
                                        <span class="price-amount amount fs-6" style="opacity: 1;">
                                            <bdi>
                                                <span class="price-currency-symbol">$</span>198.00 </bdi>
                                        </span>
                                    </span>
                                </div>
                                <div class="modal-footer my-4 justify-content-center">
                                    <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">View Cart</button>
                                    <button type="button"
                                        class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart view -->

        <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
                <div class="modal-content p-4">
                    <div class="modal-header mx-auto border-0">
                        <h2 class="modal-title fs-3 fw-normal">Login</h2>
                    </div>
                    <div class="modal-body">
                        <div class="login-detail">
                            <div class="login-form p-0">
                                <div class="col-lg-12 mx-auto">
                                    <form id="login-form">
                                        <input type="text" name="username" placeholder="Username or Email Address *"
                                            class="mb-3 ps-3 text-input">
                                        <input type="password" name="password" placeholder="Password" class="ps-3 text-input">
                                        <div class="checkbox d-flex justify-content-between mt-4">
                                            <p class="checkbox-form">
                                                <label class="">
                                                    <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Remember me </label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="#">Forgot your password?</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 d-flex justify-content-center">
                                <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Login</button>
                                <button type="button"
                                    class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login -->


        <section id="intro" class="position-relative mt-4">
            <div class="container-lg">
                <div class="swiper main-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
                                <img src="/public/assets/client/images/card-image1.jpg" alt="shoes" class="img-fluid jarallax-img">
                                <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                    <h2 class="card-title display-3 light">Stylish shoes for Women</h2>
                                    <a href="index.html"
                                        class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-4">
                                <div class="col-lg-12 mb-4">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="/public/assets/client/images/card-image2.jpg" alt="shoes" class="img-fluid jarallax-img">
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">Sports Wear</h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="/public/assets/client/images/card-image3.jpg" alt="shoes" class="img-fluid jarallax-img">
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">Fashion Shoes</h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
                                <img src="/public/assets/client/images/card-image4.jpg" alt="shoes" class="img-fluid jarallax-img">
                                <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                    <h2 class="card-title display-3 light">Stylish shoes for men</h2>
                                    <a href="index.html"
                                        class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-4">
                                <div class="col-lg-12 mb-4">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="/public/assets/client/images/card-image5.jpg" alt="shoes" class="img-fluid jarallax-img">
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">Men Shoes</h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="/public/assets/client/images/card-image6.jpg" alt="shoes" class="img-fluid jarallax-img">
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">Women Shoes</h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="discount-coupon py-2 my-2 py-md-5 my-md-5">
            <div class="container">
                <div class="bg-gray coupon position-relative p-5">
                    <div class="bold-text position-absolute">10% OFF</div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-7 col-md-12 mb-3">
                            <div class="coupon-header">
                                <h2 class="display-7">10% OFF Discount Coupons</h2>
                                <p class="m-0">Subscribe us to get 10% OFF on all the purchases</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-black btn-medium text-uppercase hvr-sweep-to-right">Email me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="featured-products" class="product-store">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Featured Products</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item1.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item2.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item3.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item4.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item5.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="collection-products" class="py-2 my-2 py-md-5 my-md-5">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="collection-card card border-0 d-flex flex-row align-items-end jarallax-keep-img">
                            <img src="/public/assets/client/images/collection-item1.jpg" alt="product-item" class="border-rounded-10 img-fluid jarallax-img">
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Minimal Collection</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="collection-card card border-0 d-flex flex-row jarallax-keep-img">
                            <img src="/public/assets/client/images/collection-item2.jpg" alt="product-item" class="border-rounded-10 img-fluid jarallax-img">
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Sneakers Collection</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="latest-products" class="product-store py-2 my-2 py-md-5 my-md-5 pt-0">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Latest Products</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item6.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item7.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item8.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item9.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item10.jpg" alt="product-item" class="product-image img-fluid">
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
