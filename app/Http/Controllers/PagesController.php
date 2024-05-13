<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //FRONT_END
    public function index() {
        return view('.petshop.fastkart.front-end.index');
    }

    public function aboutUs() {
        return view('.petshop.fastkart.front-end.about-us');
    }

    public function blogDetail() {
        return view('.petshop.fastkart.front-end.blog-detail');
    }

    public function blogGrid() {
        return view('.petshop.fastkart.front-end.blog-grid');
    }

    public function blogList() {
        return view('.petshop.fastkart.front-end.blog-list');
    }

    public function cart() {
        return view('.petshop.fastkart.front-end.cart');
    }

    public function checkout() {
        return view('.petshop.fastkart.front-end.checkout');
    }

    public function contactUs() {
        return view('.petshop.fastkart.front-end.contact-us');
    }

    public function faq() {
        return view('.petshop.fastkart.front-end.faq');
    }

    public function login() {
        return view('.petshop.fastkart.front-end.login');
    }

    public function orderSuccess() {
        return view('.petshop.fastkart.front-end.order-success');
    }

    public function orderUserTracking() {
        return view('.petshop.fastkart.front-end.order-tracking');
    }

    public function otp() {
        return view('.petshop.fastkart.front-end.otp');
    }

    public function productAccordion() {
        return view('.petshop.fastkart.front-end.product-accordion');
    }

    public function productBottomThumbnail() {
        return view('.petshop.fastkart.front-end.product-bottom-thumbnail');
    }

    public function productBundle() {
        return view('.petshop.fastkart.front-end.product-bundle');
    }

    public function productCircle() {
        return view('.petshop.fastkart.front-end.product-circle');
    }

    public function search() {
        return view('.petshop.fastkart.front-end.search');
    }

    public function shopBanner() {
        return view('.petshop.fastkart.front-end.shop-banner');
    }

    public function shopCategorySlider() {
        return view('.petshop.fastkart.front-end.shop-category-slider');
    }

    public function shopLeftSidebar() {
        return view('.petshop.fastkart.front-end.shop-left-sidebar');
    }

    public function signUp() {
        return view('.petshop.fastkart.front-end.sign-up');
    }

    public function userDashboard() {
        return view('.petshop.fastkart.front-end.user-dashboard');
    }

    //BACK_END

    public function dashboard() {
        return view('.admin.back-end.body-index');
    }

    public function products() {
        return view('.admin.back-end.products');
    }

    public function addNewProducts() {
        return view('.admin.back-end.add-new-product');
    }

    public function category() {
        return view('.admin.back-end.category');
    }

    public function addNewCategory() {
        return view('.admin.back-end.add-new-category');
    }

    public function attributes() {
        return view('.admin.back-end.attributes');
    }

    public function addNewAttributes() {
        return view('.admin.back-end.add-new-attributes');
    }

    public function allUsers() {
        return view('.admin.back-end.all-users');
    }

    public function addNewUser() {
        return view('.admin.back-end.add-new-user');
    }

    public function role() {
        return view('.admin.back-end.role');
    }

    public function addNewRole() {
        return view('.admin.back-end.create-role');
    }

    public function media() {
        return view('.admin.back-end.media');
    }

    public function orderList() {
        return view('.admin.back-end.order-list');
    }

    public function orderDetail() {
        return view('.admin.back-end.order-detail');
    }

    public function orderTracking() {
        return view('.admin.back-end.order-tracking');
    }

    public function currencyRates() {
        return view('.admin.back-end.currency-rates');
    }

    public function couponList() {
        return view('.admin.back-end.coupon-list');
    }

    public function addNewCoupon() {
        return view('.admin.back-end.create-coupon');
    }

    public function productReview() {
        return view('.admin.back-end.product-review');
    }

    public function supportTicket() {
        return view('.admin.back-end.support-ticket');
    }

    public function profileSetting() {
        return view('.admin.back-end.profile-setting');
    }

    public function reportList() {
        return view('.admin.back-end.reports');
    }
}
