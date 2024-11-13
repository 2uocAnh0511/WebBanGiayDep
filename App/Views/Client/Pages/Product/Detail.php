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
            <form action="#" method="post">
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
                <button type="submit" class="btn btn-sm btn-outline-success">Thêm vào giỏ hàng</button>
                <button type="submit" class="btn btn-sm btn-outline-success">Thanh Toán</button>
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
