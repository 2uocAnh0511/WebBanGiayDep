<?php

namespace App\Views\Client\Pages\Abouts;

use App\Views\BaseView;

class About extends BaseView
{
    public static function render($data = null)
    {

?>
        <!DOCTYPE html>
        <html lang="vi">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Về Nike</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    max-width: 1200px;
                    margin: auto;
                    padding: 20px;
                }

                .section {
                    margin-bottom: 40px;
                }

                .section-title {
                    font-size: 2em;
                    margin-bottom: 10px;
                }

                .section-content {
                    font-size: 1em;
                    color: #555;
                }

                .image-section img {
                    width: 100%;
                    height: auto;
                    margin-bottom: 20px;
                }

                .banner {
                    background-color: #333;
                    color: #fff;
                    padding: 15px;
                    text-align: center;
                    margin-bottom: 40px;
                }

                .slogan {
                    text-align: center;
                    font-size: 2em;
                    font-weight: bold;
                    color: #333;
                    margin-top: 40px;
                    padding: 20px;
                    border: 2px solid #333;
                    background-color: #f9f9f9;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
            </style>
        </head>

        <body>
            <div class="container">
                <!-- Phần Giới Thiệu -->
                <div class="section">
                    <h2 class="section-title">Sứ Mệnh Của Chúng Tôi</h2>
                    <p class="section-content">
                        Mang đến nguồn cảm hứng và sự đổi mới cho mọi vận động viên* trên thế giới. (*Nếu bạn có một cơ thể, bạn là một vận động viên.)
                    </p>
                </div>

                <!-- Phần Hình Ảnh -->
                <div class="section image-section">
                    <img src="/public/assets/client/images/banner.jpg" alt="Hình ảnh Nike">
                </div>

                <!-- Phần Câu Chuyện -->
                <div class="section">
                    <h2 class="section-title">Câu Chuyện Của Chúng Tôi</h2>
                    <p class="section-content">
                        Mọi thứ bắt đầu từ khát vọng mang đến sự đổi mới và chất lượng vượt trội trong từng sản phẩm. 5TV được thành lập với mục tiêu cung cấp giày dép không chỉ thời trang mà còn bền bỉ và thoải mái, đáp ứng nhu cầu của mọi khách hàng yêu thích phong cách hiện đại và sự tinh tế.
                    </p>
                </div>


                <!-- Phần Cam Kết -->
                <div class="section">
                    <h2 class="section-title">Cam Kết Về Sự Bền Vững</h2>
                    <p class="section-content">
                        Sự bền vững là chìa khóa để bảo vệ tương lai của thể thao. Chúng tôi đang đổi mới với mục tiêu giảm thiểu rác thải và chống lại biến đổi khí hậu.
                    </p>
                </div>

                <!-- Phần Banner -->
                <div class="banner">
                    <p>Điểm đến tin cậy của bạn cho giày chất lượng - Mua sắm an tâm!</p>
                </div>

                <!-- Phần Slogan -->
                <div class="slogan">
                    "Bước vào sự thoải mái, bước vào phong cách - chỉ có tại cửa hàng của chúng tôi!"
                </div>
            </div>

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

            <!-- Modal đăng nhập -->
            <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
                    <div class="modal-content p-4">
                        <div class="modal-header mx-auto border-0">
                            <h2 class="modal-title fs-3 fw-normal">Đăng nhập</h2>
                        </div>
                        <div class="modal-body">
                            <div class="login-detail">
                                <div class="login-form p-0">
                                    <div class="col-lg-12 mx-auto">
                                        <form id="login-form">
                                            <input type="text" name="username" placeholder="Tên người dùng hoặc Địa chỉ Email *"
                                                class="mb-3 ps-3 text-input">
                                            <input type="password" name="password" placeholder="Mật khẩu" class="ps-3 text-input">
                                            <div class="checkbox d-flex justify-content-between mt-4">
                                                <p class="checkbox-form">
                                                    <label class="">
                                                        <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Ghi nhớ tôi </label>
                                                </p>
                                                <p class="lost-password">
                                                    <a href="#">Quên mật khẩu?</a>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer mt-5 d-flex justify-content-center">
                                    <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Đăng nhập</button>
                                    <button type="button"
                                        class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>






<?php

    }
}
