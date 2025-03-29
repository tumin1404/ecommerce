@extends('users.layout')
@section('content')
@include('users.include.slide')
<div class="container new-arrivals">
    <div class="heading text-center">
        <h2 class="title mb-3">Sản phẩm hot</h2><!-- End .title -->
    </div><!-- End .heading -->

    <div class="page-content">
        <div class="container">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel" 
                data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": { "items": 2 },
                        "480": { "items": 2 },
                        "768": { "items": 3 },
                        "992": { "items": 4 },
                        "1200": { "items": 5 }
                    }
                }'>
    
                <!-- Product Item -->
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Headphones</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                        </h3>
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div><!-- End Product Item -->
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Headphones</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                        </h3>
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div><!-- End Product Item -->
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Headphones</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                        </h3>
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div><!-- End Product Item -->
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Headphones</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                        </h3>
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div><!-- End Product Item -->
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Headphones</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                        </h3>
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div><!-- End Product Item -->
    
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</div>

<div class="mb-3"></div><!-- End .mb-5 -->

<div class="container">
    <h2 class="title text-center mb-4">Danh mục phổ biến</h2><!-- End .title text-center -->
    
    <div class="cat-blocks-container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/1.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/2.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/3.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/4.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/5.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="users/assets/images/demos/demo-4/cats/6.png" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->
        </div><!-- End .row -->
    </div><!-- End .cat-blocks-container -->
</div><!-- End .container -->

<div class="mb-6"></div><!-- End .mb-6 -->

<div class="container for-you">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Gợi ý cho bạn</h2><!-- End .title -->
        </div><!-- End .heading-left -->

       <div class="heading-right">
            <a href="{{ route('products') }}" class="title-link">Xem thêm<i class="icon-long-arrow-right"></i></a>
       </div><!-- End .heading-right -->
    </div><!-- End .heading -->
    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel" 
    data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": false,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": { "items": 2 },
            "480": { "items": 2 },
            "768": { "items": 3 },
            "992": { "items": 4 },
            "1200": { "items": 5 }
        }
    }'>

        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
    </div><!-- End .owl-carousel -->
    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel" 
    data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": false,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": { "items": 2 },
            "480": { "items": 2 },
            "768": { "items": 3 },
            "992": { "items": 4 },
            "1200": { "items": 5 }
        }
    }'>

        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
    </div><!-- End .owl-carousel -->
    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel" 
    data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": false,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": { "items": 2 },
            "480": { "items": 2 },
            "768": { "items": 3 },
            "992": { "items": 4 },
            "1200": { "items": 5 }
        }
    }'>

        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
        <!-- Product Item -->
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="product.html">
                    <img src="users/assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                </a>
                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div>
                <div class="product-action">
                    <a href="#" class="btn-product btn-cart" title="Add to cart">
                        <span>add to cart</span>
                    </a>
                </div>
            </figure>
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">Headphones</a>
                </div>
                <h3 class="product-title">
                    <a href="product.html">Beats by Dr. Dre Wireless Headphones</a>
                </h3>
                <div class="product-price">
                    <span class="new-price">$279.99</span>
                    <span class="old-price">Was $349.99</span>
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #ff887f;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #6699cc;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #f3dbc1;">
                        <span class="sr-only">Color name</span>
                    </a>
                    <a href="#" style="background: #eaeaec;">
                        <span class="sr-only">Color name</span>
                    </a>
                </div>
            </div>
        </div><!-- End Product Item -->
    </div><!-- End .owl-carousel -->   
</div><!-- End .container -->
<!-- popup -->
    {{-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="users/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="users/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection