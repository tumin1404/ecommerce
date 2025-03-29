<style>
.header-top a {
    color: white; /* Đảm bảo chữ màu trắng */
    text-decoration: none; /* Mặc định không gạch chân */
}
.header-top a:hover {
  color: white !important; /* Đảm bảo vẫn trắng khi hover */
  text-decoration: underline; /* Thêm gạch chân khi hover */
}
</style>
<header class="header">
    <div class="header-top" style="background-color: #33b3ff;">
        <div class="container">
            <div class="header-left">
                <ul class="top-menu">
                    <li>
                        <ul>
                            <li><a href="tel:+84901234567"><i class="fa-solid fa-phone" style="margin-right: 5px"></i> Gọi: 0901 234 567</a></li>
                            <li><a href="https://www.google.com/maps?q=10.7769,106.7009" target="_blank">
                                <i class="fa-solid fa-map-location-dot" style="margin-right: 5px"></i>123 Đường ABC, Quận 1, TP.HCM
                              </a></li>
                            <li><a href="mailto:contact@example.com"><i class="fa-solid fa-envelope" style="margin-right: 5px"></i> Email: contact@example.com</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <ul>
                            <li><a href="https://facebook.com/example" target="_blank"><i class="fa-brands fa-square-facebook" style="margin-right: 5px"></i>Facebook</a></li>
                            <li><a href="https://tiktok.com/example" target="_blank"><i class="fa-brands fa-tiktok" style="margin-right: 5px"></i>Tiktok</a></li>
                            <li><a href="https://shopee.com/example" target="_blank"><i class="fa-solid fa-bag-shopping" style="margin-right: 5px"></i>Shopee</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ route('home') }}" class="logo">
                    <img src="users/assets/images/logo.png" alt="Molla Logo" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="{{ route('home') }}">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" class="sf-with-ul">SẢN PHẨM</a>
                            <ul>
                                <li><a href="{{ route('productdetail') }}">Chi tiết sản phẩm</a></li>
                                <li><a href="{{ route('newdetail') }}">Chi tiết bài viết</a></li>
                                <li>
                                    <a href="#">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Single Post</a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{ route('news') }}">TIN TỨC</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">LIÊN HỆ</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">GIỚI THIỆU</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="users/assets/images/products/cart/product-1.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="users/assets/images/products/cart/product-2.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="{{ route('cart') }}" class="btn btn-primary">View Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
                <div class="header-user" style="font-size: 32px;padding: 0 20px;">
                    <a href="#signin-modal" class="icon text-dark" data-toggle="modal" style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">
                        <i class="icon-user"></i>
                        {{-- <span style="font-size: 15px">TÊN KHÁCH HÀNG</span> --}}
                    </a>
                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->