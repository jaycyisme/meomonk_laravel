@extends('petshop.fastkart.front-end.app')
@section('content')
<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index.php">
                <i class="iconly-Home icli"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Category</span>
            </a>
        </li>

        <li>
            <a href="search.php" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="wishlist.php" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="cart.php">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Cart</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>Cart</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-5 g-3">
            <div class="col-xxl-9">
                <div class="cart-table">
                    <div class="table-responsive-xl">
                        <table class="table">
                            <tbody>
                                @foreach ($cartItems as $values)
                                <tr class="product-box-contain">
                                    <td class="product-detail">
                                        <div class="product border-0">
                                            <a href="{{ route('productDetail', ['id' => $values['productId']]) }}" class="product-image">
                                                <img src="{{ asset('front-end/assets/images/product/') }}/{{ $values['image'] }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-detail">
                                                <ul>
                                                    <li class="name">
                                                        <a href="{{ route('productDetail', ['id' => $values['productId']]) }}" class="truncate">{{ $values['name'] }}>{{ $values['name'] }}</a>
                                                    </li>
                                                    {{-- Hiển thị thông tin thuộc tính của sản phẩm --}}
                                                    <li class="text-content">Attribute: {{ $values['attributeName'] }}</li>
                                                    <li>
                                                        <h5 class="text-content d-inline-block">Price :</h5>
                                                        <span>{{ $prices[$loop->index] }}</span>

                                                    </li>
                                                    <li class="quantity-price-box">
                                                        <div class="cart_qty">
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="{{ $values['quantity'] }}" readonly>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <h5>Total: {{ $values['quantity'] * $prices[$loop->index] }}</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <h4 class="table-title text-content">Price</h4>
                                        <h5>{{ $prices[$loop->index] }}</h5>
                                    </td>

                                    <td class="quantity">
                                        <h4 class="table-title text-content">Quantity</h4>
                                        <div class="quantity-price">
                                            <div class="cart_qty">
                                                <div class="input-group">
                                                    <input class="form-control input-number qty-input"
                                                        type="text" name="quantity" value="{{ $values['quantity'] }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="subtotal">
                                        <h4 class="table-title text-content">Total</h4>
                                        <h5>{{ $values['quantity'] * $prices[$loop->index]}}</h5>
                                    </td>

                                    <td class="save-remove">
                                        <h4 class="table-title text-content">Action</h4>
                                        <a class="remove close_button" href="{{ route('cart.remove', ['id' => $values['productId']]) }}">Remove</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3">
                <div class="summery-box p-sticky">
                    <div class="summery-header">
                        <h3>Cart Total</h3>
                    </div>

                    <div class="summery-contain">
                        <div class="coupon-cart">
                            <h6 class="text-content mb-2">Coupon Apply</h6>
                            <div class="mb-3 coupon-box input-group">
                                <form action="{{ route('cart.applyCoupon') }}" method="POST">
                                    @csrf
                                    <input type="text" name="coupon_code" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply" type="submit" style="padding: 10px; margin-top: 10px; border-radius:10px;">Apply</button>
                                </form>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <h4>Subtotal</h4>
                                <h4 class="price">${{ number_format($subTotals, 2) }}</h4>
                            </li>

                            <li>
                                <h4>Coupon Discount</h4>
                                <h4 class="price">(-) ${{ number_format($couponDiscount, 2) }}</h4>
                            </li>

                            {{-- <li class="align-items-start">
                                <h4>Shipping</h4>
                                <h4 class="price text-end">$6.90</h4>
                            </li> --}}
                        </ul>
                    </div>

                    <ul class="summery-total">
                        <li class="list-total border-top-0">
                            <h4>Total (USD)</h4>
                            <h4 class="price theme-color">${{ number_format($totalUSDs, 2) }}</h4>
                        </li>
                    </ul>

                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button onclick="location.href = '{{ route('loginCheckout') }}';"
                                    class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                            </li>

                            <li>
                                <button onclick="location.href = '{{ route('index') }}';"
                                    class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->
@endsection
