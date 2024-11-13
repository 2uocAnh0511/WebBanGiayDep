<?php

namespace App\Views\Client\Pages\Variants;

use App\Views\BaseView;

class Variant extends BaseView
{
    public static function render($data = null)
    {

?>
        <!DOCTYPE html>
        <html lang="vi">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Quản Lý Biến Thể Sản Phẩm</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f8f8f8;
                }

                h1 {
                    text-align: center;
                    color: #333;
                }

                .product-variants {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                }

                .variant {
                    background: white;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    margin: 10px;
                    padding: 15px;
                    text-align: center;
                    width: calc(33% - 20px);
                    transition: transform 0.2s;
                }

                .variant img {
                    max-width: 100%;
                    border-radius: 8px;
                }

                .variant:hover {
                    transform: scale(1.05);
                }

                @media (max-width: 600px) {
                    .variant {
                        width: calc(50% - 20px);
                    }
                }

                @media (max-width: 400px) {
                    .variant {
                        width: 100%;
                    }
                }
            </style>
        </head>

        <body>
            <h1>Quản Lý Biến Thể Sản Phẩm</h1>
            <div class="product-variants">
                <div class="variant">
                    <img src="path/to/image1.jpg" alt="Variant 1">
                    <h2>Biến thể 1</h2>
                    <p>Kích cỡ: S, M, L</p>
                    <p>Màu sắc: Đỏ, Xanh, Vàng</p>
                </div>
                <div class="variant">
                    <img src="path/to/image2.jpg" alt="Variant 2">
                    <h2>Biến thể 2</h2>
                    <p>Kích cỡ: M, L, XL</p>
                    <p>Màu sắc: Đen, Trắng</p>
                </div>
                <!-- Thêm biến thể khác ở đây -->
            </div>
        </body>

        </html>






<?php

    }
}
