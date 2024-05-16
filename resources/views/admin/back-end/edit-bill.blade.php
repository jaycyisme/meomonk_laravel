@extends('admin.back-end.app')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Edit Order</h5>
                                </div>
                                <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('orders.update', $order->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="card-header-1">
                                        <h5>Order Information</h5>
                                    </div>

                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0" for="order_code">Order Code:</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input type="text" name="order_code" id="order_code" class="form-control" value="{{ $order->trading_code }}" readonly>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0" for="create_time">Date:</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input type="text" name="create_time" id="create_time" class="form-control" value="{{ $order->create_time }}" readonly>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0" for="payment_method">Payment Method:</label>
                                            <div class="col-md-9 col-lg-10">
                                                <select name="payment_method" id="payment_method" class="form-control">
                                                    @foreach ($payment_method as $value)
                                                        <option value="{{ $value->id }}" {{ $order->payment_method_id == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0" for="delivery_status">Delivery Status:</label>
                                            <div class="col-md-9 col-lg-10">
                                                <select name="delivery_status" id="delivery_status" class="form-control">
                                                    @foreach ($bill_status as $value)
                                                        <option value="{{ $value->id }}" {{ $order->bill_status_id == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0" for="amount">Amount:</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input type="number" name="amount" id="amount" class="form-control" value="{{ $order->total_money }}">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-lg-2 col-md-3"></div>
                                            <div class="col-md-9 col-lg-10">
                                                <button type="submit" class="btn btn-primary">Update Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
