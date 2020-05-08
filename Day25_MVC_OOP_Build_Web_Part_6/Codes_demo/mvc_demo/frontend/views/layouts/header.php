<!DOCTYPE html>
<html lang="en">
<head>
<!--    khi sử dụng rewrite url, cần set lại base cho hệ thống-->
<!--    sử dụng thẻ <base />-->
    <base href="<?php echo $_SERVER['SCRIPT_NAME']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo MVC</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" href="assets/css/zebra_tooltips.min.css"/>
    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" href="assets/css/main-style.css"/>
    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" href="assets/css/responsive-style.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>

<a href="#" class="scrollup"></a>

<!-- header start -->
<header class="header">
    <div class="header-wrapper">

        <!--sidebar menu toggler start -->
        <div class="toggle-sidebar material-button">
            <i class="material-icons">&#xE5D2;</i>
        </div>
        <!--sidebar menu toggler end -->

        <!--logo start -->
        <div class="logo-box">
            <h1>
                <a href="index.html" class="logo"></a>
            </h1>
        </div>
        <!--logo end -->

        <div class="header-menu">

            <!-- header left menu start -->
            <ul class="header-navigation" data-show-menu-on-mobile>
                <li>
                    <a href="#" class="material-button submenu-toggle">HOME</a>

                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">
                        Thế giới &nbsp;
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="header-submenu">
                        <ul>
                            <li><a href="index.html">Điểm tin thế giới</a></li>
                            <li><a href="index2.html">Khám phá</a></li>
                            <li><a href="index3.html">Hồ sơ</a></li>
                            <li><a href="index4.html">Người Việt năm châu</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Xã hội</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Kinh doanh</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Sức khoẻ</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Entertaiment</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Công nghệ</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Đời sống</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Du lịch</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Thể thao</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Videos</a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle">Xe cộ</a>
                </li>
            </ul>
            <!-- header left menu end -->

        </div>
        <div class="header-right with-seperator">

            <!-- header right menu start -->
            <ul class="header-navigation">
                <li>
                    <a href="#" class="material-button search-toggle"><i class="material-icons">&#xE8B6;</i></a>
                </li>
                <li>
                    <a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span
                                class="hide-on-tablet">Tài khoản</span></a>
                    <div class="header-submenu">
                        <ul>
                            <li><a href="#" data-modal="loginModal">Đăng nhập</a></li>
                            <li><a href="#" data-modal="registerModal">Đăng ký</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- header right menu end -->

        </div>

        <!--header search panel start -->
        <div class="search-bar">
            <form class="search-form">
                <div class="search-input-wrapper">
                    <input type="text" name="qq" placeholder="Tìm kiếm..." class="search-input">
                    <button type="submit" name="search" class="search-submit"><i class="material-icons">&#xE5C8;</i>
                    </button>
                </div>
                <span class="search-close search-toggle">
						<i class="material-icons">&#xE5CD;</i>
					</span>
            </form>
        </div>
        <!--header search panel end -->

    </div>
</header>
<!-- header end -->
