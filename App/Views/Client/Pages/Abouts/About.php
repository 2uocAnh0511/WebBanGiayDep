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
                    <img src="https://via.placeholder.com/1200x600" alt="Hình ảnh Nike">
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
        </body>

        </html>






<?php

    }
}
