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
                    <h2>OTP</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">OTP</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- log in section start -->
<section class="log-in-section otp-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="../assets/images/inner-page/otp.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3 class="text-title">Please enter the one time password to verify your account</h3>
                            <h5 class="text-content">A code has been sent to <span>*******9897</span></h5>
                        </div>

                        <div id="otp" class="inputs d-flex flex-row justify-content-center">
                            <input class="text-center form-control rounded" type="text" id="first" maxlength="1"
                                placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="second" maxlength="1"
                                placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="third" maxlength="1"
                                placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="fourth" maxlength="1"
                                placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="fifth" maxlength="1"
                                placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="sixth" maxlength="1"
                                placeholder="0">
                        </div>

                        <div class="send-box pt-4">
                            <h5>Didn't get the code? <a href="javascript:void(0)" class="theme-color fw-bold">Resend
                                    It</a></h5>
                        </div>

                        <button onclick="location.href = 'index.php';" class="btn btn-animation w-100 mt-3"
                            type="submit">Validate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- log in section end -->
@endsection
