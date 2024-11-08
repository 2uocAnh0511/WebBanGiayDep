<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;
use App\Views\Client\Components\Category;

class Index extends BaseView
{
    public static function render($data = null)
    {

?>


<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Sidebar for Categories -->
        <div class="col-md-3">
            <?php Category::render($data['categories']); ?>
        </div>

        <!-- Main Product Section -->
        <div class="col-md-9">
            <?php if (count($data) && count($data['products'])) : ?>
                <h1 class="text-center mb-4 bg-danger p-3 text-white rounded">Sản phẩm</h1>
                
                <div class="row">
                    <?php foreach ($data['products'] as $item) : ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow rounded border-0">
                                <!-- Product Image -->
                                <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" class="card-img-top rounded-top" alt="Product Image" style="object-fit: cover; height: 200px;">

                                <div class="card-body">
                                    <!-- Product Name -->
                                    <h5 class="card-title"><?= $item['name'] ?></h5>

                                    <!-- Price Display -->
                                    <?php if ($item['discount_price'] > 0) : ?>
                                        <p class="text-muted mb-1"><strike>Giá gốc: <?= number_format($item['price']) ?> đ</strike></p>
                                        <p class="text-danger font-weight-bold">Giá giảm: <?= number_format($item['price'] - $item['discount_price']) ?> đ</p>
                                    <?php else : ?>
                                        <p class="font-weight-bold">Giá tiền: <?= number_format($item['price']) ?> đ</p>
                                    <?php endif; ?>

                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="/products/<?= $item['id'] ?>" class="btn btn-sm btn-info">Chi tiết</a>
                                        <form action="/cart/add" method="post" class="d-inline">
                                            <input type="hidden" name="method" value="POST">
                                            <input type="hidden" name="id" value="<?= $item['id'] ?>" required>
                                            <button type="submit" class="btn btn-sm btn-warning">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <h3 class="text-center text-danger">Không có sản phẩm</h3>
            <?php endif; ?>
        </div>
    </div>
</div>




<?php

    }
}
