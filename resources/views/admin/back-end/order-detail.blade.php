@extends('admin.back-end.app')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header title-header-block package-card">
                            <div>
                                <h5>Order #{{ $bill->trading_code }}</h5>
                            </div>
                            <div class="card-order-section">
                                <ul>
                                    <li>{{ $bill->create_time }}</li>
                                    <li>{{ $bill->billProducts->count() }} items</li>
                                    <li>Total ${{ $totalPrice }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-inner cart-section order-details-table">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="table-responsive table-details">
                                        <table class="table cart-table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                    <th class="text-end" colspan="2">
                                                        {{-- <a href={{ route('orders.editItems', $bill->id) }} class="theme-color">Edit Items</a> --}}
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($bill->billProducts as $billProduct)
                                                <tr class="table-order">
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <img src="{{ asset('front-end/assets/images/product/' . $billProduct->product->image) }}" class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <p>Product Name</p>
                                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px;">
                                                            {{ $billProduct->product->name }}
                                                        </h5>

                                                    </td>

                                                    <td>
                                                        <p>Quantity</p>
                                                        <h5>{{ $billProduct->quantity }}</h5>
                                                    </td>
                                                    <td>
                                                        <p>Price</p>
                                                        <h5>${{ $billProduct->product->price }}</h5>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                {{-- <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Subtotal :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>${{ $bill->total_money }}</h4>
                                                    </td>
                                                </tr>
                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Shipping :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>$12.00</h4>
                                                    </td>
                                                </tr>
                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Tax(GST) :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>$10.00</h4>
                                                    </td>
                                                </tr> --}}
                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h4 class="theme-color fw-bold">Total Price :</h4>
                                                    </td>
                                                    <td>
                                                        <h4 class="theme-color fw-bold">${{ $totalPrice }}</h4>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="order-success">
                                        <div class="row g-4">
                                            <h4>Summary</h4>
                                            <ul class="order-details">
                                                <li>Order ID: {{ $bill->id }}</li>
                                                <li>Order Date: {{ $bill->create_time }}</li>
                                                <li>Order Total: ${{ $totalPrice }}</li>
                                            </ul>
                                            <h4>Shipping Address</h4>
                                            <ul class="order-details">
                                                <li>{{ $bill->user->name }}</li>
                                                <li>{{ $bill->user->address }}</li>
                                                <li>Contact No. {{ $bill->user->phone_number }}</li>
                                            </ul>
                                            <div class="payment-mode">
                                                <h4>Payment Method</h4>
                                                <p>{{ $bill->paymentMethod->name }}</p>
                                            </div>
                                            <div class="delivery-sec">
                                                <h3>Expected Date of Delivery: <span>{{ $bill->expected_delivery_date }}</span></h3>
                                                <a href="{{ route('orderTracking', $bill->id) }}">Track Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tracking table end -->
</div>
<!-- tracking section End -->
@endsection
