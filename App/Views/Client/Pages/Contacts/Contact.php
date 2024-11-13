<?php

namespace App\Views\Client\Pages\Contacts;

use App\Views\BaseView;

class Contact extends BaseView
{
    public static function render($data = null)
    {

?>
        <!DOCTYPE html>
        <html lang="vi">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liên Hệ Với Chúng Tôi</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
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

                .contact-info {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 40px;
                }

                .contact-info div {
                    width: 30%;
                    background-color: white;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .contact-info h3 {
                    color: #333;
                }

                .contact-info p {
                    color: #777;
                }

                .form-container {
                    margin-top: 40px;
                    background-color: white;
                    padding: 40px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin-bottom: 40px;
                }

                .form-container h2 {
                    text-align: center;
                    color: #333;
                }

                .form-container input,
                .form-container textarea {
                    width: 100%;
                    padding: 12px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }

                .form-container textarea {
                    height: 150px;
                    resize: vertical;
                }

                .form-container button {
                    background-color: #333;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                }

                .form-container button:hover {
                    background-color: #555;
                }
            </style>
        </head>

        <body>

            <section>
                <h1>Liên Hệ Với Chúng Tôi</h1>
                <p>Chúng tôi rất mong nhận được ý kiến phản hồi từ bạn! Vui lòng liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi nào.</p>
            </section>

            <div class="container">
                <!-- Thông Tin Liên Hệ -->
                <div class="contact-info">
                    <div>
                        <h3>Văn Phòng Của Chúng Tôi</h3>
                        <p>123 Phố Chính, Tên Thành Phố, Quốc Gia</p>
                    </div>
                    <div>
                        <h3>Email Chúng Tôi</h3>
                        <p>contact@thươnghiệucủabạn.com</p>
                    </div>
                    <div>
                        <h3>Gọi Chúng Tôi</h3>
                        <p>+1 234 567 890</p>
                    </div>
                </div>

                <!-- Mẫu Liên Hệ -->
                <div class="form-container">
                    <h2>Gửi Thông Điệp Cho Chúng Tôi</h2>
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Tên của bạn" required>
                        <input type="email" name="email" placeholder="Email của bạn" required>
                        <input type="text" name="subject" placeholder="Chủ đề" required>
                        <textarea name="message" placeholder="Thông điệp của bạn" required></textarea>
                        <button type="submit">Gửi Thông Điệp</button>
                    </form>
                </div>
            </div>

        </body>

        </html>







<?php

    }
}
