<?php

namespace App\Views\Client\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
    public static function render($data = null)
    {
?>

<footer id="footer" class="py-5 border-top">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Thông tin</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Theo dõi đơn hàng</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Blog của chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Chính sách bảo mật</a>
              </li>
              <li class="pb-2">
                <a href="#">Vận chuyển</a>
              </li>
              <li class="pb-2">
                <a href="#">Liên hệ chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Trợ giúp</a>
              </li>
              <li class="pb-2">
                <a href="#">Cộng đồng</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Giới thiệu</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Lịch sử</a>
              </li>
              <li class="pb-2">
                <a href="#">Đội ngũ của chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Dịch vụ</a>
              </li>
              <li class="pb-2">
                <a href="#">Công ty</a>
              </li>
              <li class="pb-2">
                <a href="#">Sản xuất</a>
              </li>
              <li class="pb-2">
                <a href="#">Bán buôn</a>
              </li>
              <li class="pb-2">
                <a href="#">Bán lẻ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Giày nữ</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Theo dõi đơn hàng</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Blog của chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Chính sách bảo mật</a>
              </li>
              <li class="pb-2">
                <a href="#">Vận chuyển</a>
              </li>
              <li class="pb-2">
                <a href="#">Liên hệ chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Trợ giúp</a>
              </li>
              <li class="pb-2">
                <a href="#">Cộng đồng</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Phổ biến</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Giảm giá</a>
              </li>
              <li class="pb-2">
                <a href="#">Sản phẩm mới</a>
              </li>
              <li class="pb-2">
                <a href="#">Bán chạy nhất</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Cửa hàng</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Đăng nhập</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallong">Giỏ hàng</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Bộ sưu tập giày nam</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Vận chuyển</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Giới thiệu chúng tôi</a>
              </li>
              <li class="pb-2">
                <a href="#">Giày</a>
              </li>
              <li class="pb-2">
                <a href="#">Liên hệ chúng tôi</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-3">Liên hệ với chúng tôi</h5>
            <div class="footer-contact-text">
              <span>Cửa hàng trực tuyến thời trang 5TV KDC Hoàng Nam, Cái Răng - Cần Thơ.</span>
              <span> Gọi cho chúng tôi: (+33) 800 456 789-987 </span>
              <span class="text-hover fw-bold light-border"><a href="mailto:contact@yourwebsite.com">5Thanhvien@ygmail.com</a></span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer>

  <script src="/public/assets/client/js/jquery-1.11.0.min.js"></script>
  <script src="/public/assets/client//js/plugins.js"></script>
  <script src="/public/assets/client//js/script.js"></script>


<?php

        // unset($_SESSION['success']);
        // unset($_SESSION['error']);
    }
}

?>