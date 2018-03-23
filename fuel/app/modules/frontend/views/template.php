<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CÔNG TY TNHH THƯƠNG MẠI – XỬ LÝ MÔI TRƯỜNG</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="môi trường, thành lập, công ty thành lập, xử lý môi trường thành lập, thành lập company, xử lý môi trường, tiêu huỷ hàng hoá, thu mua phế liệu, tư vấn môi trường" name="keywords">
        <meta content="CÔNG TY TRÁCH NHIỆM HỮU HẠN THƯƠNG MẠI - XỬ LÝ MÔI TRƯỜNG THÀNH LẬP, Cty môi trường Thành Lập là công ty tiên phong cung cấp dịch vụ tiêu hủy xủ lý hàng hóa hết hạn sử dụng tại TP.HCM và khu vực Miền Nam." name="description">
        <meta name="google-site-verification" content="44Q_MqyA2Tvpwgzx38mF2yipMrfMukG_6lYi75Guudo" />
        <!-- Favicons -->
        <link href="/public/assets/frontend/img/favicon.png" rel="icon">
        <link href="/public/assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Bootstrap CSS File -->
        <link href="/public/assets/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="/public/assets/admin/js/jquery-1.11.1.min.js"></script>
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->
        <link href="/public/assets/frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/public/assets/frontend/lib/animate/animate.min.css" rel="stylesheet">
        <!-- Main Stylesheet File -->
        <link href="/public/assets/frontend/css/style.css?v=20180319" rel="stylesheet">
        
        <!-- =======================================================
            Theme Name: Regna
            Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
            Author: BootstrapMade.com
            License: https://bootstrapmade.com/license/
            ======================================================= -->
    </head>

<?php 
    $infoPage = \Request::active();
    $listCate = \Model_Cate::getListCateGroupBrand();
