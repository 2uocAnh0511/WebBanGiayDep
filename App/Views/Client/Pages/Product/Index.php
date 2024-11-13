<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;
use App\Views\Client\Components\Category;

class Index extends BaseView
{
    public static function render($data = null)
    {

?>


<section id="collection-products" class="py-4 my-4 py-md-5 my-md-5">
    <div class="container-md">
        <div class="row g-4">
            <!-- Collection 1 -->
            <div class="col-lg-6 col-md-6">
                <div class="collection-card position-relative overflow-hidden rounded-4 shadow-lg" style="height: 100%; transition: transform 0.3s ease;">
                    <img src="https://chuyensigiaythethao.com/wp-content/uploads/2020/08/dddf7006aaf656a80fe7-2.jpg" alt="sản phẩm" 
                         class="img-fluid w-100 h-100" style="object-fit: cover; filter: brightness(70%); transition: transform 0.5s ease;">
                    <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white" 
                         style="background: rgba(0, 0, 0, 0.5);">
                        <h3 class="card-title fw-bold display-5">Bộ Sưu Tập Tối Giản</h3>
                        <a href="index.html" class="btn btn-outline-light mt-3 text-uppercase fw-bold" style="border-width: 2px;">Mua Ngay</a>
                    </div>
                </div>
            </div>
            
            <!-- Collection 2 -->
            <div class="col-lg-6 col-md-6">
                <div class="collection-card position-relative overflow-hidden rounded-4 shadow-lg" style="height: 100%; transition: transform 0.3s ease;">
                    <img src="https://cf.shopee.vn/file/e265bdc4e2e3a81a0e251ef51cb48d04" alt="sản phẩm" 
                         class="img-fluid w-100 h-100" style="object-fit: cover; filter: brightness(70%); transition: transform 0.5s ease;">
                    <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white" 
                         style="background: rgba(0, 0, 0, 0.5);">
                        <h3 class="card-title fw-bold display-5">Bộ Sưu Tập Giày Thể Thao</h3>
                        <a href="index.html" class="btn btn-outline-light mt-3 text-uppercase fw-bold" style="border-width: 2px;">Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



          <!-- quick view -->
          <div class="modal fade" id="modaltoggle" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-lg-12 col-md-12 me-3">
                            <div class="image-holder">
                                <img src="/public/assets/client/images/summary-item1.jpg" alt="Giày">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="summary">
                                <div class="summary-content fs-6">
                                    <div class="product-header d-flex justify-content-between mt-4">
                                        <h3 class="display-7">Giày chạy bộ cho Nam</h3>
                                        <div class="modal-close-btn">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="product-price fs-3">1.500.000VND</span>
                                    <div class="product-details">
                                        <p class="fs-7">Hãy mua giày tốt và một chiếc nệm tốt, bởi vì khi bạn không ở trên chiếc nệm, bạn sẽ ở trong đôi giày. Với bốn đôi giày, tôi có thể du lịch khắp thế giới.</p>
                                    </div>
                                    <ul class="select">
                                        <li>
                                            <strong>Màu sắc:</strong> Đỏ, Trắng, Đen
                                        </li>
                                        <li>
                                            <strong>Kiểu dáng:</strong> SM3018-100
                                        </li>
                                    </ul>
                                    <div class="variations-form shopify-cart">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="quantity d-flex pb-4">
                                                    <div class="qty-number align-top qty-number-plus d-flex justify-content-center align-items-center text-center">
                                                        <span class="increase-qty plus">
                                                            <svg class="plus">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <input type="number" id="quantity_001" class="input-text text-center" step="1" min="1" name="quantity" value="1" title="Số lượng">
                                                    <div class="qty-number qty-number-minus d-flex justify-content-center align-items-center text-center">
                                                        <span class="increase-qty minus">
                                                            <svg class="minus">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <a rel="nofollow" data-no-instant="" href="#" class="out-stock button">Hết hàng</a>
                                                <button type="submit" class="btn btn-medium btn-black hvr-sweep-to-right">Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categories d-flex flex-wrap pt-3">
                                        <strong class="pe-2">Danh mục:</strong>
                                        <a href="#" title="categories">Thời trang,</a>
                                        <a href="#" title="categories">Đồ nam,</a>
                                        <a href="#" title="categories">Áo và T-shirt</a>
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
                        <h2 class="modal-title fs-5">Giỏ hàng</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shopping-cart">
                            <div class="shopping-cart-content">
                                <div class="mini-cart cart-list p-0 mt-3">
                                    <div class="mini-cart-item d-flex border-bottom pb-3">
                                        <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                            <a href="#" title="hình sản phẩm">
                                                <img src="/public/assets/client/images/single-product-thumb1.jpg" class="img-fluid" alt="sản phẩm đơn">
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8">
                                            <div class="product-header d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="product-title fs-6 me-5">Giày thể thao cho Nam</h4>
                                                <a href="" class="remove" aria-label="Xóa sản phẩm này" data-product_id="11913"
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
                                                    <span class="product-price fs-6">1.300.000VND</span>
                                                </div>
                                            </div>
                                            <!-- quantity-price -->
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart cart-list p-0 mt-3">
                                    <div class="mini-cart-item d-flex border-bottom pb-3">
                                        <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                            <a href="#" title="hình sản phẩm">
                                                <img src="/public/assets/client/images/single-product-thumb2.jpg" class="img-fluid" alt="sản phẩm đơn">
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8">
                                            <div class="product-header d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="product-title fs-6 me-5">Giày hiệu cho Nam</h4>
                                                <a href="" class="remove" aria-label="Xóa sản phẩm này" data-product_id="11913"
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
                                                    <span class="product-price fs-6">1.350.000VND</span>
                                                </div>
                                            </div>
                                            <!-- quantity-price -->
                                        </div>
                                    </div>
                                </div>
                                <!-- cart-list -->
                                <div class="mini-cart-total d-flex justify-content-between py-4">
                                    <span class="fs-6">Tạm tính:</span>
                                    <span class="special-price-code">
                                        <span class="price-amount amount fs-6" style="opacity: 1;">
                                            <bdi>
                                                <span class="price-currency-symbol"></span>2.650.000VND </bdi>
                                        </span>
                                    </span>
                                </div>
                                <div class="modal-footer my-4 justify-content-center">
                                    <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Xem Giỏ hàng</button>
                                    <button type="button"
                                        class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart view -->


        <section id="featured-products" class="product-store">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Sản phẩm nổi bật</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">Xem tất cả</a>
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.500.000VND</span>
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.300.000VND</span>
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.400.000VND</span>
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nữ</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.350.000VND</span>
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.450.000VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 2 ảnh full -->
        <section id="collection-products" class="py-2 my-2 py-md-5 my-md-5">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="collection-card card border-0 d-flex flex-row align-items-end jarallax-keep-img">
                            <img src="https://sneakerdaily.vn/wp-content/uploads/2022/10/271340099_454942656203384_359627.png" alt="sản phẩm" class="border-rounded-10 img-fluid jarallax-img">
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Bộ Sưu Tập Tối Giản</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="collection-card card border-0 d-flex flex-row jarallax-keep-img">
                            <img src="https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Mid-Metallic-Red.jpg" alt="sản phẩm" class="border-rounded-10 img-fluid jarallax-img">
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Bộ Sưu Tập Giày Thể Thao</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="latest-products" class="product-store py-2 my-2 py-md-5 my-md-5 pt-0">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Sản Phẩm Mới Nhất</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">Xem tất cả</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item6.jpg" alt="sản phẩm" class="product-image img-fluid">
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.350.000VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item7.jpg" alt="sản phẩm" class="product-image img-fluid">
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.500.000VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item8.jpg" alt="sản phẩm" class="product-image img-fluid">
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam </a>
                                    </h3>
                                    <span class="card-price fw-bold">1.500.000VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item9.jpg" alt="sản phẩm" class="product-image img-fluid">
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.500.000VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="/public/assets/client/images/card-item10.jpg" alt="sản phẩm" class="product-image img-fluid">
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
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Giày chạy bộ cho Nam</a>
                                    </h3>
                                    <span class="card-price fw-bold">1.500.000VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <h1 class="section-title text-uppercase" style="padding-left: 40px;">Sản phẩm giá hời!</h1>

        <div class="product-row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; padding: 20px;">
    <!-- Product 1 -->
    <div class="product-item" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
        <div class="image" style="position: relative; height: 300px; overflow: hidden;">
            <a href="#" title="" style="display: block; width: 100%; height: 100%;">
                <img src="https://salt.tikicdn.com/cache/w1200/ts/product/02/e2/9e/800be9635281aedd83a1654d7992564a.jpg" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
            <span class="promotion" style="position: absolute; top: 10px; left: 10px; background-color: #ff5050; color: white; padding: 5px 10px; border-radius: 4px; font-size: 14px;">-20%</span>
        </div>
        <div class="right-block" style="padding: 15px; text-align: center;">
            <h2 class="name" style="font-size: 18px; font-weight: bold; margin: 10px 0;">
                <a href="#" title="Giày thể thao cho nữ" style="text-decoration: none; color: #333;">Giày thể thao cho nữ</a>
            </h2>
            <div class="ratings clearfix" style="margin-bottom: 10px;">
                <div class="rating-box" style="width: 100%; height: 10px; background-color: #f1f1f1; border-radius: 5px;">
                    <div class="rating" style="width: 70%; height: 100%; background-color: #ffbf00; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="price" style="margin-bottom: 15px;">
                <span class="price-new" style="color: #e60000; font-size: 20px; font-weight: bold;">1.180.000&nbsp;₫</span>
                <span class="price-old" style="color: #999; font-size: 16px; text-decoration: line-through; margin-left: 10px;">1.210.000&nbsp;₫</span>
            </div>
            <div class="addtocart-button clearfix" style="display: flex; justify-content: center; gap: 10px;">
                <a class="add-to-cart" href="javascript:void(0)" onclick="AddToCard(2651,1)" style="display: inline-block; padding: 8px 15px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none;">Thêm vào giỏ hàng</a>
                <a class="add-wishlist" href="#" style="display: inline-block; padding: 8px 15px; background-color: #ffc107; color: white; border-radius: 4px; text-decoration: none;">Chi tiết</a>
                <a class="add-compare" href="#" style="display: inline-block; padding: 8px 15px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Mua ngay</a>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
        <div class="image" style="position: relative; height: 300px; overflow: hidden;">
            <a href="#" title="Giày thể thao cho nam" style="display: block; width: 100%; height: 100%;">
                <img src="https://topcomshop.com/uploads/images/a-a-giay-re/6/11647045837-242872808.jpg" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
            <span class="promotion" style="position: absolute; top: 10px; left: 10px; background-color: #ff5050; color: white; padding: 5px 10px; border-radius: 4px; font-size: 14px;">-20%</span>
        </div>
        <div class="right-block" style="padding: 15px; text-align: center;">
            <h2 class="name" style="font-size: 18px; font-weight: bold; margin: 10px 0;">
                <a href="#" title="Giày thể thao cho nam" style="text-decoration: none; color: #333;">Giày thể thao cho nam</a>
            </h2>
            <div class="ratings clearfix" style="margin-bottom: 10px;">
                <div class="rating-box" style="width: 100%; height: 10px; background-color: #f1f1f1; border-radius: 5px;">
                    <div class="rating" style="width: 70%; height: 100%; background-color: #ffbf00; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="price" style="margin-bottom: 15px;">
                <span class="price-new" style="color: #e60000; font-size: 20px; font-weight: bold;">1.299.000&nbsp;₫</span>
                <span class="price-old" style="color: #999; font-size: 16px; text-decoration: line-through; margin-left: 10px;">1.550.000&nbsp;₫</span>
            </div>
            <div class="addtocart-button clearfix" style="display: flex; justify-content: center; gap: 10px;">
                <a class="add-to-cart" href="javascript:void(0)" onclick="AddToCard(2651,1)" style="display: inline-block; padding: 8px 15px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none;">Thêm vào giỏ hàng</a>
                <a class="add-wishlist" href="#" style="display: inline-block; padding: 8px 15px; background-color: #ffc107; color: white; border-radius: 4px; text-decoration: none;">Chi tiết</a>
                <a class="add-compare" href="#" style="display: inline-block; padding: 8px 15px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Mua ngay</a>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-item" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
        <div class="image" style="position: relative; height: 300px; overflow: hidden;">
            <a href="#" title="Giày thể thao bassic" style="display: block; width: 100%; height: 100%;">
                <img src="https://cdn.vuahanghieu.com/unsafe/0x900/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/10/giay-the-thao-mlb-chunky-liner-basic-sd-new-york-mets-3asxcls3n-09nys-mau-xanh-navy-652cfdc42b067-16102023160924.jpg" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
            <span class="promotion" style="position: absolute; top: 10px; left: 10px; background-color: #ff5050; color: white; padding: 5px 10px; border-radius: 4px; font-size: 14px;">-20%</span>
        </div>
        <div class="right-block" style="padding: 15px; text-align: center;">
            <h2 class="name" style="font-size: 18px; font-weight: bold; margin: 10px 0;">
                <a href="#" title="Giày thể thao bassic" style="text-decoration: none; color: #333;">Giày thể thao basic</a>
            </h2>
            <div class="ratings clearfix" style="margin-bottom: 10px;">
                <div class="rating-box" style="width: 100%; height: 10px; background-color: #f1f1f1; border-radius: 5px;">
                    <div class="rating" style="width: 70%; height: 100%; background-color: #ffbf00; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="price" style="margin-bottom: 15px;">
                <span class="price-new" style="color: #e60000; font-size: 20px; font-weight: bold;">1.368.000&nbsp;₫</span>
                <span class="price-old" style="color: #999; font-size: 16px; text-decoration: line-through; margin-left: 10px;">1.710.000&nbsp;₫</span>
            </div>
            <div class="addtocart-button clearfix" style="display: flex; justify-content: center; gap: 10px;">
                <a class="add-to-cart" href="javascript:void(0)" onclick="AddToCard(2651,1)" style="display: inline-block; padding: 8px 15px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none;">Thêm vào giỏ hàng</a>
                <a class="add-wishlist" href="#" style="display: inline-block; padding: 8px 15px; background-color: #ffc107; color: white; border-radius: 4px; text-decoration: none;">Chi tiết</a>
                <a class="add-compare" href="#" style="display: inline-block; padding: 8px 15px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Mua ngay</a>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="product-item" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
        <div class="image" style="position: relative; height: 300px; overflow: hidden;">
            <a href="/san-pham/ao-cong-so-tay-bup-sang-trong.html" title="Giày thể thao bassic" style="display: block; width: 100%; height: 100%;">
                <img src="https://cf.shopee.vn/file/0e4f0643bf51a6a2a511368ed213ff99" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
            <span class="promotion" style="position: absolute; top: 10px; left: 10px; background-color: #ff5050; color: white; padding: 5px 10px; border-radius: 4px; font-size: 14px;">-20%</span>
        </div>
        <div class="right-block" style="padding: 15px; text-align: center;">
            <h2 class="name" style="font-size: 18px; font-weight: bold; margin: 10px 0;">
                <a href="#" title="Giày thể thao bassic" style="text-decoration: none; color: #333;">Giày thể thao basic</a>
            </h2>
            <div class="ratings clearfix" style="margin-bottom: 10px;">
                <div class="rating-box" style="width: 100%; height: 10px; background-color: #f1f1f1; border-radius: 5px;">
                    <div class="rating" style="width: 70%; height: 100%; background-color: #ffbf00; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="price" style="margin-bottom: 15px;">
                <span class="price-new" style="color: #e60000; font-size: 20px; font-weight: bold;">990.000&nbsp;₫</span>
                <span class="price-old" style="color: #999; font-size: 16px; text-decoration: line-through; margin-left: 10px;">1.990.000&nbsp;₫</span>
            </div>
            <div class="addtocart-button clearfix" style="display: flex; justify-content: center; gap: 10px;">
                <a class="add-to-cart" href="javascript:void(0)" onclick="AddToCard(2651,1)" style="display: inline-block; padding: 8px 15px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none;">Thêm vào giỏ hàng</a>
                <a class="add-wishlist" href="#" style="display: inline-block; padding: 8px 15px; background-color: #ffc107; color: white; border-radius: 4px; text-decoration: none;">Chi tiết</a>
                <a class="add-compare" href="#" style="display: inline-block; padding: 8px 15px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Mua ngay</a>
            </div>
        </div>
    </div>
</div>



        <!--  <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    Category::render($data['categories']);
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                    if (count($data) && count($data['products'])) :
                    ?>
                        <h1 class="text-center mb-3">Sản phẩm</h1>
                        <div class="row">
                            <?php
                            foreach ($data['products'] as $item) :
                            ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" class="card-img-top" alt="" style="width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                            <p class="card-text"><?= $item['name'] ?></p>
                                            <?php
                                            if ($item['discount_price'] > 0) :
                                            ?>
                                                <p>Giá gốc: <strike><?= number_format($item['price']) ?> đ</strike></p>
                                                <p>Giá giảm: <strong class="text-danger"><?= number_format($item['price'] - $item['discount_price']) ?> đ</strong></p>

                                            <?php
                                            else :
                                            ?>
                                                <p>Giá tiền: <?= number_format($item['price']) ?> đ</p>

                                            <?php
                                            endif;
                                            ?>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/products/<?= $item['id'] ?>" type="button" class="btn btn-sm btn-outline-info">Chi tiết</a>
                                                    <form action="/cart/add" method="post">
                                                        <input type="hidden" name="method" id="" value="POST">
                                                        <input type="hidden" name="id" id="" value="<?= $item['id'] ?>" required>
                                                        <button type="submit" class="btn btn-sm btn-outline-success">Thêm vào giỏ hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            endforeach;

                            ?>
                        </div>
                    <?php
                    else :
                    ?>
                        <h3 class="text-center text-danger">Không có sản phẩm</h3>

                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div> -->




<?php

    }
}
