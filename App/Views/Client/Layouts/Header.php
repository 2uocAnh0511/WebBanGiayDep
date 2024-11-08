<?php

namespace App\Views\Client\Layouts;

use App\Helpers\AuthHelper;
use App\Views\BaseView;

class Header extends BaseView
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
            <!-- header section start -->
            <div class="header_section header_main">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/"><img src="/public/assets/client/images/Shoes store.png" style="width: 80px; height: 80px;"></a>
                        </div>
                        <div class="col">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-item nav-link" href="/">Home</a>
                                        <a class="nav-item nav-link" href="/products">Product</a>
                                        <a class="nav-item nav-link" href="">Shoes</a>
                                        <a class="nav-item nav-link" href="/contact">Contact</a>
                                        <a class="nav-item nav-link" href="/about">About</a>
                                        <a class="nav-item nav-link last" href="#"><img src="/public/assets/client/images/search_icon.png"></a>
                                        <a class="nav-item nav-link last" href="/cart"><img src="/public/assets/client/images/shop_icon.png"></a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


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

    }
}

?>