<?php

namespace App\Views\Client\Pages\about;

use App\Views\BaseView;
// use App\Views\Client\Components\Category;

class About extends BaseView
{
    public static function render($data = null)
    {

?>

        <style>
            .acc {
                font-family: Arial, sans-serif;

                margin: 0;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;

            }

            /* Cấu trúc chung cho các section */
            .acc section {
                width: 80%;
                max-width: 900px;
                /* Giới hạn độ rộng tối đa của mỗi section */
                margin-bottom: 40px;
                padding: 20px;
                background-color: #1c1c1c;
                /* Màu nền xám đen */
                border-radius: 8px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            /* Tiêu đề trong các section */
            .acc h2 {
                font-size: 24px;
                font-weight: bold;
                color: #ff0000;
                /* Màu chữ đỏ */
                margin-bottom: 15px;
            }

            /* Đoạn văn trong các section */
            .acc p {
                font-size: 16px;
                line-height: 1.6;
                color: #cccccc;
                /* Màu chữ xám sáng */
                margin: 0 auto;
                max-width: 800px;
                /* Giới hạn độ rộng của đoạn văn */
            }

            /* Cấu trúc container cho phần giới thiệu sản phẩm */
            .acc .container {
                display: flex;
                flex-direction: row;
                gap: 20px;
                background-color: #1c1c1c;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                overflow: hidden;
                max-width: 1200px;
                width: 100%;
                padding: 20px;
            }

            /* Cấu trúc cho hình ảnh trong container */
            .acc .image-container {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .acc .image-container:hover {
                transform: scale(1.07);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            /* img {
    width: 100%;
    height: auto;
    max-width: 570px;
    border-radius: 10px;
} */

            /* Cấu trúc cho phần nội dung trong container */
            .acc .content-container {
                flex: 2;
                padding: 20px;
                background-color: #1c1c1c;
                color: #ffffff;
            }

            /* Cấu trúc cho bộ sưu tập sản phẩm */
            .acc .product-collection {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 20px;
                gap: 20px;
            }

            /* Cấu trúc cho hình ảnh sản phẩm */
            .acc .product-images {
                display: flex;
                justify-content: space-between;
                gap: 20px;
                width: 100%;
            }

            .acc .product-image {
                width: 48%;
                height: 300px;
                object-fit: cover;
                border-radius: 5px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .acc .product-image:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            /* Cấu trúc văn bản trong bộ sưu tập */
            .acc .product-collection p {
                font-size: 16px;
                line-height: 1.6;
                color: #cccccc;
                /* Màu chữ xám sáng */
                max-width: 900px;
                margin: 0 auto;
            }

            /* Cải tiến giao diện trên màn hình nhỏ */
            @media (max-width: 768px) {
                .container {
                    flex-direction: column;
                }

                .image-container,
                .content-container {
                    width: 100%;
                }

                img {
                    max-width: 100%;
                    border-radius: 0;
                }

                /* Điều chỉnh hình ảnh sản phẩm trên màn hình nhỏ */
                .product-images {
                    flex-direction: column;
                    align-items: center;
                }

                .product-image {
                    width: 80%;
                    height: 250px;
                    margin-bottom: 10px;
                }

                .product-image:last-child {
                    margin-bottom: 0;
                }

                section {
                    width: 100%;
                    /* Đảm bảo các section chiếm toàn bộ chiều rộng trên màn hình nhỏ */
                }
            }
        </style>
        </head>
        <!-- body -->

        <body class="main-layout">

            <div class="acc">
                <div class="container">
                    <div class="image-container">
                        <img src="/public/assets/client/images/Shoes store.png" alt="Hình minh họa">
                    </div>
                    <div class="content-container">
                        <h2 style="text-align: center;">Giới thiệu sản phẩm</h2>
                        <p>5TV STORE là trang web lý tưởng cho những ai yêu thích giày dép chất lượng và thời trang. Tại đây, khách hàng sẽ khám phá bộ sưu tập đa dạng từ giày thể thao, giày cao gót, giày búp bê đến dép sandal phù hợp với mọi phong cách và lứa tuổi. Chúng tôi chọn lọc kỹ lưỡng sản phẩm từ các thương hiệu uy tín, đảm bảo chất lượng với vật liệu bền bỉ và thiết kế tinh tế. Đế giày êm ái, đường may tỉ mỉ giúp mang lại sự thoải mái tối đa.

                            Với giao diện dễ sử dụng và tính năng tìm kiếm tiện lợi, khách hàng có thể chọn sản phẩm theo giá, màu sắc, kích cỡ chỉ với vài cú click. Chúng tôi cung cấp phương thức thanh toán an toàn, linh hoạt từ thanh toán khi nhận hàng (COD) đến ví điện tử và thẻ tín dụng. Đội ngũ tư vấn viên tận tâm luôn sẵn sàng hỗ trợ và giải đáp mọi thắc mắc, giúp khách hàng an tâm lựa chọn.

                            5TV STORE cam kết giao hàng nhanh chóng và chính sách đổi trả linh hoạt nhằm mang lại trải nghiệm mua sắm tốt nhất. Ngoài ra, chúng tôi thường xuyên có các chương trình khuyến mãi hấp dẫn, mã giảm giá và quà tặng để tri ân khách hàng. Tất cả những yếu tố này giúp 5TV STORE trở thành điểm đến mua sắm đáng tin cậy cho bất kỳ ai muốn tìm kiếm giày dép đẹp, chất lượng với mức giá hợp lý. Trải nghiệm ngay hôm nay để khám phá sự khác biệt và phong cách riêng mà chúng tôi mang lại!</p>
                    </div>
                </div>
                <h1 style="color: #ff0000;">Giới thiệu về 5TV STORE</h1>

                <section class="product-collection">
                    <h2>Bộ sưu tập đa dạng và phong phú</h2>
                    <div class="product-images">
                        <img class="product-image" src="/public/assets/client/images/hinh-nen-giay-jordan-yody-vn-5.jpg" alt="Hình minh họa">
                        <img class="product-image" src="/public/assets/client/images/hinh-nen-giay-jordan-yody-vn-6.jpg" alt="Hình minh họa">
                    </div>
                    <p>
                        Tại 5TV STORE, khách hàng sẽ được khám phá một bộ sưu tập giày dép đa dạng từ giày thể thao, giày cao gót, giày búp bê đến dép xỏ ngón, dép sandal phù hợp cho mọi lứa tuổi và phong cách. Mỗi sản phẩm được chọn lọc cẩn thận từ các thương hiệu uy tín, đảm bảo mang lại sự an tâm tuyệt đối về chất lượng. Chúng tôi tự hào mang đến các thiết kế hiện đại, thời trang và phù hợp với xu hướng mới nhất, giúp khách hàng thể hiện phong cách riêng biệt của mình.
                    </p>
                </section>

                <section>
                    <h2>Chất lượng đảm bảo, giá cả cạnh tranh</h2>
                    <p>
                        5TV STORE cam kết mỗi sản phẩm đều đạt chuẩn về chất lượng với các vật liệu bền bỉ, thân thiện với môi trường. Đế giày êm ái, đường may tỉ mỉ và thiết kế thông minh là những yếu tố mà chúng tôi luôn chú trọng để mang lại sự thoải mái tối đa cho khách hàng. Ngoài ra, chúng tôi cũng cung cấp các sản phẩm với mức giá hợp lý, phù hợp với nhiều đối tượng khách hàng từ sinh viên, nhân viên văn phòng cho đến những người yêu thích sự sang trọng.
                    </p>
                </section>

                <section>
                    <h2>Trải nghiệm mua sắm tiện lợi</h2>
                    <p>
                        Với giao diện thân thiện và quy trình mua sắm nhanh chóng, khách hàng có thể dễ dàng tìm kiếm sản phẩm mình yêu thích chỉ với vài cú click chuột. Các tính năng hỗ trợ như bộ lọc theo giá, màu sắc, kích cỡ, và đánh giá từ người mua khác giúp khách hàng tiết kiệm thời gian và có thêm nhiều thông tin hữu ích để lựa chọn sản phẩm phù hợp. Chúng tôi cũng cung cấp nhiều phương thức thanh toán an toàn và tiện lợi như chuyển khoản, thanh toán khi nhận hàng (COD), ví điện tử và thẻ tín dụng.
                    </p>
                </section>

                <section>
                    <h2>Dịch vụ chăm sóc khách hàng tận tâm</h2>
                    <p>
                        5TV STORE không chỉ chú trọng đến sản phẩm mà còn rất quan tâm đến dịch vụ khách hàng. Đội ngũ tư vấn viên của chúng tôi luôn sẵn sàng hỗ trợ, giải đáp thắc mắc, và cung cấp thông tin chi tiết về từng sản phẩm để giúp khách hàng đưa ra quyết định đúng đắn. Chúng tôi cam kết xử lý các đơn hàng một cách nhanh chóng và đảm bảo giao hàng đến tay khách hàng trong thời gian sớm nhất. Chính sách đổi trả linh hoạt cũng được áp dụng để khách hàng luôn yên tâm khi mua sắm.
                    </p>
                </section>

                <section>
                    <h2>Khuyến mãi và ưu đãi hấp dẫn</h2>
                    <p>
                        Chúng tôi thường xuyên triển khai các chương trình khuyến mãi và ưu đãi đặc biệt nhằm tri ân khách hàng. Các đợt giảm giá, tặng quà kèm theo, và mã giảm giá là những ưu đãi mà 5TV STORE mong muốn mang đến để tăng thêm sự hài lòng và gắn bó của khách hàng.
                    </p>
                </section>

                <p style="color: black;">Với tất cả những điểm mạnh kể trên, 5TV STORE tự tin là sự lựa chọn hoàn hảo cho mọi nhu cầu về giày dép của bạn. Hãy trải nghiệm mua sắm ngay hôm nay và khám phá sự khác biệt mà chúng tôi mang lại!</p>
            </div>









    <?php

    }
}
