<?php

namespace App\Views\Client\Pages\Checkouts;

use App\Views\BaseView;

class Checkout extends BaseView
{
    public static function render($data = null)
    {

?>
      <!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thanh Toán</title>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        section {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .payment-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .payment-form h2 {
            text-align: center;
            color: #333;
        }

        .payment-form input,
        .payment-form select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .payment-form button {
            background-color: #333;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .payment-form button:hover {
            background-color: #555;
        }

        .qr-container {
            margin-top: 40px;
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <section>
        <h1>Trang Thanh Toán</h1>
        <p>Vui lòng điền thông tin của bạn và hoàn tất thanh toán bằng mã QR dưới đây.</p>
    </section>

    <div class="container">
        <!-- Payment Form -->
        <div class="payment-form">
            <h2>Thông Tin Khách Hàng</h2>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Tên của bạn" required>
                <input type="email" name="email" placeholder="Email của bạn" required>
                <input type="text" name="address" placeholder="Địa chỉ giao hàng" required>
                <input type="text" name="phone" placeholder="Số điện thoại" required>
                <select name="payment-method" required>
                    <option value="credit-card">Thẻ tín dụng</option>
                    <option value="bank-transfer">Chuyển khoản ngân hàng</option>
                    <option value="qr-code">Thanh toán bằng mã QR</option>
                </select>
                <button type="submit">Tiến hành thanh toán</button>
            </form>
        </div>

        <!-- QR Code Payment -->
        <div class="qr-container">
            <h2>Quét mã QR để thanh toán</h2>
            <canvas id="qr-code"></canvas>
        </div>
    </div>

    <script>
        // Giả lập mã QR cho thanh toán
        let qr = new QRious({
            element: document.getElementById('qr-code'),
            value: 'https://payment-link.example.com', // Đặt URL thanh toán của bạn ở đây
            size: 200
        });
    </script>

</body>

</html>







<?php

    }
}
