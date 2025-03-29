@extends('users.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="checkout">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="checkout-title">THÔNG TIN GIAO HÀNG</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Họ tên người nhận *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-sm-4">
                                    <label>Số điện thoại người nhận *</label>
                                    <input type="phone" class="form-control" required>
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <label>Email người nhận</label>
                                    <input type="email" class="form-control" required>
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Tỉnh/Thành phố *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Huyện/Quận *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Xã/Phường *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Địa chỉ *</label>
                                    <input type="text" class="form-control" required placeholder="Số nhà, tên đường">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Ghi chú</label>
                            <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                <label class="custom-control-label" for="checkout-create-acc">Tạo tài khoản?</label>
                            </div><!-- End .custom-checkbox -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-4">
                        <div class="summary bg-transparent">
                            <h3 class="summary-title">Đơn hàng của bạn</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="col-md-8">
                                            <span class="col-4 p-0 quantity">x3</span>
                                            <a class="col-8 p-0" href="#">Beige knitted elastic runner shoes</a></td>
                                        <td class="col-md-4">1.000.000 $</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-8">
                                            <span class="col-4 p-0 quantity">x3</span>
                                            <a class="col-8 p-0" href="#">Beige knitted elastic runner shoes</a></td>
                                        <td class="col-md-4">1.000.000 $</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-8">
                                            <span class="col-4 p-0 quantity">x3</span>
                                            <a class="col-8 p-0" href="#">Beige knitted elastic runner shoes</a></td>
                                        <td class="col-md-4">1.000.000 $</td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>Tổng tiền hàng:</td>
                                        <td>$160.00</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr>
                                        <td>Giảm giá:</td>
                                        <td>$160.00</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Tổng thanh toán:</td>
                                        <td>$160.00</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                ĐẶT HÀNG
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->
@endsection