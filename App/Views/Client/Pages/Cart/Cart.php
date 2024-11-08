<?php

namespace App\Views\Client\Pages\Cart;

use App\Views\BaseView;

class Cart extends BaseView
{
    public static function render($data = null)
    {
?>

        <style>
            .cart-items {
                padding: 20px;
                background-color: #fff;
                /* Nền trắng */
                color: #1a1a1a;
                /* Chữ màu đen */
            }

            .cart-item {
                display: flex;
                margin-bottom: 15px;
                border: 1px solid #555;
                padding: 10px;
                border-radius: 8px;
                background-color: #fff;
                /* Nền xám tối */
            }

            .cart-item img {
                max-width: 400px;
                margin-right: 20px;
                border-radius: 8px;
            }

            .h2 {
                justify-content: center;
                align-items: center;
            }

            .item-details h3 {
                margin: 0 0 10px;
                font-size: 20px;
                color: #ff4d4d;
                /* Màu đỏ */
            }

            .item-details p {
                margin: 5px 0;
                color: #1a1a1a;
                /* Màu đen */
            }

            .item-details label {
                display: block;
                margin-top: 10px;
                color: #1a1a1a;
            }

            .item-details input[type="number"] {
                width: 50px;
                padding: 5px;
                margin-top: 5px;
                border-radius: 4px;
                border: 1px solid #555;
                color: #fff;
                background-color: #1a1a1a;
                /* Nền đen */
            }

            .item-details button {
                display: inline-block;
                margin-top: 15px;
                padding: 10px 20px;
                background-color: #ff4d4d;
                /* Nền đỏ */
                color: #1a1a1a;
                /* Chữ trắng */
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .continue-shopping a {
                text-decoration: none;
                color: #ff4d4d;
                /* Link màu đỏ */
                font-weight: bold;
            }
        </style>
        <div>
            <h2>Sản phẩm trong giỏ hàng</h2>
            <section class="cart-items">
                <div class="cart-item">
                    <img src="/public/assets//client//images/IE0586.webp" alt="Tên sản phẩm">
                    <div class="item-details">
                        <h3>Giày Lacoste</h3>
                        <p>Carnaby Pro CGR 124 Nam - Trắng Đen</p>
                        <p>Giá: 4,142,000 VNĐ</p>
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="0">
                        <p>Thành tiền: 4,142,000 VNĐ</p>
                        <button>Thanh toán</button>
                        <section class="continue-shopping">
                            <a href="http://127.0.0.1:8081/products">Tiếp tục mua sắm</a>
                        </section>
                    </div>

                </div>
            </section>

            <section class="cart-items">
                <div class="cart-item">
                    <img src="/public/assets//client//images/Giay-Lacoste-.png" alt="Tên sản phẩm">
                    <div class="item-details">
                        <h3>Giày Action Calanda</h3>
                        <p>Giày Action Calanda Nam Da Thật</p>
                        <p>Giá: 4,142,000 VNĐ</p>
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="0">
                        <p>Thành tiền: 4,142,000 VNĐ</p>
                        <button>Thanh toán</button>
                        <section class="continue-shopping">
                            <a href="http://127.0.0.1:8081/products">Tiếp tục mua sắm</a>
                        </section>
                    </div>

                </div>
            </section>

            <section class="cart-items">
                <div class="cart-item">
                    <img src="/public/assets//client//images/https-authentic-shoes.comcollectionsair-force-1-.png" alt="Tên sản phẩm">
                    <div class="item-details">
                        <h3>Giày Lacoste Nivolor</h3>
                        <p>Giày Lacoste Nivolor 0721 Nam - Xanh Navy</p>
                        <p>Giá: 2,142,000 VNĐ</p>
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="0">
                        <p>Thành tiền: 2,142,000 VNĐ</p>
                        <button>Thanh toán</button>
                        <section class="continue-shopping">
                            <a href="http://127.0.0.1:8081/products">Tiếp tục mua sắm</a>
                        </section>
                    </div>

                </div>
            </section>
        </div>



<?php
    }
}
?>