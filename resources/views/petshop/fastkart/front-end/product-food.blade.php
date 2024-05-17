@extends('petshop.fastkart.front-end.app')
@section('content')

{{-- @foreach ($products as $product) --}}
<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>{{ $product->name }}</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<!-- Product Left Sidebar Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInUp">
                        <div class="product-left-box">

                            <div class="row g-sm-4 g-2">
                                <div class="col-12">
                                    <div class="product-main no-arrow">
                                        <div>
                                            <div class="slider-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->image) }}" id="img-1"
                                                    data-zoom-image="{{ asset('front-end/assets/images/product/' . $product->image) }}" class="
                                                    img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail1) }}"
                                                    data-zoom-image="{{ asset('front-end/assets/images/product/' . $product->thumbnail1) }}" class="
                                                    img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail2) }}"
                                                    data-zoom-image="{{ asset('front-end/assets/images/product/' . $product->thumbnail2) }}" class="
                                                    img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail3) }}"
                                                    data-zoom-image="{{ asset('front-end/assets/images/product/' . $product->thumbnail3) }}" class="
                                                    img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail4) }}"
                                                    data-zoom-image="{{ asset('front-end/assets/images/product/' . $product->thumbnail4) }}" class="
                                                    img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="left-slider-image left-slider no-arrow slick-top">
                                        <div>
                                            <div class="sidebar-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->image) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail1) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail2) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail3) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->thumbnail4) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInUp">
                        <div class="right-box-contain">

                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="attribute" id="selectedAttributeValue" value="">

                            <div class="product-count">
                                <ul>
                                    <li class="">
                                        <i data-feather="zap"></i>
                                        <h6 class="lang">38 Customers Ordered</h6>
                                    </li>
                                    <li class="">
                                        <i data-feather="eye"></i>
                                        <h6 class="lang">15 Active View in this item</h6>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="name">{{ $product->name }}</h2>




                            <div class="price-rating">
                                <h3 class="theme-color price">${{ $product->price }}
                                    {{-- <del class="text-content">$58.46</del>  --}}
                                    <span
                                        class="offer theme-color">(8% off)</span></h3>
                                <div class="product-rating custom-rate">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="review">23 Customer Review</span>
                                </div>
                            </div>

                            <div class="product-contain">
                                <p>{{ $product->description }}
                                </p>
                            </div>

                            <div class="product-package">
                                <div class="product-title">

                                    <h4>weight</h4>
                                </div>
                                <select class="form-select" id="selectedAttribute" name="attribute">
                                    @foreach ($productAttribute as $value)
                                        <option value="{{ $value->attribute->id}}">{{ $value->attribute->value}}</option>
                                        @endforeach
                                </select>
                            </div>



                            <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1"
                                data-hours="1" data-minutes="2" data-seconds="3">
                                <div class="product-title">
                                    <h4>Hurry up! Sales Ends In</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="days d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Days</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="hours d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Hours</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="minutes d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Min</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="seconds d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Sec</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>



                            <div class="note-box product-package">
                                <div class="cart_qty qty-box product-qty">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray"
                                            data-type="minus" data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="1">
                                        <button type="button" class="qty-right-plus bg-gray"
                                            data-type="plus" data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-md bg-dark cart-button text-white w-100 add-to-cart" name="art-to-cart">Add To Cart</button>
                            </div>

                            <div class="buy-box">
                                <a href="wishlist.php">
                                    <i data-feather="heart"></i>
                                    <span>Add To Wishlist</span>
                                </a>

                                <a href="compare.php">
                                    <i data-feather="shuffle"></i>
                                    <span>Add To Compare</span>
                                </a>
                            </div>

                            <div class="pickup-box">
                                <div class="product-title">
                                    <h4>Store Information</h4>
                                </div>

                                <div class="pickup-detail">
                                    <h4 class="text-content">{{ $product->description }}.</h4>
                                </div>

                                <div class="product-info">
                                    <ul class="product-info-list product-info-list-2">
                                        <li>Type : <a href="javascript:void(0)">{{ $product->category->name }}</a></li>
                                        <li>MFG : <a href="javascript:void(0)">{{ $product->created_at }}</a></li>
                                        <li>Stock : <a href="javascript:void(0)">{{ $product->productStatus->name }}</a></li>
                                        <li>Tags : <a href="javascript:void(0)">{{ $product->brand->name }}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="payment-option">
                                <div class="product-title">
                                    <h4>Guaranteed Safe Checkout</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                <div class="right-sidebar-box">
                    <div class="vendor-box">
                        <div class="vendor-contain">
                            <div class="vendor-image">
                                <img src="{{asset('front-end')}}/assets/images/product/vendor.png" class="blur-up lazyload" alt="">
                            </div>

                            <div class="vendor-name">
                                <h5 class="fw-500">Noodles Co.</h5>

                                <div class="product-rating mt-1">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>(36 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <p class="vendor-detail">Noodles & Company is an American fast-casual
                            restaurant that offers international and American noodle dishes and pasta.</p>

                        <div class="vendor-list">
                            <ul>
                                <li>
                                    <div class="address-contact">
                                        <i data-feather="map-pin"></i>
                                        <h5>Address: <span class="text-content">1288 Franklin Avenue</span></h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="address-contact">
                                        <i data-feather="headphones"></i>
                                        <h5>Contact Seller: <span class="text-content">(+1)-123-456-789</span></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-25">
                        <div class="hot-line-number">
                            <h5>Hotline Order:</h5>
                            <h6>Mon - Fri: 07:00 am - 08:30PM</h6>
                            <h3>(+1) 123 456 789</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Left Sidebar End -->


<!-- Related Product Section Start -->
<section class="related-product-2">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="related-product">
                    <div class="product-title-2">
                        <h4>Frequently bought together</h4>
                    </div>

                    <div class="related-box">
                        <div class="related-image">
                            <ul>
                                <li>
                                    <div class="product-box product-box-bg wow fadeInUp">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.php">
                                                <img src="{{asset('front-end')}}/assets/images/cake/product/1.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.php">
                                                <h6 class="name">
                                                    Muffets & Tuffets Whole Wheat Bread 400 g
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="product-box product-box-bg wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.php">
                                                <img src="{{asset('front-end')}}/assets/images/cake/product/2.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.php">
                                                <h6 class="name">
                                                    Fresh Bread and Pastry Flour 200 g
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="product-box product-box-bg wow fadeInUp">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.php">
                                                <img src="{{asset('front-end')}}/assets/images/cake/product/3.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.php">
                                                <h6 class="name">Peanut Butter Bite Premium Butter Cookies 600 g
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bundle-list">
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="checkbox_animated" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            <span class="color color-1"> Cupe-Cake 500 g
                                                <span>$12</span></span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check">
                                        <input class="checkbox_animated" type="checkbox" value="" id="check2">
                                        <label class="form-check-label" for="check2">
                                            <span class="color color-1"> Fresh Bread
                                                <span>$15</span></span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check">
                                        <input class="checkbox_animated" type="checkbox" value="" id="check3">
                                        <label class="form-check-label" for="check3">
                                            <span class="color color-1"> Black Forest
                                                <span>$12</span></span>
                                        </label>
                                    </div>
                                </li>

                                <li class="content">
                                    <h5>Product Selected for</h5>
                                    <h4 class="theme-color">$210.69 <del class="text-content">212.36</del></h4>
                                    <button class="btn text-white theme-bg-color btn-md mt-sm-4 mt-3 fw-bold"><i
                                            class="fa-solid fa-cart-shopping me-2"></i> Add All To Cart</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Section End -->

<!-- Nav Tab Section Start -->
<section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="product-section-box m-0">
                    <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab">Description</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                type="button" role="tab">Additional
                                info</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care"
                                type="button" role="tab">Care
                                Instructions</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button" role="tab">Review</button>
                        </li>
                    </ul>

                    <div class="tab-content custom-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="product-description">
                                <div class="nav-desh">
                                    <p>{{ $product->description }}.</p>
                                </div>

                                <div class="banner-contain nav-desh">
                                    <img src="{{asset('front-end')}}/assets/images/vegetable/banner/14.jpg"
                                        class="bg-img blur-up lazyload" alt="">
                                    <div class="banner-details p-center banner-b-space w-100 text-center">
                                        <div>
                                            <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                                            <h2>VEGETABLE</h2>
                                            <p class="mx-auto mt-1">Save up to 5% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table info-table">
                                    <tbody>
                                        <tr>
                                            <td>Specialty</td>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ingredient Type</td>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Brand</td>
                                            <td>{{ $product->brand->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Form</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Manufacturer</td>
                                            <td>{{ $product->supplier->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sell Time</td>
                                            <td>{{ $product->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Net Quantity</td>
                                            <td>{{ $product->productStatus->name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="care" role="tabpanel">
                            <div class="information-box">
                                <ul>
                                    <li>Store cream cakes in a refrigerator. Fondant cakes should be
                                        stored in an air conditioned environment.</li>

                                    <li>Slice and serve the cake at room temperature and make sure
                                        it is not exposed to heat.</li>

                                    <li>Use a serrated knife to cut a fondant cake.</li>

                                    <li>Sculptural elements and figurines may contain wire supports
                                        or toothpicks or wooden skewers for support.</li>

                                    <li>Please check the placement of these items before serving to
                                        small children.</li>

                                    <li>The cake should be consumed within 24 hours.</li>

                                    <li>Enjoy your cake!</li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="review" role="tabpanel">
                            <div class="review-box">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="product-rating-box">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="product-main-rating">
                                                        <h2>3.40
                                                            <i data-feather="star"></i>
                                                        </h2>

                                                        <h5>5 Overall Rating</h5>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <ul class="product-rating-list">
                                                        <li>
                                                            <div class="rating-product">
                                                                <h5>5<i data-feather="star"></i></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 40%;">
                                                                    </div>
                                                                </div>
                                                                <h5 class="total">2</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="rating-product">
                                                                <h5>4<i data-feather="star"></i></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 20%;">
                                                                    </div>
                                                                </div>
                                                                <h5 class="total">1</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="rating-product">
                                                                <h5>3<i data-feather="star"></i></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 0%;">
                                                                    </div>
                                                                </div>
                                                                <h5 class="total">0</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="rating-product">
                                                                <h5>2<i data-feather="star"></i></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 20%;">
                                                                    </div>
                                                                </div>
                                                                <h5 class="total">1</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="rating-product">
                                                                <h5>1<i data-feather="star"></i></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 20%;">
                                                                    </div>
                                                                </div>
                                                                <h5 class="total">1</h5>
                                                            </div>
                                                        </li>

                                                    </ul>

                                                    <div class="review-title-2">
                                                        <h4 class="fw-bold">Review this product</h4>
                                                        <p>Let other customers know what you think</p>
                                                        <button class="btn" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#writereview">Write a
                                                            review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-7">
                                        <div class="review-people">
                                            <ul class="review-list">
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <img alt="user" class="img-fluid "
                                                                    src="{{asset('front-end')}}/assets/images/review/1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name"><a href="javascript:void(0)"
                                                                    class="name">Jack Doe</a>
                                                                <div class="date-time">
                                                                    <h6 class="text-content"> 29 Sep 2023
                                                                        06:40:PM
                                                                    </h6>
                                                                    <div class="product-rating">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reply">
                                                                <p>Avoid this product. The quality is
                                                                    terrible, and
                                                                    it started falling apart almost
                                                                    immediately. I
                                                                    wish I had read more reviews before
                                                                    buying.
                                                                    Lesson learned.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <img alt="user" class="img-fluid "
                                                                    src="{{asset('front-end')}}/assets/images/review/2.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name"><a href="javascript:void(0)"
                                                                    class="name">Jessica
                                                                    Miller</a>
                                                                <div class="date-time">
                                                                    <h6 class="text-content"> 29 Sep 2023
                                                                        06:34:PM
                                                                    </h6>
                                                                    <div class="product-rating">
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                        class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                        class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                        class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                        class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reply">
                                                                <p>Honestly, I regret buying this item. The
                                                                    quality
                                                                    is subpar, and it feels like a waste of
                                                                    money. I
                                                                    wouldn't recommend it to anyone.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <img alt="user" class="img-fluid "
                                                                    src="{{asset('front-end')}}/assets/images/review/3.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name"><a href="javascript:void(0)"
                                                                    class="name">Rome Doe</a>
                                                                <div class="date-time">
                                                                    <h6 class="text-content"> 29 Sep 2023
                                                                        06:18:PM
                                                                    </h6>
                                                                    <div class="product-rating">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reply">
                                                                <p>I am extremely satisfied with this
                                                                    purchase. The
                                                                    item arrived promptly, and the quality
                                                                    is
                                                                    exceptional. It's evident that the
                                                                    makers paid
                                                                    attention to detail. Overall, a
                                                                    fantastic buy!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <img alt="user" class="img-fluid "
                                                                    src="{{asset('front-end')}}/assets/images/review/4.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name"><a href="javascript:void(0)"
                                                                    class="name">Sarah
                                                                    Davis</a>
                                                                <div class="date-time">
                                                                    <h6 class="text-content"> 29 Sep 2023
                                                                        05:58:PM
                                                                    </h6>
                                                                    <div class="product-rating">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reply">
                                                                <p>I am genuinely delighted with this item.
                                                                    It's a
                                                                    total winner! The quality is superb, and
                                                                    it has
                                                                    added so much convenience to my daily
                                                                    routine.
                                                                    Highly satisfied customer!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <img alt="user" class="img-fluid "
                                                                    src="{{asset('front-end')}}/assets/images/review/5.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name"><a href="javascript:void(0)"
                                                                    class="name">John Doe</a>
                                                                <div class="date-time">
                                                                    <h6 class="text-content"> 29 Sep 2023
                                                                        05:22:PM
                                                                    </h6>
                                                                    <div class="product-rating">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"
                                                                                    class="fill"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reply">
                                                                <p>Very impressed with this purchase. The
                                                                    item is of
                                                                    excellent quality, and it has exceeded
                                                                    my
                                                                    expectations.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nav Tab Section End -->

{{-- @endforeach --}}
<!-- Related Product Section Start -->
<section class="product-list-section section-b-space">
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Related Products</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                </svg>
            </span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-6_1 product-wrapper">
                    <div>
                        <div class="product-box-3 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-2.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/11.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Cake</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Chocolate Chip Cookies 250 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <span>(5.0)</span>
                                    </div>
                                    <h6 class="unit">500 G</h6>
                                    <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.57</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.05s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/2.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(4.0)</span>
                                    </div>
                                    <h6 class="unit">250 ml</h6>
                                    <h5 class="price"><span class="theme-color">$08.02</span> <del>$15.15</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/3.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(2.4)</span>
                                    </div>
                                    <h6 class="unit">350 G</h6>
                                    <h5 class="price"><span class="theme-color">$04.33</span> <del>$10.36</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.15s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/4.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Snacks</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <span>(5.0)</span>
                                    </div>
                                    <h6 class="unit">570 G</h6>
                                    <h5 class="price"><span class="theme-color">$12.52</span> <del>$13.62</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/5.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Snacks</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(3.8)</span>
                                    </div>
                                    <h6 class="unit">100 G</h6>
                                    <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.36</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.25s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/6.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(4.0)</span>
                                    </div>

                                    <h6 class="unit">550 G</h6>

                                    <h5 class="price"><span class="theme-color">$14.25</span> <del>$16.57</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.php">
                                        <img src="{{asset('front-end')}}/assets/images/cake/product/7.png" class="img-fluid" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.php">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.php" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left-thumbnail.php">
                                        <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(3.8)</span>
                                    </div>

                                    <h6 class="unit">1 Kg</h6>

                                    <h5 class="price"><span class="theme-color">$12.68</span> <del>$14.69</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button">Add
                                            <span class="add-icon bg-light-gray">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Section End -->
@endsection
