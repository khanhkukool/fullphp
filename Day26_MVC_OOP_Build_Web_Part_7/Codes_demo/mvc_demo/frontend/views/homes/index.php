<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>

<!--Main container start -->
<main class="main-container">
    <section class="main-highlight">
        <div class="highlight-carousel slider-carousel">

            <div class="owl-carousel" id="postCarousel">
                <div class="item">

                    <article class="post-box"
                             style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg);">
                        <div class="post-overlay">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Thể thao</a>
                            <h3 class="post-title">Facebook: Cambridge Analytica may have accessed some users’ private
                                messages</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by Nguyễn Viết Mạnh"
                                               rel="author">Nguyễn Viết Mạnh</a>
				    					</span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
				    						<abbr class="published updated"
                                                  title="December 4, 2017">12 November 2018</abbr>
				    					</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="post-overlayLink"></a>
                    </article>

                </div>
                <div class="item">

                    <article class="post-box"
                             style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img4.jpg);">
                        <div class="post-overlay">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Thể thao</a>
                            <h3 class="post-title">Instagram will soon let you download your data, just like
                                Facebook</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by Nguyễn Viết Mạnh"
                                               rel="author">Nguyễn Viết Mạnh</a>
				    					</span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
				    						<abbr class="published updated"
                                                  title="December 4, 2017">12 November 2018</abbr>
				    					</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="post-overlayLink"></a>
                    </article>

                </div>
                <div class="item">

                    <article class="post-box"
                             style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg);">
                        <div class="post-overlay">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Thể thao</a>
                            <h3 class="post-title">It’s time for Google to retire Chromecast for Android TV</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by Nguyễn Viết Mạnh"
                                               rel="author">Nguyễn Viết Mạnh</a>
				    					</span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
				    						<abbr class="published updated"
                                                  title="December 4, 2017">12 November 2018</abbr>
				    					</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="post-overlayLink"></a>
                    </article>

                </div>
                <div class="item">

                    <article class="post-box"
                             style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img10.jpg);">
                        <div class="post-overlay">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Thể thao</a>
                            <h3 class="post-title">Instagram will soon let you download your data, just like
                                Facebook</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar"
                                         src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                                         class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by Nguyễn Viết Mạnh"
                                               rel="author">Nguyễn Viết Mạnh</a>
				    					</span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
				    						<abbr class="published updated"
                                                  title="December 4, 2017">12 November 2018</abbr>
				    					</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="post-overlayLink"></a>
                    </article>

                </div>
            </div>

        </div>
    </section>
    <section class="main-content">
        <div class="main-content-wrapper">
            <div class="content-body">
                <div class="content-timeline">
                    <!--Timeline header area start -->
                    <div class="post-list-header">
                        <h1 class="post-list-title">
                            <a href="#" class="link-category-item">Sản phẩm nổi bật</a>
                        </h1>
                    </div>
                    <!--Timeline header area end -->

                    <!--Timeline items start -->
                    <?php if (empty($products)): ?>
                        <h2>Không có sản phẩm nào</h2>
                    <?php else: ?>
                        <div class="timeline-items">
                            <?php
                            foreach ($products AS $product):
                                //set link url đã được rewrite
