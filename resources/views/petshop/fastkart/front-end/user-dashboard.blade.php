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
                    <h2>User Dashboard</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- User Dashboard Section Start -->
<section class="user-dashboard-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-3 col-lg-4">
                <div class="dashboard-left-sidebar">
                    <div class="close-button d-flex d-lg-none">
                        <button class="close-sidebar">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="profile-box">
                        <div class="cover-image">
                            <img src="../assets/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload"
                                alt="">
                        </div>

                        <div class="profile-contain">
                            <div class="profile-image">
                                <div class="position-relative">
                                    <img src="../assets/images/inner-page/user/1.jpg"
                                        class="blur-up lazyload update_img" alt="">
                                    <div class="cover-icon">
                                        <i class="fa-solid fa-pen">
                                            <input type="file" onchange="readURL(this,0)">
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-name">
                                <h3>{{ $name }}</h3>
                                <h6 class="text-content">{{ $email }}</h6>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-dashboard" type="button"><i data-feather="home"></i>
                                DashBoard</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-order" type="button"><i
                                    data-feather="shopping-bag"></i>Order</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-wishlist-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-wishlist" type="button"><i data-feather="heart"></i>
                                Wishlist</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-card-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-card" type="button" role="tab"><i
                                    data-feather="credit-card"></i> Saved Card</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-address" type="button" role="tab">
                               <i data-feather="map-pin"></i>Address</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"><i data-feather="user"></i>
                                Profile</button>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-xxl-9 col-lg-8">
                <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                    Menu</button>
                <div class="dashboard-right-sidebar">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                            <div class="dashboard-home">
                                <div class="title">
                                    <h2>My Dashboard</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-user-name">
                                    <h6 class="text-content">Hello, <b class="text-title">{{ $name }}</b></h6>
                                    <p class="text-content">From your My Account Dashboard you have the ability to
                                        view a snapshot of your recent account activity and update your account
                                        information. Select a link below to view or edit information.</p>
                                </div>

                                <div class="total-box">
                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="total-contain">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="total-detail">
                                                    <h5>Total Order</h5>
                                                    <h3>3658</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="total-contain">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="total-detail">
                                                    <h5>Total Pending Order</h5>
                                                    <h3>254</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="total-contain">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                                    class="blur-up lazyload" alt="">
                                                <div class="total-detail">
                                                    <h5>Total Wishlist</h5>
                                                    <h3>32158</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-title">
                                    <h3>Account Information</h3>
                                </div>

                                <div class="row g-4">
                                    <div class="col-xxl-6">
                                        <div class="dashboard-content-title">
                                            <h4>Contact Information <a href="javascript:void(0)"
                                                    data-bs-toggle="modal" data-bs-target="#editProfile">Edit</a>
                                            </h4>
                                        </div>
                                        <div class="dashboard-detail">
                                            <h6 class="text-content">{{$name}}</h6>
                                            <h6 class="text-content">{{$email}}</h6>
                                            <a href="javascript:void(0)">Change Password</a>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="dashboard-content-title">
                                            <h4>Newsletters <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#editProfile">Edit</a></h4>
                                        </div>
                                        <div class="dashboard-detail">
                                            <h6 class="text-content">You are currently not subscribed to any
                                                newsletter</h6>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="dashboard-content-title">
                                            <h4>Address Book <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#editProfile">Edit</a></h4>
                                        </div>

                                        <div class="row g-4">
                                            <div class="col-xxl-6">
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">Default Billing Address</h6>
                                                    <h6 class="text-content">You have not set a default billing
                                                        address.</h6>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#editProfile">Edit Address</a>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6">
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">Default Shipping Address</h6>
                                                    <h6 class="text-content">You have not set a default shipping
                                                        address.</h6>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#editProfile">Edit Address</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-wishlist" role="tabpanel">
                            <div class="dashboard-wishlist">
                                <div class="title">
                                    <h2>My Wishlist History</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="row g-sm-4 g-3">
                                    <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                        <div class="product-box-3 theme-bg-white h-100">
                                            <div class="product-header">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/cake/product/2.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="product-header-top">
                                                        <button class="btn wishlist-button close_button">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-footer">
                                                <div class="product-detail">
                                                    <span class="span-name">Vegetable</span>
                                                    <a href="product-left-thumbnail.php">
                                                        <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                    </a>
                                                    <p class="text-content mt-1 mb-2 product-content">Cheesy feet
                                                        cheesy grin brie. Mascarpone cheese and wine hard cheese the
                                                        big cheese everyone loves smelly cheese macaroni cheese
                                                        croque monsieur.</p>
                                                    <h6 class="unit mt-1">250 ml</h6>
                                                    <h5 class="price">
                                                        <span class="theme-color">$08.02</span>
                                                        <del>$15.15</del>
                                                    </h5>
                                                    <div class="add-to-cart-box mt-2">
                                                        <button class="btn btn-add-cart addcart-button"
                                                            tabindex="0">Add
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
                                                                    type="text" name="quantity" value="0">
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

                                    <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                        <div class="product-box-3 theme-bg-white h-100">
                                            <div class="product-header">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/cake/product/3.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="product-header-top">
                                                        <button class="btn wishlist-button close_button">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-footer">
                                                <div class="product-detail">
                                                    <span class="span-name">Vegetable</span>
                                                    <a href="product-left-thumbnail.php">
                                                        <h5 class="name">Peanut Butter Bite Premium Butter Cookies
                                                            600 g</h5>
                                                    </a>
                                                    <p class="text-content mt-1 mb-2 product-content">Feta taleggio
                                                        croque monsieur swiss manchego cheesecake dolcelatte
                                                        jarlsberg. Hard cheese danish fontina boursin melted cheese
                                                        fondue.</p>
                                                    <h6 class="unit mt-1">350 G</h6>
                                                    <h5 class="price">
                                                        <span class="theme-color">$04.33</span>
                                                        <del>$10.36</del>
                                                    </h5>
                                                    <div class="add-to-cart-box mt-2">
                                                        <button class="btn btn-add-cart addcart-button"
                                                            tabindex="0">Add
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
                                                                    type="text" name="quantity" value="0">
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

                                    <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                        <div class="product-box-3 theme-bg-white h-100">
                                            <div class="product-header">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.php">
                                                        <img src="../assets/images/cake/product/4.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="product-header-top">
                                                        <button class="btn wishlist-button close_button">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-footer">
                                                <div class="product-detail">
                                                    <span class="span-name">Snacks</span>
                                                    <a href="product-left-thumbnail.php">
                                                        <h5 class="name">SnackAmor Combo Pack of Jowar Stick and
                                                            Jowar Chips</h5>
                                                    </a>
                                                    <p class="text-content mt-1 mb-2 product-content">Lancashire
                                                        hard cheese parmesan. Danish fontina mozzarella cream cheese
                                                        smelly cheese cheese and wine cheesecake dolcelatte stilton.
                                                        Cream cheese parmesan who moved my cheese when the cheese
                                                        comes out everybody's happy cream cheese red leicester
                                                        ricotta edam.</p>
                                                    <h6 class="unit mt-1">570 G</h6>
                                                    <h5 class="price">
                                                        <span class="theme-color">$12.52</span>
                                                        <del>$13.62</del>
                                                    </h5>
                                                    <div class="add-to-cart-box mt-2">
                                                        <button class="btn btn-add-cart addcart-button"
                                                            tabindex="0">Add
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
                                                                    type="text" name="quantity" value="0">
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
                        <div class="tab-pane fade" id="pills-order" role="tabpanel">
                            <div class="dashboard-order">
                                <div class="title">
                                    <h2>My Orders History</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="order-contain">

                                    <div class="order-contain">
                                        @foreach ($orderHistory as $order)
                                            @foreach ($order->billProducts as $billProduct)
                                                <div class="order-box dashboard-bg-box">
                                                    <div class="order-container">
                                                        <div class="order-icon">
                                                            <i data-feather="box"></i>
                                                        </div>
                                                        <div class="order-detail">
                                                            <h4>Delivers <span>{{ $order->billStatus->name }}</span></h4>
                                                        </div>
                                                    </div>

                                                    <div class="product-order-detail">
                                                        <div class="product-image-and-details" style="display: flex; align-items: flex-start;">
                                                            <a href="javascript:void(0)">
                                                                <img src="{{ asset('front-end/assets/images/product/' . $billProduct->product->image) }}" style="max-width: 150px; margin-right: 20px;" class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                            <div class="order-wrap" style="flex: 1;">
                                                                <a href="product-left-thumbnail.php">
                                                                    <h3>{{ $billProduct->product->name }}</h3>
                                                                </a>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Sold By : </h6>
                                                                    <h5>{{ $billProduct->product->brand->name }}</h5>
                                                                </div>
                                                                <p class="text-content">{{ $billProduct->product->description }}</p>
                                                                <ul class="product-size">
                                                                    <li>
                                                                        <div class="size-box">
                                                                            <h6 class="text-content">Price : </h6>
                                                                            <h5>${{ $billProduct->product->price }}</h5>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-address" role="tabpanel">
                            <div class="dashboard-address">
                                <div class="title title-flex">
                                    <div>
                                        <h2>My Address Book</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <a href="{{ route('addresses.create') }}" class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3">
                                        <i data-feather="plus" class="me-2"></i> Add New Address
                                    </a>
                                </div>

                                <form id="address-form" action="{{ route('address.set_default') }}" method="POST">
                                    @csrf
                                    <div class="row g-sm-4 g-3">
                                        @foreach ($addresses as $address)
                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="address_id" id="address_{{ $address->id }}" value="{{ $address->id }}" {{ $address->is_default ? 'checked' : '' }} onchange="document.getElementById('address-form').submit();">
                                                        </div>
                                                        <div class="label">
                                                            <label>Home</label>
                                                        </div>
                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>{{ $address->address_line_1 }}</p>
                                                                            <p>{{ $address->address_line_2 }}</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>City :</td>
                                                                        <td>
                                                                            <p>{{ $address->city }}</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Zip Code :</td>
                                                                        <td>{{ $address->zip_code }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <a href="{{ route('addresses.edit', ['id' => $address->id]) }}" class="btn btn-sm add-button w-100"><i data-feather="edit"></i> Edit</a>
                                                        <button class="btn btn-sm add-button w-100 delete-address" data-id="{{ $address->id }}" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"><i data-feather="trash-2"></i> Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-card" role="tabpanel">
                            <div class="dashboard-card">
                                <div class="title title-flex">
                                    <div>
                                        <h2>My Card Details</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3"
                                        data-bs-toggle="modal" data-bs-target="#editCard"><i data-feather="plus"
                                            class="me-2"></i> Add New Card</button>
                                </div>

                                <div class="row g-4">
                                    <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>08/05</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>Audrey Carol</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="../assets/images/payment-icon/1.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#removeProfile"><i
                                                        class="far fa-minus-square"></i> delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                            <div class="dashboard-profile">
                                <div class="title">
                                    <h2>My Profile</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="profile-detail dashboard-bg-box">
                                    <div class="dashboard-title">
                                        <h3>Profile Name</h3>
                                    </div>
                                    <div class="profile-name-detail">
                                        <div class="d-sm-flex align-items-center d-block">
                                        <h3>{{$name}}</h3>
                                            <div class="product-rating profile-rating">
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
                                            </div>
                                        </div>
                                    </div>

                                    <div class="location-profile">
                                        <ul>
                                            @foreach ($addresses as $address)
                                            @if ($address->is_default)
                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="map-pin"></i>
                                                        <h6>{{ $address->address_line_1 }}</h6>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach


                                            <li>
                                                <div class="location-box">
                                                    <i data-feather="mail"></i>
                                                    <h6>{{$email}}</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="profile-description">
                                        <p>Residences can be classified by and how they are connected to
                                            neighbouring residences and land. Different types of housing tenure can
                                            be used for the same physical type.</p>
                                    </div>
                                </div>

                                <div class="profile-about dashboard-bg-box">
                                    <div class="row">
                                        <div class="col-xxl-7">
                                            <div class="dashboard-title mb-3">
                                                <h3>Profile About</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Gender :</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birthday :</td>
                                                            <td>21/05/1997</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number :</td>
                                                            <td>
                                                                <a href="javascript:void(0)">{{$phone_number}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address :</td>
                                                            <td>
                                                             @foreach ($addresses as $address)
                                                                    @if ($address->is_default)
                                                                        <li>
                                                                                <h6>{{ $address->address_line_1 }}</h6>

                                                                            </div>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Xác Nhận Xóa -->
    <div class="modal fade theme-modal remove-address" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <form id="delete-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-animation btn-md fw-bold">Yes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-address');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const addressId = this.getAttribute('data-id');
            const deleteForm = document.getElementById('delete-form');
            deleteForm.action = `/addresses/${addressId}`;

        });
    });


});

    </script>


</section>
<!-- User Dashboard Section End -->
@endsection
