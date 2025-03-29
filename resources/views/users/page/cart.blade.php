@extends('users.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="users/assets/images/products/table/product-1.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Beige knitted elastic runner shoes</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$84.00</td>
                                <td class="quantity-col">
                                    <div class="cart-product-quantity">
                                        <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                    </div><!-- End .cart-product-quantity -->
                                </td>
                                <td class="total-col">$84.00</td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="users/assets/images/products/table/product-2.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Blue utility pinafore denim dress</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$76.00</td>
                                <td class="quantity-col">
                                    <div class="cart-product-quantity">
                                        <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                    </div><!-- End .cart-product-quantity -->                                 
                                </td>
                                <td class="total-col">$76.00</td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                        </tbody>
                    </table><!-- End .table table-wishlist -->

                    <div class="cart-bottom">
                        <div class="cart-discount">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" required placeholder="Mã giảm giá">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- End .input-group -->
                            </form>
                        </div><!-- End .cart-discount -->

                        <a href="#" class="btn btn-outline-dark-2"><span>Cập nhật giỏ hàng</span><i class="icon-refresh"></i></a>
                    </div><!-- End .cart-bottom -->
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-subtotal">
                                    <td>Tạm tính:</td>
                                    <td>$160.00</td>
                                </tr><!-- End .summary-subtotal -->
                                <tr class="summary-subtotal">
                                    <td>Giảm giá:</td>
                                    <td>$160.00</td>
                                </tr><!-- End .summary-subtotal -->
                                <tr class="summary-total">
                                    <td>Thành tiền:</td>
                                    <td>$160.00</td>
                                </tr><!-- End .summary-total -->
                            </tbody>
                        </table><!-- End .table table-summary -->

                        <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">TIẾN HÀNH ĐẶT HÀNG</a>
                    </div><!-- End .summary -->

                    <a href="{{ route('home') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>TIẾP TỤC MUA SẮM</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
@endsection