//                              $product_link = 'index.php?controller=product&action=detail&id=';
                                $alias = Helper::alias($product['title']);
                                $product_id = $product['id'];
                                $product_link = "chi-tiet-san-pham/$alias/$product_id";
                                //format ngày tạo theo định dạng 30-10-2019
                                //dữ liệu datetime trong mysql đang là YYYY-mm-dd H:i:s
                                $created_at = date('d-m-Y', strtotime($product['created_at']));
                                $product_image_path = "../backend/assets/uploads/" . $product['avatar'];
                                //format lại giá sản phẩm theo dạng 1.000.000
                                $product_price =
                                    number_format($product['price'],
                                        0, '.', '.');
                                //tạo url rewrite cho trang giỏ hàng và thanh toán
                                $cart_url = "them-gio-hang/$product_id";
                                $payment_url = 'thanh-toan';
                                ?>
                                <!--ITEM-->
                                <div class="timeline-item">
                                    <div class="timeline-left">
                                        <div class="timeline-left-wrapper">
                                            <a href="<?php echo $product_link ?>" class="timeline-category"
                                               data-zebra-tooltip title="<?php echo $product['category_name'] ?>"><i
                                                        class="material-icons">&#xE894;</i></a>
                                            <span class="timeline-date">
                                                <?php echo $created_at; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="timeline-right">
                                        <div class="timeline-post-image">
                                            <a href="<?php echo $product_link; ?>">
                                                <img src="<?php echo $product_image_path ?>"
                                                     width="200">
                                            </a>
                                        </div>

                                        <div class="timeline-post-content">
                                            <a href="<?php echo $product_link; ?>"
                                               class="timeline-category-name font-arial">
                                                <?php echo $product['category_name']; ?>
                                            </a>
                                            <a href="<?php echo $product_link; ?>">
                                                <h3 class="timeline-post-title">
                                                    <?php echo $product['title']; ?>
                                                </h3>
                                            </a>
                                            <div class="price">
                                                <?php echo $product_price; ?>₫
                                                <span class="store-amount store-common">Còn hàng</span>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="<?php echo $cart_url?>" class="btn-add-cart btn btn-primary">
                                                    <i class="fa fa-plus"></i> Thêm vào giỏ hàng
                                                </a>

                                                <a href="<?php echo $payment_url; ?>" class="btn-buy btn btn-success">
                                                    <i class="fa fa-dollar"></i> Mua ngay
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--END ITEM-->
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="category-one category-two">

                    <h1 class="post-list-title">
                        <a href="#" class="link-category-item">Tin mới nhất</a>
                    </h1>
                    <!--<select class="frm-input">-->
                    <!--<option value="1">Thể thao</option>-->
                    <!--<option value="1">Book</option>-->
                    <!--<option value="1">Cinema</option>-->
                    <!--</select>-->

                    <div class="two-item-wrap">
                        <div class="link-secondary-wrap">
                            <div class="item-link-secondary">
                                <a href="detail.html">
                                    <img class="secondary-img img-responsive" src="assets/images/category-img-1.png"/>
                                </a>

                                <div class="two-item-title">
                                    <a href="detail.html" class="two-item-link">
                                        <h4 class="timeline-post-title">
                                            Suốt mùa 2 "Người ấy là ai", Trấn Thành & Hương Giang đã để lại vô số phát
                                            ngôn ấn tượng!
                                        </h4>
                                    </a>
                                    <div class="category-time-ago">
                                        <a href="#" class="timeline-category-name font-arial">Tin tức</a> - <span
                                                class="time-ago">3 phút trước</span>
                                    </div>
                                    <div class="short-description">
                                        Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp,
                                        ngay
                                        ngắn, trình bày gọn gàng.
                                        Nhiều người còn ...
                                    </div>

                                </div>
                            </div>
                            <div class="item-link-secondary">
                                <a href="detail.html">
                                    <img class="secondary-img img-responsive" src="assets/images/category-img-1.png"/>
                                </a>

                                <div class="two-item-title">
                                    <a href="detail.html" class="two-item-link">
                                        <h4 class="timeline-post-title">
                                            Suốt mùa 2 "Người ấy là ai", Trấn Thành & Hương Giang đã để lại vô số phát
                                            ngôn ấn tượng!
                                        </h4>
                                    </a>
                                    <div class="category-time-ago">
                                        <a href="#" class="timeline-category-name font-arial">Tin tức</a> -
                                        <span class="time-ago">3 phút trước</span>
                                    </div>
                                    <div class="short-description">
                                        Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp, ngay
                                        ngắn, trình bày gọn gàng.
                                        Nhiều người còn ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="seperator-line"></div>


            </div>
            <div class="content-sidebar">
                <div class="sidebar_inner">

                    <div class="widget-item">
                        <div class="post-list-header">
                            <h1 class="post-list-title">
                                <a href="#" class="link-category-item">Đọc nhiều nhất</a>
                            </h1>
                        </div>
                        <div class="w-boxed-post">
                            <ul>
                                <li class="active">
                                    <a href="detail.html"
                                       style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg);">
                                        <div class="box-wrapper">
                                            <div class="box-left">
                                                <span>1</span>
                                            </div>
                                            <div class="box-right">
                                                <h3 class="p-title">Things to Consider When Choosing City Moving
                                                    Companies</h3>
                                                <div class="p-icons">
                                                    213 likes . 124 comments
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail.html"
                                       style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg);">
                                        <div class="box-wrapper">
                                            <div class="box-left">
                                                <span>2</span>
                                            </div>
                                            <div class="box-right">
                                                <h3 class="p-title">Things to Consider When Choosing City Moving
                                                    Companies</h3>
                                                <div class="p-icons">
                                                    213 likes . 124 comments
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail.html"
                                       style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg);">
                                        <div class="box-wrapper">
                                            <div class="box-left">
                                                <span>3</span>
                                            </div>
                                            <div class="box-right">
                                                <h3 class="p-title">Things to Consider When Choosing City Moving
                                                    Companies</h3>
                                                <div class="p-icons">
                                                    213 likes . 124 comments
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail.html"
                                       style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img3.jpg);">
                                        <div class="box-wrapper">
                                            <div class="box-left">
                                                <span>4</span>
                                            </div>
                                            <div class="box-right">
                                                <h3 class="p-title">Things to Consider When Choosing City Moving
                                                    Companies</h3>
                                                <div class="p-icons">
                                                    213 likes . 124 comments
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="widget-item">
                        <div class="w-header">
                            <div class="w-title"></div>
                            <div class="w-seperator"></div>
                        </div>
                        <div class="w-carousel-post">
                            <div class="owl-carousel" id="widgetCarousel">
                                <div class="item">
                                    <a href="#">
                                        <div class="w-play-img">
                                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img4.jpg"
                                                 width="300">
                                            <span class="w-video-icon"><i class="material-icons">&#xE038;</i></span>
                                        </div>
                                        <span class="w-post-title">It has roots in a piece of classical Latin literature from</span>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg"
                                             width="300">
                                        <span class="w-post-title">Lorem Ipsum used since</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg"
                                             width="300">
                                        <span class="w-post-title">English versions from the 1914 translation</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg"
                                             width="300">
                                        <span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-header">
                        <div class="w-title">Quảng cáo</div>
                        <div class="w-seperator"></div>

                    </div>

                    <a href="#" class="widget-ad-box">
                        <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/adbox300x250.png"
                             width="300" height="250">
                    </a>

                </div>
            </div>

            <div class="category-list">
                <a class="category-list-home" href="">Trang chủ</a>
                <ul>
                    <li><h6><a href="">Video</a></h6></li>
                    <li><h6><a href="">Thế giới</a></h6></li>
                    <li><h6><a href="">Xã hội</a></h6></li>
                    <li><h6><a href="">Kinh doanh</a></h6></li>
                    <li><h6><a href="">Thể thao</a></h6></li>
                </ul>
                <ul>
                    <li><h6><a href="">Video</a></h6></li>
                    <li><h6><a href="">Thế giới</a></h6></li>
                    <li><h6><a href="">Xã hội</a></h6></li>
                    <li><h6><a href="">Kinh doanh</a></h6></li>
                    <li><h6><a href="">Thể thao</a></h6></li>
                </ul>
                <ul>
                    <li><h6><a href="">Video</a></h6></li>
                    <li><h6><a href="">Thế giới</a></h6></li>
                    <li><h6><a href="">Xã hội</a></h6></li>
                    <li><h6><a href="">Kinh doanh</a></h6></li>
                    <li><h6><a href="">Thể thao</a></h6></li>
                </ul>
                <ul>
                    <li><h6><a href="">Video</a></h6></li>
                    <li><h6><a href="">Thế giới</a></h6></li>
                    <li><h6><a href="">Xã hội</a></h6></li>
                    <li><h6><a href="">Kinh doanh</a></h6></li>
                    <li><h6><a href="">Thể thao</a></h6></li>
                </ul>
                <ul>
                    <li><h6><a href="">Video</a></h6></li>
                    <li><h6><a href="">Thế giới</a></h6></li>
                    <li><h6><a href="">Xã hội</a></h6></li>
                    <li><h6><a href="">Kinh doanh</a></h6></li>
                    <li><h6><a href="">Thể thao</a></h6></li>
                </ul>
            </div>
        </div>


    </section>

</main>
<?php
require_once 'views/layouts/footer.php';
?>

