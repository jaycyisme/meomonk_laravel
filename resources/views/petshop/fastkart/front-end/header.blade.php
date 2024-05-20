    <!-- Header Start -->
    <header class="pb-md-4 pb-0">
        <div class="header-top">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 d-xxl-block d-none">
                        <div class="top-left-header">
                            <i class="iconly-Location icli text-white"></i>
                            <span class="text-white">EAST ASISA UNIVERSITY OF TECHNOLOGY, EAUT, VN</span>
                        </div>
                    </div>

                    <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                        <div class="header-offer">
                            <div class="notification-slider">
                                <div>
                                    <div class="timer-notification">
                                        <h6><strong class="me-1">Welcome to Meomonk!</strong>Wrap new offers/gift
                                            every single day on Weekends.

                                        </h6>
                                    </div>
                                </div>

                                <div>
                                    <div class="timer-notification">
                                        <h6>Something you love is now on sale!
                                            <a href="shop-left-sidebar.php" class="text-white">Buy Now
                                                !</a>
                                                <strong class="ms-1">New Coupon Code: meomonk
                                                </strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <ul class="about-list right-nav-about">
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown">
                                        <img src="{{ asset('front-end/assets/images/country/united-states.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <span>English</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="english">
                                                <img src="{{ asset('front-end/assets/images/country/united-kingdom.png') }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="france">
                                                <img src="{{ asset('front-end/assets/images/country/germany.png') }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Germany</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                                <img src="{{ asset('front-end/assets/images/country/turkish.png') }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Turki</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown">
                                        <span>USD</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="aud" href="javascript:void(0)">AUD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="{{ route('index') }}" class="web-logo nav-logo">
                                <img src="{{ asset('front-end/assets/images/logo/1.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </div>
                            </form>

                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="search-box">
                                    <div class="input-group">
                                        <input name="keywords_submit" type="search" class="form-control" placeholder="I'm searching for...">
                                        <button class="btn" type="submit" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="{{ route('contact-us') }}" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Delivery</h6>
                                                <h5>+84 867 551 656</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <a href="{{ route('wishlist.index') }}" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                            <button onclick="location.href = '{{ route('cart.index') }}';" type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                                {{-- <span class="position-absolute top-0 start-100 translate-middle badge">2 <span class="visually-hidden">unread messages</span> </span> --}}
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    @foreach ($cartItems as $key => $value)
                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="{{ route('productDetail', ['id' => $value['productId']]) }}" class="drop-image">
                                                                <img src="{{ asset('front-end/assets/images/product/') }}/{{ $value['image'] }}"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="{{ route('productDetail', ['id' => $value['productId']]) }}">
                                                                    <h5>{{ $value['name'] }}</h5>
                                                                </a>
                                                                <h6><span>{{ $value['quantity'] }} x</span> ${{ number_format($value['price'], 2) }}</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>

                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">${{ number_format($totalUSD, 2) }}</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="{{ route('cart.index') }}" class="btn btn-sm cart-button">View Cart</a>
                                                    <a href="{{ route('checkout') }}" class="btn btn-sm cart-button theme-bg-color text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <h5>My Account</h5>
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="{{ route('login') }}">Log In</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="{{ route('signUp') }}">Register</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="{{ route('userLogOut') }}">Log Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <ul class="category-list">
                                    @foreach($categories_products as $category_product)
                                    <li class="onhover-category-list">
                                        <a href="{{ route('listProductCategory', ['id' => $category_product->id]) }}" class="category-name">
                                            <img src="{{ asset('front-end/assets/images/category/' . $category_product->icon_url) }}" alt="">
                                            <h6>{{ $category_product->name }}</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>

                                        <div class="onhover-category-box">
                                            <div class="list-1">
                                                <div class="category-title-box">
                                                    <h5>{{ $category_product->name }}</h5>
                                                </div>
                                                <ul>
                                                    @foreach($category_product->products as $product)
                                                    <li>
                                                        <a href="{{ route('productDetail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-toggle" href="{{ route('index') }}"
                                                >Home</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Shop</a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('listProduct') }}">Shop
                                                            Category</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('listService') }}">Shop
                                                            Service</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Product</a>

                                                <div class="dropdown-menu dropdown-menu-3 dropdown-menu-2">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div class="dropdown-column m-0">
                                                                <h5 class="dropdown-header">
                                                                    Category </h5>
                                                                    @foreach ($categories as $category)
                                                                    <a class="dropdown-item" href="{{ route('listProductCategory', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                                                    @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="dropdown-column m-0">
                                                                <h5 class="dropdown-header">
                                                                    Brand </h5>
                                                                    @foreach ($brands as $key => $brand)
                                                                        <a class="dropdown-item" href="{{ route('listProductBrand', ['id' => $brand->id]) }}">
                                                                            {{ $brand->name }}
                                                                            <label class="menu-label">New</label>
                                                                        </a>
                                                                    @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 d-xl-block d-none">
                                                            <div class="dropdown-column m-0">
                                                                <div class="menu-img-banner">
                                                                    <a class="text-title" href="#">
                                                                        <img src="{{asset('front-end')}}/assets/images/mega-menu.png"
                                                                            alt="banner">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('blogGrid') }}">Blog Grid</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown new-nav-item">
                                                <label class="new-dropdown">New</label>
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="about-us.php">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="contact-us.php">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="faq.php">Faq</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('userDashboard') }}">User
                                                            Dashboard</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-nav-right">
                            <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                                <i data-feather="zap"></i>
                                <span>Deal Today</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
