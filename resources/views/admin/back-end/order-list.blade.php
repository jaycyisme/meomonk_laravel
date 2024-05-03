@extends('admin.back-end.app')
@section('content')


<!-- Order section Start -->
<div class="page-body">
    <!-- Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Order List</h5>
                            <a href="#" class="btn btn-solid">Download all orders</a>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package order-table theme-table" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Order Code</th>
                                        <th>Date</th>
                                        <th>Payment Method</th>
                                        <th>Delivery Status</th>
                                        <th>Amount</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 406-4883635</td>

                                        <td>Jul 20, 2022</td>

                                        <td>Paypal</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 573-685572</td>

                                        <td>Jul 25, 2022</td>

                                        <td>Paypal</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 759-4568734</td>

                                        <td>Jul 29, 2022</td>

                                        <td>Stripe</td>

                                        <td class="order-pending">
                                            <span>Pending</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 546-7664537</td>

                                        <td>Jul 30, 2022</td>

                                        <td>Paypal</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 479-7533144</td>

                                        <td>Aug 01, 2022</td>

                                        <td>Stripe</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 456-1245789</td>

                                        <td>Aug 10, 2022</td>

                                        <td>Stripe</td>

                                        <td class="order-cancle">
                                            <span>Cancel</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 057-3657895</td>

                                        <td>Aug 18, 2022</td>

                                        <td>Paypal</td>

                                        <td class="order-cancle">
                                            <span>Cancel</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 123-1234567</td>

                                        <td>Aug 29, 2022</td>

                                        <td>Paypla</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 987-9876543</td>

                                        <td>Sep 09, 2022</td>

                                        <td>Paypal</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 147-3692584</td>

                                        <td>Sep 17, 2022</td>

                                        <td>Stripe</td>

                                        <td class="order-success">
                                            <span>Success</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr data-bs-toggle="offcanvas" href="#order-details">

                                        <td> 586-5865224</td>

                                        <td>Sep 20, 2022</td>

                                        <td>Stripe</td>

                                        <td class="order-pending">
                                            <span>Pending</span>
                                        </td>

                                        <td>$15</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white"
                                                       href="{{ route('orderTracking') }}">
                                                        Tracking
                                                    </a>
                                                </li>
                                            </ul>
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
    <!-- Table End -->

</div>
<!-- Order section End -->

<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
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
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <div class="wrapper">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal Box End -->
@endsection
