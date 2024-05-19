@extends('petshop.fastkart.front-end.app')
@section('content')
    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="{{ route('index') }}">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="{{ route('shopCategory') }}">
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
                <a href="{{ route('wishlist.index') }}" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="{{ route('cart.index') }}">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->
    <!-- Home Section Start -->
    <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-8 ratio_65">
                    <div class="home-contain h-100">
                        <div class="h-100">
                            <img src="{{ asset('front-end/assets/images/Banner/1ST/1ST.png') }}" class="bg-img blur-up lazyload" alt="" />
                        </div>
                        <div class="home-detail p-center-left w-75">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase">
                                    Stay home & delivered your
                                    <span class="daily">Daily Needs</span>
                                </h1>
                                <p class="w-75 d-none d-sm-block">
                                    Vegetables contain many vitamins and minerals that are good
                                    for your health.
                                </p>
                                <button onclick="location.href = 'shop-left-sidebar.php';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">
                                    Shop Now <i class="fa-solid fa-right-long icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 ratio_65">
                    <div class="row g-4">
                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="{{ asset('front-end/assets/images/Banner/2ND/1.png') }}" class="bg-img blur-up lazyload"
                                    alt="" />
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h2 class="mt-0 text-danger">
                                            45% <span class="discount text-title">OFF</span>
                                        </h2>
                                        <h3 class="theme-color">Nut Collection</h3>
                                        <p class="w-75">We deliver organic vegetables & fruits</p>
                                        <a href="shop-left-sidebar.php" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="{{ asset('front-end/assets/images/Banner/2ND/2.png') }}" class="bg-img blur-up lazyload"
                                    alt="" />
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h3 class="mt-0 theme-color fw-bold">Healthy Food</h3>
                                        <h4 class="text-danger">Organic Market</h4>
                                        <p class="organic">
                                            Start your daily shopping with some Organic food
                                        </p>
                                        <a href="shop-left-sidebar.php" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section ratio_60 wow fadeInUp">
        <div class="container-fluid-lg">
            <div class="banner-slider">
                <div>
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('front-end/assets/images/Banner/3RD/1.png') }}" class="bg-img blur-up lazyload" alt="" />
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">5% OFF</h6>
                                <h5>Hot Deals on New Items</h5>
                                <h6 class="text-content">Daily Essentials Eggs & Dairy</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('front-end/assets/images/Banner/3RD/2.png') }}" class="bg-img blur-up lazyload" alt="" />
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">5% OFF</h6>
                                <h5>Buy More & Save More</h5>
                                <h6 class="text-content">Fresh Vegetables</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('front-end/assets/images/Banner/3RD/3.png') }}" class="bg-img blur-up lazyload" alt="" />
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">5% OFF</h6>
                                <h5>Organic Meat Prepared</h5>
                                <h6 class="text-content">Delivered to Your Home</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('front-end/assets/images/Banner/3RD/1.png') }}" class="bg-img blur-up lazyload" alt="" />
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">5% OFF</h6>
                                <h5>Buy More & Save More</h5>
                                <h6 class="text-content">Nuts & Snacks</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        <div class="category-menu">
                            <h3>Category</h3>
                            <ul>
                                @foreach ($categories as $category)
                                <li>
                                    <div class="category-list">
                                        <img src="{{ asset('front-end/assets/images/category/' . $category->icon_url) }}"
                                            class="blur-up lazyload" alt="{{ $category->name }}" />
                                        <h5>
                                            <a href="{{ route('listProductCategory', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                            {{-- <a href="{{ URL::to('/product-category/'.$category->id) }}">{{ $category->name }}</a> --}}
                                        </h5>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                            <ul class="value-list">
                                <li>
                                    <div class="category-list">
                                        <h5 class="ms-0 text-title">
                                            <a href="shop-left-sidebar.php">Value of the Day</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <h5 class="ms-0 text-title">
                                            <a href="shop-left-sidebar.php">Top 50 Offers</a>
                                        </h5>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="category-list">
                                        <h5 class="ms-0 text-title">
                                            <a href="shop-left-sidebar.php">New Arrivals</a>
                                        </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="ratio_156 section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="{{asset('front-end')}}/assets/images/vegetable/banner/8.jpg" class="bg-img blur-up lazyload"
                                    alt="" />
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h6 class="text-yellow home-banner">Seafood</h6>
                                        <h3 class="text-uppercase fw-normal">
                                            <span class="theme-color fw-bold">Freshes</span>
                                            Products
                                        </h3>
                                        <h3 class="fw-light">every hour</h3>
                                        <button onclick="location.href = 'shop-left-sidebar.php';"
                                            class="btn btn-animation btn-md mend-auto">
                                            Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ratio_medium section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="{{asset('front-end')}}/assets/images/vegetable/banner/11.jpg" class="img-fluid blur-up lazyload"
                                    alt="" />
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h4 class="text-yellow text-exo home-banner">Organic</h4>
                                        <h2 class="text-uppercase fw-normal mb-0 text-russo theme-color">
                                            fresh
                                        </h2>
                                        <h2 class="text-uppercase fw-normal text-title">
                                            Vegetables
                                        </h2>
                                        <p class="mb-3">Super Offer to 50% Off</p>
                                        <button onclick="location.href = 'shop-left-sidebar.php';"
                                            class="btn btn-animation btn-md mend-auto">
                                            Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>New Product</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    @foreach ($products->slice(3, 4) as $product)
                                    <li>
                                        <div class="offer-product">
                                            <a href="{{ route('productDetail', ['id' => $product->id]) }}" class="offer-image">
                                                <img src="{{ asset('front-end/assets/images/product/' . $product->image) }}"
                                                    class="blur-up lazyload" alt="" />
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="{{ route('productDetail', ['id' => $product->id]) }}" class="text-title">
                                                        <h6 class="name">{{ $product->name }}</h6>
                                                    </a>
                                                    <span>1KG</span>
                                                    <h6 class="price theme-color">$ {{ $product->price }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Customer Comment</h3>

                                <div class="review-box">
                                    <div class="review-contain">
                                        <h5 class="w-75">
                                            We Care About Our Customer Experience
                                        </h5>
                                        <p>
                                            In publishing and graphic design, Lorem ipsum is a
                                            placeholder text commonly used to demonstrate the visual
                                            form of a document or a typeface without relying on
                                            meaningful content.
                                        </p>
                                    </div>

                                    <div class="review-profile">
                                        <div class="review-image">
                                            <img src="{{asset('front-end')}}/assets/images/vegetable/review/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="" />
                                        </div>
                                        <div class="review-detail">
                                            <h5>Tina Mcdonnale</h5>
                                            <h6>Sale Manager</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-8">
                    <div class="title title-flex">
                        <div>
                            <h2>Top Save Today</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                                    </use>
                                </svg>
                            </span>
                            <p>
                                Don't miss this opportunity at a special discount just for
                                this week.
                            </p>
                        </div>
                        <div class="timing-box">
                            <div class="timing">
                                <i data-feather="clock"></i>
                                <h6 class="name">Expires in :</h6>
                                <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div class="days">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="hours">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="minutes">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="seconds">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-b-space">
                        <div class="product-border border-row overflow-hidden">
                            <div class="product-box-slider no-arrow">
                                @foreach ($products as $product)
                                <div class="product-box">
                                    <div class="product-image">
                                        <a href="{{ route('productDetail', ['id' => $product->id]) }}">
                                            <img src="{{ asset('front-end/assets/images/product/' . $product->image) }}" class="img-fluid blur-up lazyload" alt="{{ $product->name }}" />
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.php">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <form action="{{ route('wishlist.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <button type="submit" class="notifi-wishlist" title="Add to Wishlist" style="border: none;
                                                    background: none;
                                                    /* width: 17px; */
                                                    height: auto;
                                                    color: #4a5568;">
                                                        <i data-feather="heart" style="border: none;"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="{{ route('productDetail', ['id' => $product->id]) }}">
                                            <h6 class="name">{{ $product->name }}</h6>
                                        </a>
                                        <h5 class="sold text-content" style="text-align:center;">
                                            <span class="theme-color price">${{ $product->price }}</span>
                                        </h5>
                                        <div class="product-rating mt-sm-2 mt-1" style="display: flex; justify-content: center;">
                                            <ul class="rating">
                                                <li><i data-feather="star" class="fill"></i></li>
                                                <li><i data-feather="star" class="fill"></i></li>
                                                <li><i data-feather="star" class="fill"></i></li>
                                                <li><i data-feather="star" class="fill"></i></li>
                                                <li><i data-feather="star"></i></li>
                                            </ul>
                                            <h6 class="theme-color">In Stock</h6>
                                        </div>
                                        <div class="add-to-cart-box">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <button type="submit" class="btn btn-add-cart addcart-button">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Browse by Brand</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <div class="category-slider-2 product-wrapper no-arrow">
                        @foreach ($brands as $brand)
                        <div>
                            <a href="{{ route('listProductBrand', ['id' => $brand->id]) }}" class="category-box category-dark">
                                <div>
                                    <img src="{{ asset('front-end/assets/images/brand/' . $brand->image) }}"
                                        class=" lazyload" alt="" style="filter: none"/>
                                    <h5>{{ $brand->name }}</h5>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="{{asset('front-end')}}/assets/images/vegetable/banner/9.jpg" class="bg-img blur-up lazyload"
                                        alt="" />
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal theme-color mb-2">
                                                Testy Mushrooms
                                            </h4>
                                            <button onclick="location.href = 'shop-left-sidebar.php';"
                                                class="btn btn-animation btn-sm mend-auto">
                                                Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="{{asset('front-end')}}/assets/images/vegetable/banner/10.jpg" class="bg-img blur-up lazyload"
                                        alt="" />
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal theme-color mb-2">
                                                Fresh MEAT
                                            </h4>
                                            <button onclick="location.href = 'shop-left-sidebar.php';"
                                                class="btn btn-animation btn-sm mend-auto">
                                                Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <h2>Services Box</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="product-border overflow-hidden wow fadeInUp">
                        <div class="product-box-slider no-arrow">
                            @foreach ($service_products as $service_product)
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="{{ route('productDetail', ['id' => $service_product->id]) }}">
                                                    <img src="{{ asset('front-end/assets/images/product/' . $service_product->image) }}"
                                                        class="img-fluid blur-up lazyload" alt="" />
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.php">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <form action="{{ route('wishlist.add') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $service_product->id }}">
                                                            <button type="submit" class="notifi-wishlist" title="Add to Wishlist" style="border: none;
                                                            background: none;
                                                            /* width: 17px; */
                                                            height: auto;
                                                            color: #4a5568;">
                                                                <i data-feather="heart" style="border: none;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="{{ route('productDetail', ['id' => $service_product->id]) }}">
                                                    <h6 class="name h-100" style="text-align: center;">{{ $service_product->name }}                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content" style="text-align: center;">
                                                    <span class="theme-color price">{{ $service_product->price }}</span>
                                                    {{-- <del>28.56</del> --}}
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1" style="display: flex; justify-content:center;">
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

                                                    <h6 class="theme-color">In Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button" onclick="location.href = '{{ route('contact-us') }}';">
                                                        Book
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0" />
                                                            <button type="button" class="qty-right-plus"
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
                            @endforeach
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain">
                            <img src="{{asset('front-end')}}/assets/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload"
                                alt="" />
                            <div class="banner-details p-center p-4 text-white text-center">
                                <div>
                                    <h3 class="lh-base fw-bold offer-text">
                                        Get $3 Cashback! Min Order of $30
                                    </h3>
                                    <h6 class="coupon-code">Use Code : MEOMONK</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-xxl-8 col-xl-12 col-md-7">
                                <div class="banner-contain hover-effect">
                                    <img src="{{asset('front-end')}}/assets/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload"
                                        alt="" />
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h2 class="text-kaushan fw-normal theme-color">
                                                Get Ready To
                                            </h2>
                                            <h3 class="mt-2 mb-3">TAKE ON THE DAY!</h3>
                                            <p class="text-content banner-text">
                                                In publishing and graphic design, Lorem ipsum is a
                                                placeholder text commonly used to demonstrate.
                                            </p>
                                            <button onclick="location.href = 'shop-left-sidebar.php';"
                                                class="btn btn-animation btn-sm mend-auto">
                                                Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-12 col-md-5">
                                <a href="shop-left-sidebar.php" class="banner-contain hover-effect h-100">
                                    <img src="{{asset('front-end')}}/assets/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload"
                                        alt="" />
                                    <div class="banner-details p-center-left p-4 h-100">
                                        <div>
                                            <h2 class="text-kaushan fw-normal text-danger">
                                                20% Off
                                            </h2>
                                            <h3 class="mt-2 mb-2 theme-color">SUMMRY</h3>
                                            <h3 class="fw-normal product-name text-title">
                                                Product
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <div>
                            <h2>Our best Seller</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                                    </use>
                                </svg>
                            </span>
                            <p>A virtual assistant collects the products from your list</p>
                        </div>
                    </div>

                    <div class="best-selling-slider product-wrapper wow fadeInUp">
                        <div>
                            <ul class="product-list">
                                @foreach ($food_products as $food_product)
                                <li>
                                    <div class="offer-product">
                                        <a href="{{ route('productDetail', ['id' => $food_product->id]) }}" class="offer-image">
                                            <img src="{{ asset('front-end/assets/images/product/' . $food_product->image) }}"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="{{ route('productDetail', ['id' => $food_product->id]) }}" class="text-title">
                                                    <h6 class="name">{{ $food_product->name }}</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ {{ $food_product->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                @foreach ($toy_products as $toy_product)
                                <li>
                                    <div class="offer-product">
                                        <a href="{{ route('productDetail', ['id' => $toy_product->id]) }}" class="offer-image">
                                            <img src="{{ asset('front-end/assets/images/product/' . $toy_product->image) }}"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="{{ route('productDetail', ['id' => $product->id]) }}" class="text-title">
                                                    <h6 class="name">{{ $toy_product->name }}</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ {{ $toy_product->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                @foreach ($pharmacy_products as $pharmacy_product)
                                <li>
                                    <div class="offer-product">
                                        <a href="{{ route('productDetail', ['id' => $pharmacy_product->id]) }}" class="offer-image">
                                            <img src="{{ asset('front-end/assets/images/product/' . $pharmacy_product->image) }}"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="{{ route('productDetail', ['id' => $pharmacy_product->id]) }}" class="text-title">
                                                    <h6 class="name">
                                                        {{ $pharmacy_product->name }}
                                                    </h6>
                                                </a>
                                                <span>1 L</span>
                                                <h6 class="price theme-color">$ {{ $pharmacy_product->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain hover-effect">
                            <img src="{{asset('front-end')}}/assets/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload"
                                alt="" />
                            <div class="banner-details p-center banner-b-space w-100 text-center">
                                <div>
                                    <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                                    <h2 class="banner-title">VEGETABLE</h2>
                                    <h5 class="lh-sm mx-auto mt-1 text-content">
                                        Save up to 5% OFF
                                    </h5>
                                    <button onclick="location.href = 'shop-left-sidebar.php';"
                                        class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">
                                        Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title section-t-space">
                        <h2>Featured Blog</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="slider-3-blog ratio_65 no-arrow product-wrapper">
                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.php" class="blog-image">
                                        <img src="{{asset('front-end')}}/assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
                                            alt="" />
                                    </a>
                                </div>

                                <a href="blog-detail.php" class="blog-detail">
                                    <h6>20 March, 2022</h6>
                                    <h5>Fresh Vegetable Online</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.php" class="blog-image">
                                        <img src="{{asset('front-end')}}/assets/images/vegetable/blog/2.jpg" class="bg-img blur-up lazyload"
                                            alt="" />
                                    </a>
                                </div>

                                <a href="blog-detail.php" class="blog-detail">
                                    <h6>10 April, 2022</h6>
                                    <h5>Fresh Combo Fruit</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.php" class="blog-image">
                                        <img src="{{asset('front-end')}}/assets/images/vegetable/blog/3.jpg" class="bg-img blur-up lazyload"
                                            alt="" />
                                    </a>
                                </div>

                                <a href="blog-detail.php" class="blog-detail">
                                    <h6>10 April, 2022</h6>
                                    <h5>Nuts to Eat for Better Health</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.php" class="blog-image">
                                        <img src="{{asset('front-end')}}/assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
                                            alt="" />
                                    </a>
                                </div>

                                <a href="blog-detail.php" class="blog-detail">
                                    <h6>20 March, 2022</h6>
                                    <h5>Fresh Vegetable Online</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get...</h2>
                                    <h5>$20 discount for your first order</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Your Email" />
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->
@endsection