?>
    <body>
        <!--==========================
            Header
            ============================-->
        <header id="header">
            <div class="container">
                <div id="logo" class="pull-left">
                    <a href="/#hero"><img src="/public/assets/frontend/img/logo.png" alt="" title="" /></img></a>
                    <!-- Uncomment below if you prefer to use a text logo -->
                    <!--<h1><a href="#hero">Regna</a></h1>-->
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/">Trang chủ</a></li>
                        <li><a href="/gioi-thieu">Giới Thiệu</a></li>
                        <li class="menu-has-children">
                            <a href="#services">Dịch Vụ</a>
                            <ul>
                                <li><a href="/van-chuyen-thu-gom">Vận chuyển, thu gom và xử lý chất thải</a></li>
                                <li><a href="/thieu-huy-hang-hoa">Tiêu hủy hàng hóa</a></li>
                                <li><a href="/thu-mua-phe-lieu">Thu mua phế liệu</a></li>
                                <li><a href="/tu-van-moi-truong">Tư vấn môi trường</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children">
                            <a href="/giay-phep">Giấy Phép</a>
                            <ul>
                                <?php 
                                    foreach ($listCate[1] as $key => $value) {
                                        echo "<li><a href='/giay-phep?c={$key}'>{$value}</a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-has-children">
                            <a href="/ho-so-nang-luc">Hồ Sơ Năng Lực</a>
                            <ul>
                                <?php 
                                    foreach ($listCate[2] as $key => $value) {
                                        echo "<li><a href='/ho-so-nang-luc?c={$key}'>{$value}</a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-has-children">
                            <a href="/van-ban-phap-quy">Văn Bản Pháp Quy</a>
                            <ul>
                                <?php 
                                    foreach ($listCate[3] as $key => $value) {
                                        echo "<li><a href='/van-ban-phap-quy?c={$key}'>{$value}</a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="/tin-moi-truong">Tin Môi Trường</a></li>
                        <li><a href="/#contact">Liên Hệ</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </header>
        <!-- #header -->
        <!--==========================
            Hero Section
            ============================-->
            
        <?php
            if($infoPage->controller == "Frontend\Controller_Index") {
        ?>
        <section id="hero">
            <div class="hero-container">
                <img src="/public/assets/frontend/img/logo_.png" width="200px"/>
                <h1 style="color:#20bf6b ; text-shadow: -1px 0 #black, 0 1px #black, 1px 0 black, 0 -1px black;">THÀNH LẬP</h1>
                <h2>CÔNG TY TNHH THƯƠNG MẠI – XỬ LÝ MÔI TRƯỜNG </h2>
                <a href="#about" class="btn-get-started">Get Started</a>
            </div>
        </section>
        <?php
            }
        ?>
        <!-- #hero -->
        <main id="main">
        <!--==========================
            About Us Section
            ============================-->
            <?php echo $content;?>
            
            <!--==========================
                Contact Section
                ============================-->
            <section id="contact">
                <div class="container wow fadeInUp">
                    <div class="section-header">
                        <h3 class="section-title">Liên Hệ</h3>
                        <p class="section-description">VP HCM - 39 Cao Triều, Phường Tân Phong, Quận 7, TP.HCM</p>
                    </div>
                </div>
                <iframe
                width="100%"
                height="300"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDUY6ev7kFUcCj0NDcpsA8i_IQTLfHB8d8
                    &q=Space+Needle,Seattle+WA" allowfullscreen>
                </iframe>
                <div class="container wow fadeInUp">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="info">
                                <div>
                                    <i class="fa fa-map-marker"></i>
                                    <p> Nhà Máy Xử Lý - Lô 147, tổ 3, ấp Bàu Trăng, xã Nhuận Đức<br>huyện Củ Chi, TP.HCM</p>
                                </div>
                                <div>
                                    <i class="fa fa-map-marker"></i>
                                    <p> VP HCM - 39 Cao Triều, Phường Tân Phong<br>Quận 7, TP.HCM</p>
                                </div>
                                <div>
                                    <i class="fa fa-envelope"></i>
                                    <p>thanhlapcom@yahoo.com</p>
                                </div>
                                <div>
                                    <i class="fa fa-phone"></i>
                                    <p><a href="tel:02833603072">(028) 3860 3072</a></p>
                                </div>
                            </div>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8">
                            <div class="form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <form action="" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #contact -->
            <style>
                .ten_ya{
                    margin:10px 0px !important;
                    font-size:16px !important;
                    color:#1872c5 !important;
                }
                .dt_ya{
                    margin:10px 0px !important;
                    font-size:14px !important;
                    color:#1872c5 !important;
                    
                }
                .ho_tro_h{
                    margin-bottom:10px;
                    border-bottom:1px dashed #ccc;
                    padding:0px 10px;
                    box-sizing:border-box;
                }
                div.content1 {
                    float: left;
                    width: 301px;
                    border-left:none;
                    border-right:none;
                    border-bottom:none;
                    border-radius: 0px 0px 5px 5px;
                }      
                a {
                    color: #2dc997;
                }          
            </style>
            <div class="content1 chon" style="background: url(/public/assets/frontend/img/hotro_bg.png) 6% 12px no-repeat; position: fixed; right: 0px; top: 200px; width: 350px; z-index: 2147483647; overflow: hidden; min-height: 300px; margin-right: -300px;">
                <div style="width:300px; float:right;min-height:200px; background:#FFF;border-bottom-left-radius:8px;border-top-left-radius:8px; min-height:252px;">
                    <div class="ho_tro_h">
                        <p class="ten_ya">Tên: <b>Kinh doanh Mr thế </b></p>
                        <p class="dt_ya">Điện thoại: <b><a href="tel:+84915665333">0915.665.333</a></b></p>
                        <p class="dt_ya">Email: <b><a href="mailto:kd.thanhlapcom@gmail.com?Subject=[Website]%20Hỗ%20Trợ%20" target="_top">kd.thanhlapcom@gmail.com</a></b></p>
                    </div>
                    <div class="clear"></div>
                    <div class="ho_tro_h">
                        <p class="ten_ya">Tên: <b>Kỹ thuật Mr. Vũ</b></p>
                        <p class="dt_ya">Điện thoại: <b><a href="tel:+84903889268">0903.889.268</a></b></p>
                        <p class="dt_ya">Email: <b><a href="mailto:moitruongtl@gmail.com?Subject=[Website]%20Hỗ%20Trợ%20" target="_top">moitruongtl@gmail.com</a></b></p>
                    </div>
                    <div class="clear"></div> 
                    <div class="ho_tro_h">
                        <p class="ten_ya">Tên: Ms. Hạnh<b></b></p>
                        <p class="dt_ya">Điện thoại: <b><a href="tel:+84907089325">0907.089.325</a></b></p>
                        <p class="dt_ya">Email: <b><a href="mailto:duthimyhanh.hcmus@gmail.com?Subject=[Website]%20Hỗ%20Trợ%20" target="_top">duthimyhanh.hcmus@gmail.com</a></b></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
                <script>
                $(document).ready(function(e) {
                    $('.chon').animate({marginRight:'-300px'},1000);
                    $('.chon').hover(function(){
                            $(this).stop().animate({marginRight:'0px'},1000);
                        },function(){
                            $(this).stop().animate({marginRight:'-300px'},1000);
                            });
                });
                </script>
        </main>
        <!--==========================
            Footer
            ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Thanh Lap</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Bootstrap Templates by <a href="https://bootstrapmade.com/">Regna</a>
                </div>
            </div>
        </footer>
        <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId            : '359751687855910',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.12'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/vi_VN/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-customerchat"
        page_id="1553963951520556"
        theme_color="#6699cc"
        logged_in_greeting="Chat với chúng tôi một cách nhanh nhất"
        logged_out_greeting="Chat với chúng tôi một cách nhanh nhất"
        >
        </div>
        <!-- #footer -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="/public/assets/frontend/lib/jquery/jquery.min.js"></script>
        <script src="/public/assets/frontend/lib/jquery/jquery-migrate.min.js"></script>
        <script src="/public/assets/frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/public/assets/frontend/lib/easing/easing.min.js"></script>
        <script src="/public/assets/frontend/lib/wow/wow.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
        <script src="/public/assets/frontend/lib/waypoints/waypoints.min.js"></script>
        <script src="/public/assets/frontend/lib/counterup/counterup.min.js"></script>
        <script src="/public/assets/frontend/lib/superfish/hoverIntent.js"></script>
        <script src="/public/assets/frontend/lib/superfish/superfish.min.js"></script>
        <!-- Template Main Javascript File -->
        <script src="/public/assets/frontend/js/main.js"></script>
    </body>
</html>