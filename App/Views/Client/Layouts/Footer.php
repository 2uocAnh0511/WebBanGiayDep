<?php

namespace App\Views\Client\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
  public static function render($data = null)
  {
?>

    <!DOCTYPE html>
    <html lang="vi">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ví dụ Footer với Logo</title>
      <style>
        .footer {
          background-color: #f9f9f9;
          padding: 40px 20px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          font-size: 14px;
        }

        .footer-content {
          display: flex;
          width: 100%;
          justify-content: space-between;
        }

        .footer-column {
          flex: 1;
          margin-right: 20px;
        }

        .footer-column h4 {
          font-weight: bold;
          margin-bottom: 10px;
        }

        .footer-column ul {
          list-style: none;
          padding: 0;
        }

        .footer-column ul li {
          margin-bottom: 5px;
        }

        .footer-logo {
          margin-left: auto;
        }

        .footer-bottom {
          text-align: center;
          padding-top: 20px;
          border-top: 1px solid #ddd;
          margin-top: 20px;
        }
      </style>
    </head>

    <body>
      <footer class="footer">
        <div class="footer-content">
          <div class="footer-column">
            <h4>Tài Nguyên</h4>
            <ul>
              <li>Tìm Cửa Hàng</li>
              <li>Trở Thành Thành Viên</li>
              <li>Gửi Phản Hồi</li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Trợ Giúp</h4>
            <ul>
              <li>Nhận Hỗ Trợ</li>
              <li>Trạng Thái Đơn Hàng</li>
              <li>Giao Hàng</li>
              <li>Đổi Trả</li>
              <li>Phương Thức Thanh Toán</li>
              <li>Liên Hệ</li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Về 5TV</h4>
            <ul>
              <li>Giới Thiệu</li>
              <li>Tin Tức</li>
              <li>Cơ Hội Nghề Nghiệp</li>
              <li>Nhà Đầu Tư</li>
              <li>Sự Bền Vững</li>
            </ul>
          </div>
          <!-- Thêm logo nằm bên phải -->
          <div class="footer-logo">
            <img src="/public/assets/client/images/Shoes store.png" href="/" alt="Logo 5TV" width="150">
          </div>
        </div>
      </footer>
    </body>
    <script src="/public/assets/client/js/jquery-1.11.0.min.js"></script>
    <script src="/public/assets/client//js/plugins.js"></script>
    <script src="/public/assets/client//js/script.js"></script>

    </html>

<?php
  }
}

?>