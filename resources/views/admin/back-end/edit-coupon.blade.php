@extends('admin.back-end.app')
@section('content')

<!-- Edit Coupon Table start -->
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Edit Coupon</h5>
                                </div>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-home"
                                                type="button">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-usage-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-usage" type="button">Usage</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form" action="{{ route('update', $coupon->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="card-header-1">
                                                <h5>General</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-lg-2 col-md-3 mb-0">Coupon Title</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="title" value="{{ $coupon->title }}">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon Code</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="code" value="{{ $coupon->code }}">
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon Discount</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number" name="discount" value="{{ $coupon->discount }}">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Status</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <select class="form-control" name="coupon_status_id">
                                                            @foreach ($coupon_status as $value)
                                                                <option value="{{ $value->id }}" {{ $coupon->coupon_status_id == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary" style="margin: 0 215px 50px 0">Update Coupon</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-usage" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form">
                                            <div class="card-header-1">
                                                <h5>Usage Limits</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-lg-2 col-md-3 mb-0">Per Limited</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number" value="{{ $coupon->per_limited }}">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <label class="form-label-title col-lg-2 col-md-3 mb-0">Per Customer</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number" value="{{ $coupon->per_customer }}">
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
    </div>
</div>
<!-- Edit Coupon Table End -->

@endsection
