<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Open+Sans:wght@400;600;700&family=Roboto&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/reset.css">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/responsive.css">

    <link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Len Official</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="wp-inner d-flex justify-content-between">
                <a href="?view=home" id="logo">Len Official</a>
                <nav class="d-flex">
                    <ul id="main-menu" class="d-none d-md-flex">
                        <li><a href="?view=home">Trang chủ</a></li>
                        <li><a href="?view=product">Sản phẩm</a></li>
                        <li><a href="?view=introduce">Giới thiệu</a></li>
                        <li><a href="?view=blog">Blog</a></li>
                        <li><a href="?view=contact">Liên hệ</a></li>
                    </ul>
                    <div id="toggle" class="d-block d-md-none">
                        <i class="fa-solid fa-bars icon-toggle"></i>
                    </div>
                    <ul id="menu-responsive">
                        <li><a href="?view=home">Trang chủ</a></li>
                        <li><a href="?view=product">Sản phẩm</a></li>
                        <li><a href="?view=introduce">Giới thiệu</a></li>
                        <li><a href="?view=blog">Blog</a></li>
                        <li><a href="?view=contact">Liên hệ</a></li>
                    </ul>
                    <ul id="list-icon" class="d-flex">
                        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                        <li>
                            <a href="?view=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
        <!-- end header -->
        <div id="wp-content">
            <?php
            $view = isset($_GET['view']) ? $_GET['view'] : 'home';
            require "views/{$view}.php";

            ?>
        </div>
        <!-- end content -->
        <div id="footer">
            <div id="foot-top">
                <div class="wp-inner d-sm-flex">
                    <div class="box logo">
                        <div class="box-head">
                            <h3>Len Official</h3>
                        </div>
                        <div class="box-body">
                            <ul class="list-item">
                                <li>
                                    <p>106 - Trần Bình - Cầu Giấy - Hà Nội</p>
                                </li>
                                <li>
                                    <p>0987.654.321 - 0989.989.989</p>
                                </li>
                                <li>
                                    <p>vshop@gmail.com</p>
                                </li>
                            </ul>
                        </div>


                    </div>


                    <div class="box about-us">
                        <div class="box-head">
                            <h3>Về chúng tôi</h3>
                        </div>

                        <div class="box-body">
                            <p>Len Official ra đời từ năm 2013 luôn cung cấp các sản phẩm chất lượng, cam kết làm cho vẻ đẹp của thời trang  có thể tiếp cận được với tất cả mọi người. Chúng tôi sử dụng công nghệ sản xuất theo yêu cầu để kết nối các nhà cung cấp với chuỗi cung ứng linh hoạt của chúng tôi, giảm lãng phí hàng tồn kho và cho phép chúng tôi cung cấp nhiều loại sản phẩm giá cả phải chăng cho khách hàng trên khắp thế giới.</p>
                        </div>
                    </div>

                    <div class="box follow-us">
                        <div class="box-head">
                            <h3>Theo dõi</h3>
                        </div>

                        <div class="box-body">
                            <ul class="list-social">
                                <li>
                                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                                </li>

                                <li>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                                </li>

                                <li>
                                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="foot-bottom">
                <div class="wp-inner d-flex justify-content-between">
                    <p class="copy-right">
                        © Bản quyền thuộc về Len Official
                    </p>

                    <ul id="footer-copy-right" class="d-flex">
                        <li><a href="">Bảo mật</a></li>
                        <li><a href="">Quảng cáo</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            //product
            $('.sort-bar-dropdown').hover(function() {
                $('ul.list-menu').show();
                $('ul.list-menu').toggleClass('open');
            })
            $('ul.list-menu li').click(function() {
                $('ul.list-menu').toggle();
                if (!$(this).hasClass('active')) {
                    $('ul.list-menu li').removeClass('active');
                    $(this).addClass('active') && $('ul.list-menu li.active i').addClass('open');

                    if ($('ul.list-menu li.active span').hasClass('introduce')) {
                        $('.sort-bar-select span').text('Giới thiệu')

                    }
                    if ($('ul.list-menu li.active span').hasClass('popular')) {
                        $('.sort-bar-select span').text('Phổ biến nhất')

                    }
                    if ($('ul.list-menu li.active span').hasClass('newcome')) {
                        $('.sort-bar-select span').text('Mới đến')

                    }
                    if ($('ul.list-menu li.active span').hasClass('top-rated')) {
                        $('.sort-bar-select span').text('Đánh giá hàng đầu')

                    }
                    if ($('ul.list-menu li.active span').hasClass('low-to-high-price')) {
                        $('.sort-bar-select span').text('Giá thấp đến cao')

                    }
                    if ($('ul.list-menu li.active span').hasClass('high-to-low-price')) {
                        $('.sort-bar-select span').text('Giá cao đến thấp')

                    }
                }
            })
            $('span.checkbox-inner').click(function() {
                var img_src = $(this).find('img').attr('src');

                $('.thumb-nail.open img').attr('src', img_src);
                $('span.checkbox-inner').removeClass('active') && ('.card').removeClass('open-1');
                $(this).addClass('active') && $('.thumb-nail').addClass('open') && ('.card').addClass('open-1');

            })
            $('.side-filter-item-title').click(function() {
                $(this).next('.side-filter-item-content').toggle() && $(this).children('.icon-minus').show() && $(this).children('.icon-plus').toggle();
               

            })

            $('.side-filter-item-title-res').click(function() {   
                $(this).next('.side-filter-item-content').toggle() && $(this).children('.icon-plus').toggle() && $('.icon-minus').show();
            })

            $('.radio-input').click(function() {
                $(this).toggleClass('open');
                $('.icon-circle').removeClass('active');
                $(this).children('.icon-circle').toggleClass('active');


            })

            $('ul.pagination li').click(function() {
                $('ul.pagination li').removeClass('active');
                $(this).addClass('active');
                return false;
            })
            // END DETAIL PRODUCT
            $('#toggle').click(function() {
                $('ul#menu-responsive').slideDown();

            })
            $(window).scroll(function() {
                $('ul#menu-responsive').hide();
            });
            $('#wp-content').click(function() {
                $('ul#menu-responsive').hide();

            })
            //modal
            $('.buy-product').click(function() {
                $('#demo-modal').modal();
                return false;
            })
            $('.icon-close').click(function() {
                $('.modal-buy-product').hide();
                return false;
            })

            $('ul.list-thumb li').click(function() {
                var src_img = $(this).find('img').attr('src');
                $('.show-picture img').attr('src', src_img);
                $('ul.list-thumb li').removeClass('active');
                $(this).addClass('active');
                return false;
            });
        })
    </script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.owl-carousel.owl-carousel-1').owlCarousel({
                loop: true,
                dots: false,
                margin: 10,
                nav: true,
                autoplay: true,
                slideBy: 6,
                smartSpeed: 50,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }


            })


        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>