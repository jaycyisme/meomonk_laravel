<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        return view('.petshop.fastkart.front-end.index');
    }

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
