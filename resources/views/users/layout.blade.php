<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cửa hàng đồ điện tử</title>
    <meta name="keywords" content="đồ điện tử">
    <meta name="description" content="Cửa hàng đồ điện tử">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="users/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="users/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="users/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="users/assets/images/icons/site.html">
    <link rel="mask-icon" href="users/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="users/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="users/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="users/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="users/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="users/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="users/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="users/assets/css/style.css">
    <link rel="stylesheet" href="users/assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="users/assets/css/demos/demo-4.css">
</head>

<body>
    <div class="page-wrapper">
        @include('users.include.header')

        <main class="main">
            
            @yield('content')
            
        </main><!-- End .main -->
        @include('users.include.footer')
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
    @include('users.include.mobile_menu')

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>
                    <div class="form-box p-5 pb-1">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Đăng nhập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Đăng ký</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Số điện thoại *</label>
                                            <input type="text" class="form-control p-2" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Mật khẩu *</label>
                                            <input type="password" class="form-control p-2" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group d-flex justify-content-between align-items-center">
                                            <a href="#" class="forgot-link">Bạn quên mật khẩu?</a>
                                        </div>
                                        <div class="form-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ĐĂNG NHẬP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="register-name">Họ tên *</label>
                                                <input type="text" class="form-control p-2" id="register-name" name="register-name" required>
                                            </div><!-- End .form-group -->
                                            <div class="form-group col-6">
                                                <label for="register-phone">Số điện thoại *</label>
                                                <input type="text" class="form-control p-2" id="register-phone" name="register-phone" required>
                                            </div><!-- End .form-group -->
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-4">
                                                <label for="register-address-province">Tỉnh/Thành phố *</label>
                                                <select class="form-control p-2" id="register-address-province" name="register-address-province" required>
                                                    <option value="hanoi">...</option>
                                                    <option value="hanoi">Hà Nội</option>
                                                    <option value="hochiminh">Hồ Chí Minh</option>
                                                    <option value="danang">Đà Nẵng</option>
                                                </select>
                                            </div><!-- End .form-group -->
                                            <div class="form-group col-4">
                                                <label for="register-address-district">Huyện/Quận *</label>
                                                <select class="form-control p-2" id="register-address-district" name="register-address-district" required>
                                                    <option value="hanoi">...</option>
                                                    <option value="caugiay">Cầu Giấy</option>
                                                    <option value="thanhxuan">Thanh Xuân</option>
                                                    <option value="dongda">Đống Đa</option>
                                                </select>
                                            </div><!-- End .form-group -->
                                            <div class="form-group col-4">
                                                <label for="register-address-commune">Xã/Phường *</label>
                                                <select class="form-control p-2" id="register-address-commune" name="register-address-commune" required>
                                                    <option value="hanoi">...</option>
                                                    <option value="phuong1">Phường 1</option>
                                                    <option value="phuong2">Phường 2</option>
                                                    <option value="phuong3">Phường 3</option>
                                                </select>
                                            </div><!-- End .form-group -->
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="register-address-house">Địa chỉ *</label>
                                                <input type="text" class="form-control p-2" id="register-address-house" name="register-address-house" placeholder="số nhà, tên đường" required>
                                            </div><!-- End .form-group -->
                                        </div>                                                                 
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="register-password">Mật khẩu *</label>
                                                <input type="password" class="form-control p-2" id="register-password" name="register-password" required>
                                            </div><!-- End .form-group -->
                                            <div class="form-group col-6">
                                                <label for="register-password">Nhập lại mật khẩu *</label>
                                                <input type="password" class="form-control p-2" id="register-password" name="register-password" required>
                                            </div><!-- End .form-group -->
                                        </div>
                                        <div class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->                                
                                        <div class="form-footer d-flex flex-column align-items-center p-4">
                                            <!-- Nút "SIGN UP" -->
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ĐĂNG KÝ</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="users/assets/js/jquery.min.js"></script>
    <script src="users/assets/js/bootstrap.bundle.min.js"></script>
    <script src="users/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="users/assets/js/jquery.waypoints.min.js"></script>
    <script src="users/assets/js/superfish.min.js"></script>
    <script src="users/assets/js/owl.carousel.min.js"></script>
    <script src="users/assets/js/bootstrap-input-spinner.js"></script>
    <script src="users/assets/js/jquery.plugin.min.js"></script>
    <script src="users/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="users/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="users/assets/js/main.js"></script>
    <script src="users/assets/js/demos/demo-4.js"></script>
</body>

</html>