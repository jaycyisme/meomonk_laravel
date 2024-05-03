<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Fastkart" />
    <meta name="keywords" content="Fastkart" />
    <meta name="author" content="Fastkart" />
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon" />
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" />

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css" />

    <!-- wow css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bulk-style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body class="bg-effect">
    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <?php include "header.php"; ?>
    <!-- Header End -->

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

    <!-- Home Section Start -->
    <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-8 ratio_65">
                    <div class="home-contain h-100">
                        <div class="h-100">
                            <img src="../assets/images/vegetable/banner/1.jpg" class="bg-img blur-up lazyload" alt="" />
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
                                <img src="../assets/images/vegetable/banner/2.jpg" class="bg-img blur-up lazyload"
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
                                <img src="../assets/images/vegetable/banner/3.jpg" class="bg-img blur-up lazyload"
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
                        <img src="../assets/images/vegetable/banner/4.jpg" class="bg-img blur-up lazyload" alt="" />
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
                        <img src="../assets/images/vegetable/banner/5.jpg" class="bg-img blur-up lazyload" alt="" />
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
                        <img src="../assets/images/vegetable/banner/6.jpg" class="bg-img blur-up lazyload" alt="" />
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
                        <img src="../assets/images/vegetable/banner/7.jpg" class="bg-img blur-up lazyload" alt="" />
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
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Vegetables & Fruit</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Beverages</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Meats & Seafood</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Breakfast & Dairy</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Frozen Foods</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Biscuits & Snacks</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Grocery & Staples</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/drink.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Wines & Alcohol Drinks</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Milk & Dairies</a>
                                        </h5>
                                    </div>
                                </li>
                                <li class="pb-30">
                                    <div class="category-list">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg"
                                            class="blur-up lazyload" alt="" />
                                        <h5>
                                            <a href="shop-left-sidebar.php">Pet Foods</a>
                                        </h5>
                                    </div>
                                </li>
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
                                <img src="../assets/images/vegetable/banner/8.jpg" class="bg-img blur-up lazyload"
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
                                <img src="../assets/images/vegetable/banner/11.jpg" class="img-fluid blur-up lazyload"
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
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.php" class="offer-image">
                                                <img src="../assets/images/vegetable/product/23.png"
                                                    class="blur-up lazyload" alt="" />
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.php" class="text-title">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.php" class="offer-image">
                                                <img src="../assets/images/vegetable/product/24.png"
                                                    class="blur-up lazyload" alt="" />
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.php" class="text-title">
                                                        <h6 class="name">
                                                            Dates Medjoul Premium Imported
                                                        </h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.php" class="offer-image">
                                                <img src="../assets/images/vegetable/product/25.png"
                                                    class="blur-up lazyload" alt="" />
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.php" class="text-title">
                                                        <h6 class="name">Good Life Walnut Kernels</h6>
                                                    </a>
                                                    <span>200 G</span>
                                                    <h6 class="price theme-color">$ 52.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.php" class="offer-image">
                                                <img src="../assets/images/vegetable/product/26.png"
                                                    class="blur-up lazyload" alt="" />
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.php" class="text-title">
                                                        <h6 class="name">Apple Red Premium Imported</h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">$ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
                                            <img src="../assets/images/vegetable/review/1.jpg"
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
                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/1.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Fantasy Crunchy Choco Chip Cookies
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/2.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Cold Brew Coffee Instant Coffee 50 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/3.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Peanut Butter Bite Premium Butter Cookies 600 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="label-tag">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/4.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            SnackAmor Combo Pack of Jowar Stick and Jowar
                                                            Chips
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Yumitos Chilli Sprinkled Potato Chips 100 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/6.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Neu Farm Unpolished Desi Toor Dal 1 kg
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="label-tag">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/7.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            healthy Long Life Toned Milk 1 L
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/8.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Dog Treats Natural Yak Milk Bars For Small Dogs
                                                            100g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/9.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Raw Mutton Leg, Packaging 5 Kg
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/10.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Blended Instant Coffee 50 g Buy 1 Get 1 Free
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/3.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Peanut Butter Bite Premium Butter Cookies 600 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/vegetable/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="" />
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
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
                                                            <a href="wishlist.php" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.php">
                                                        <h6 class="name">
                                                            Yumitos Chilli Sprinkled Potato Chips 100 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">$26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
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
                                                        <button class="btn btn-add-cart addcart-button">
                                                            Add
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
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Bowse by Categories</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <div class="category-slider-2 product-wrapper no-arrow">
                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Vegetables & Fruit</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Beverages</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Meats & Seafood</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Breakfast</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Frozen Foods</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Milk & Dairies</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.php" class="category-box category-dark">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Pet Food</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="../assets/images/vegetable/banner/9.jpg" class="bg-img blur-up lazyload"
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
                                    <img src="../assets/images/vegetable/banner/10.jpg" class="bg-img blur-up lazyload"
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
                        <h2>Food Cupboard</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="product-border overflow-hidden wow fadeInUp">
                        <div class="product-box-slider no-arrow">
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/1.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Chocolate Powder</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/2.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Sandwich Cookies</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/3.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Butter Croissant</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/4.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Dark Chocolate</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/5.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Mix-sweet-food</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.php">
                                                    <img src="../assets/images/vegetable/product/4.png"
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
                                                        <a href="wishlist.php" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.php">
                                                    <h6 class="name h-100">Dark Chocolate</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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
                                                    <button class="btn btn-add-cart addcart-button">
                                                        Add
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
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain">
                            <img src="../assets/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload"
                                alt="" />
                            <div class="banner-details p-center p-4 text-white text-center">
                                <div>
                                    <h3 class="lh-base fw-bold offer-text">
                                        Get $3 Cashback! Min Order of $30
                                    </h3>
                                    <h6 class="coupon-code">Use Code : GROCERY1920</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-xxl-8 col-xl-12 col-md-7">
                                <div class="banner-contain hover-effect">
                                    <img src="../assets/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload"
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
                                    <img src="../assets/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload"
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
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/11.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Tuffets Whole Wheat Bread</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/12.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Potato</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/13.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Green Chilli</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/14.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Muffets Burger Bun</h6>
                                                </a>
                                                <span>150 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/15.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Tuffets Britannia Cheezza</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/16.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Long Life Toned Milk</h6>
                                                </a>
                                                <span>1 L</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/17.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Organic Tomato</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/18.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Organic Jam</h6>
                                                </a>
                                                <span>150 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/19.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">
                                                        Good Life Refined Sunflower Oil
                                                    </h6>
                                                </a>
                                                <span>1 L</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/20.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Good Life Raw Peanuts</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/21.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">TufBest Farms Mong Dal</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.php" class="offer-image">
                                            <img src="../assets/images/vegetable/product/22.png"
                                                class="blur-up lazyload" alt="" />
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.php" class="text-title">
                                                    <h6 class="name">Frooti Mango Drink</h6>
                                                </a>
                                                <span>160 ML</span>
                                                <h6 class="price theme-color">$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain hover-effect">
                            <img src="../assets/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload"
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
                                        <img src="../assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
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
                                        <img src="../assets/images/vegetable/blog/2.jpg" class="bg-img blur-up lazyload"
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
                                        <img src="../assets/images/vegetable/blog/3.jpg" class="bg-img blur-up lazyload"
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
                                        <img src="../assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
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

    <!-- Footer Section Start -->
    <?php include "footer.php"; ?>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">
                                    Peanut Butter Bite Premium Butter Cookies 600 g
                                </h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
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
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>
                                        Candy canes sugar plum tart cotton candy chupa chups sugar
                                        plum chocolate I love. Caramels marshmallow icing dessert
                                        candy canes I love soufflé I love toffee. Marshmallow pie
                                        sweet sweet roll sesame snaps tiramisu jelly bear claw.
                                        Bonbon muffin I love carrot cake sugar plum dessert
                                        bonbon.
                                    </p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.php';"
                                        class="btn btn-md add-cart-button icon">
                                        Add To Cart
                                    </button>
                                    <button onclick="location.href = 'product-left.php';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Choose your Delivery Location
                    </h5>
                    <p class="mt-1 text-content">
                        Enter your address and we will specify the offer for your area.
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area" />
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Cookie Bar Box Start -->
    <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="../assets/images/cookie-bar.png" class="blur-up lazyload" alt="" />
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">
                    We use cookies to make your experience better
                </h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div>
    <!-- Cookie Bar Box End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="" />
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="" />
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="" />
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="" />
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top and theme setting button start -->
    <div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#0da487" title="Choose your color" />
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">
                                    Dark
                                </button>
                                <button class="btn btn-2 unline" id="lightButton">
                                    Light
                                </button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top and theme setting button end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="../assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Auto Height Js -->
    <script src="../assets/js/auto-height.js"></script>

    <!-- Timer Js -->
    <script src="../assets/js/timer1.js"></script>

    <!-- Fly Cart Js -->
    <script src="../assets/js/fly-cart.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity-2.js"></script>

    <!-- WOW js -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="../assets/js/theme-setting.js"></script>
</body>

</html>