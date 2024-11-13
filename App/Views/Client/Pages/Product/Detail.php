<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;

class Detail extends BaseView
{
    public static function render($data = null)
    {
        // var_dump($_SESSION);
?>


        <div class="container mt-5 mb-5">
            <div class="row">
                <!-- Hình ảnh sản phẩm -->
                <div class="col-md-6">
                    <img src="<?= APP_URL ?>/public/uploads/products/<?= $data['product']['image'] ?>" alt="<?= $data['product']['name'] ?>" width="100%">
                </div>

                <!-- Thông tin sản phẩm -->
                <div class="col-md-6">
                    <h5><?= $data['product']['name'] ?></h5>
                    <p>
                        <?= $data['product']['description'] ?>
                    </p>

                    <?php if ($data['product']['discount_price'] > 0) : ?>
                        <h6>Giá gốc: <strike><?= number_format($data['product']['price']) ?> đ</strike></h6>
                        <h6>Giá giảm: <strong class="text-danger"><?= number_format($data['product']['price'] - $data['product']['discount_price']) ?> đ</strong></h6>
                    <?php else : ?>
                        <h6>Giá tiền: <?= number_format($data['product']['price']) ?> đ</h6>
                    <?php endif; ?>

                    <!-- Chọn màu và kích thước -->
                    <form>
                        <!-- action ="#" method="post" -->
                        <input type="hidden" name="method" value="POST">
                        <input type="hidden" name="id" value="<?= $data['product']['id'] ?>" required>

                        <!-- Chọn màu -->
                        <div class="form-group">
                            <label for="color">Màu sắc:</label>
                            <select name="color" id="color" class="form-control" required>
                                <option value="">Chọn màu</option>
                                <option value="red">Đỏ</option>
                                <option value="blue">Xanh</option>
                                <option value="black">Đen</option>
                                <option value="white">Trắng</option>
                            </select>
                        </div>

                        <!-- Chọn kích thước -->
                        <div class="form-group">
                            <label for="size">Kích thước:</label>
                            <select name="size" id="size" class="form-control" required>
                                <option value="">Chọn kích thước</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>

                        <!-- Thêm vào giỏ hàng -->
                        <button type="submit" class="btn btn-sm btn-outline-success">
                            <a data-bs-target="#modallong" data-bs-toggle="modal">Thêm vào giỏ hàng</a>
                        </button>
                        </button>
                        <button href="/checkout" class="btn btn-sm btn-outline-success">
                            <a href="/checkout">Thanh Toán</a>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Bình luận -->
            <div class="row d-flex justify-content-center mt-5 mb-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bình luận mới nhất</h4>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/summary-item1.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Username</h6>
                                    <span class="m-b-15 d-block">Good product...</span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">2024-7-8 19:19:19</span>
                                        <button type="button" class="btn btn-cyan btn-sm" data-toggle="collapse" data-target="#comment" aria-expanded="false" aria-controls="comment">Sửa</button>
                                        <form action="#" method="post" onsubmit="return confirm('Chắc chưa?')" style="display: inline-block">
                                            <input type="hidden" name="method" value="DELETE">
                                            <input type="hidden" name="product_id" value="">
                                            <button type="submit" class="btn btn-danger btn-sm">Xoá</button>
                                        </form>
                                        <div class="collapse" id="comment">
                                            <div class="card card-body mt-5">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="method" value="PUT">
                                                    <input type="hidden" name="product_id" value="">
                                                    <div class="form-group">
                                                        <label for="">Bình luận</label>
                                                        <textarea class="form-control rounded-0" name="content" rows="3" placeholder="Nhập bình luận...">Good product...</textarea>
                                                    </div>
                                                    <div class="comment-footer">
                                                        <button type="submit" class="btn btn-cyan btn-sm">Gửi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

                            <!-- Bình luận mới -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <img src="<?= APP_URL ?>/public/uploads/users/user2.jpeg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Username</h6>
                                    <form action="#" method="post">
                                        <input type="hidden" name="method" value="POST" required>
                                        <div class="form-group">
                                            <label for="">Bình luận</label>
                                            <textarea class="form-control rounded-0" name="content" rows="3" placeholder="Nhập bình luận..." required></textarea>
                                        </div>
                                        <div class="comment-footer">
                                            <button type="submit" class="btn btn-cyan btn-sm">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<?php

    }
}
