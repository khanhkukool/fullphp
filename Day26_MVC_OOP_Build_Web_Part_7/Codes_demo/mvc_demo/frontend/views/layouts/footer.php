<!--footer-->
<div class="footer">
    <div class="main-content">
        <div class="main-content-wrapper container">
            <div class="row">
                <div class="image-footer-wrap col-md-3">
                    <img src="assets/images/logoweb_cut_2.jpg" class="image-footer img-responsive"/>
                </div>
                <div class="address-footer-wrap col-md-6">
                    Tòa nhà CMC, Số 11, Phố Duy Tân, Phường Dịch Vọng Hậu, Cầu Giấy, Hà Nội <br/>
                    Hotline: 024 3795 8668 / 8605 <br/>
                    Email: nhansu@cmc.com.vn
                </div>
                <div class="social-footer-wrap col-md-3">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="footer-copyright">
                Copyright 2019 by Nvmanh. All rights reserved
            </p>
        </div>
    </div>
</div>

<!-- Register popup html source start -->
<div class="m-modal-box" id="registerModal">
    <div class="m-modal-overlay"></div>
    <div class="m-modal-content small">
        <div class="m-modal-header">
            <h3 class="m-modal-title">Register</h3>
            <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
        </div>
        <div class="m-modal-body">
            <div class="m-modal-social-logins">
                <div class="columns column-2">
                    <button class="frm-button facebook material-button full" type="button">Facebook</button>
                </div>
                <div class="columns column-2">
                    <button class="frm-button twitter material-button full" type="button">Twitter</button>
                </div>
                <div class="columns column-2">
                    <button class="frm-button google material-button full" type="button">Google</button>
                </div>
            </div>

            <div class="m-modal-seperator"><span>OR</span></div>

            <form>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="name" placeholder="Name">
                </div>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="username" placeholder="Username">
                </div>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="email" placeholder="Email">
                </div>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="password" placeholder="Password">
                </div>
                <div class="frm-row">
                    <label class="frm-check-radio-label"><input type="checkbox" name="test"> <span>I accept your <a
                                    href="#">register policy</a>.</span></label>
                </div>
                <div class="frm-row">
                    <button class="frm-button material-button full" type="button">Register</button>
                </div>
            </form>
            <div class="frm-row">
                <p class="txt-center">Bạn đã có tài khoản? <a href="#" data-modal="loginModal">Đăng nhập</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Register popup html source end ---->

<!-- Login popup html source start -->
<div class="m-modal-box" id="loginModal">
    <div class="m-modal-overlay"></div>
    <div class="m-modal-content small">
        <div class="m-modal-header">
            <h3 class="m-modal-title">Đăng nhập</h3>
            <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
        </div>
        <div class="m-modal-body">
            <div class="m-modal-social-logins">
                <div class="columns column-3">
                    <button class="frm-button facebook material-button full" type="button">Facebook</button>
                </div>
                <div class="columns column-3">
                    <button class="frm-button google material-button full" type="button">Google</button>
                </div>
            </div>

            <div class="m-modal-seperator"><span>OR</span></div>

            <form>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="email" placeholder="Email">
                </div>
                <div class="frm-row">
                    <input class="frm-input" type="text" name="password" placeholder="Password">
                </div>
                <div class="frm-row">
                    <button class="frm-button material-button full" type="button">Login</button>
                </div>
            </form>
            <div class="frm-row">
                <p class="txt-center">Bạn chưa có tài khoản? <a href="#" data-modal="registerModal">Đăng ký ngay</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Login popup html source end -->

<div class="overlay"></div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Tooltip plugin (zebra) js file -->
<script src="assets/js/zebra_tooltips.min.js"></script>


<!-- Owl Carousel plugin js file -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Ideabox theme js file. you have to add all pages. -->
<script src="assets/js/script.js"></script>

</body>

</html>