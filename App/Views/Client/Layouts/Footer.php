<?php

namespace App\Views\Client\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
    public static function render($data = null)
    {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <!-- basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- mobile metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1, maximum-scale=1">
            <!-- site metas -->
            <title>Shoes</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- bootstrap css -->
            <link rel="stylesheet" href="/public/assets/client/css/bootstrap.min.css">
            <!-- style css -->
            <link rel="stylesheet" href="/public/assets/client/css/style copy.css">
            <!-- Responsive-->
            <link rel="stylesheet" href="/public/assets/client/css/responsive.css">
            <!-- fevicon -->
            <link rel="icon" href="/public/assets/client/images/fevicon.png" type="image/gif" />
            <!-- Scrollbar Custom CSS -->
            <link rel="stylesheet" href="/public/assets/client/css/jquery.mCustomScrollbar.min.css">
            <!-- Tweaks for older IEs-->
            <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
            <!-- owl stylesheets -->
            <link rel="stylesheet" href="/public/assets/client/css/owl.carousel.min.css">
            <link rel="stylesheet" href="/public/assets/client/css/owl.theme.default.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

            <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <!-- body -->

        <body class="main-layout">
            <div class="section_footer">
                <div class="container">
                    <div class="mail_section">
                        <div class="row">
                            <div class="col-sm-6 col-lg-2">
                                <div><a href="#"><img src="/public/assets/client/images/Shoes store.png" style="width: 80px; height: 80px;"></a></div>
                            </div>
                            <div class="col-sm-6 col-lg-2">
                                <div class="footer-logo"><img src="/public/assets/client/images/phone-icon.png"><span class="map_text">+84 0898825728</span></div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-logo"><img src="/public/assets/client/images/email-icon.png"><span class="map_text">%TV@gmail.com</span></div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="social_icon">
                                    <ul>
                                        <li><a href="#"><img src="/public/assets/client/images/fb-icon.png"></a></li>
                                        <li><a href="#"><img src="/public/assets/client/images/twitter-icon.png"></a></li>
                                        <li><a href="#"><img src="/public/assets/client/images/in-icon.png"></a></li>
                                        <li><a href="#"><img src="/public/assets/client/images/google-icon.png"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="footer_section_2">
                        <div class="row">
                            <div class="col-sm-4 col-lg-2">
                                <p class="dummy_text">5TV STORE tự tin là sự lựa chọn hoàn hảo cho mọi nhu cầu về giày dép của bạn.</p>
                            </div>
                            <div class="col-sm-4 col-lg-2">
                                <h2 class="shop_text">Address</h2>
                                <div class="image-icon"><img src="/public/assets/client/images/map-icon.png"><span class="pet_text">KDC Hoàng Quân/Fpoly Polytechnic</span></div>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-3">
                                <h2 class="shop_text">Our group</h2>
                                <div class="delivery_text">
                                    <ul>
                                        <li>Giao hàng</li>
                                        <li>Thông báo pháp lý</li>
                                        <li>Về chúng tôi</li>
                                        <li>Thanh toán an toàn</li>
                                        <li>Liên hệ chúng tôi</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <h2 class="adderess_text">Product</h2>
                                <div class="delivery_text">
                                    <ul>
                                        <li>Giảm giá</li>
                                        <li>Sản phẩm mới</li>
                                        <li>Bán chạy nhất</li>
                                        <li>Liên hệ chúng tôi</li>
                                        <li>Sơ đồ trang</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-2">
                                <h2 class="adderess_text">New</h2>
                                <div class="form-group">
                                    <input type="text" class="enter_email" placeholder="Your Email" name="Name">
                                </div>
                                <button class="subscribr_bt">Register</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            <!-- section footer end -->
            <!-- <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div> -->



            <!-- Javascript files-->
            <script src="/public/assets/client/js/jquery.min.js"></script>
            <script src="/public/assets/client/js/popper.min.js"></script>
            <script src="/public/assets/client/js/bootstrap.bundle.min.js"></script>
            <script src="/public/assets/client/js/jquery-3.0.0.min.js"></script>
            <script src="/public/assets/client/js/plugin.js"></script>
            <!-- sidebar -->
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/custom.js"></script>
            <!-- javascript -->
            <script src="/public/assets/client/js/owl.carousel.js"></script>
            <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
            <!-- <script>
                $(document).ready(function() {
                            $(".fancybox").fancybox({
                                openEffect: "none",
                                closeEffect: "none"
                            });


                            $('#myCarousel').carousel({
                                interval: false
                            });

                            //scroll slides on swipe for touch enabled devices

                            $("#myCarousel").on("touchstart", function(event) {

                                var yClick = event.originalEvent.touches[0].pageY;
                                $(this).one("touchmove", function(event) {

                                    var yMove = event.originalEvent.touches[0].pageY;
                                    if (Math.floor(yClick - yMove) > 1) {
                                        $(".carousel").carousel('next');
                                    } else if (Math.floor(yClick - yMove) < -1) {
                                        $(".carousel").carousel('prev');
                                    }
                                });
                                $(".carousel").on("touchend", function() {
                                    $(this).off("touchmove");
                                });
                            });
            </script> -->
        </body>

        </html>


<?php

        // unset($_SESSION['success']);
        // unset($_SESSION['error']);
    }
}

?>