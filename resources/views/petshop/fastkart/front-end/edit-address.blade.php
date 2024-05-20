@extends('petshop.fastkart.front-end.app')
@section('content')
<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>Edit Address</h3>
                            </div>

                            <div class="card-body">
                                <form class="theme-form theme-form-2 mega-form" action="{{ route('addresses.update', $address->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Specific address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address_line_1" class="form-control" value="{{ $address->address_line_1 }}" placeholder="Enter address line 1" required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Specific address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address_line_2" class="form-control" value="{{ $address->address_line_2 }}" placeholder="Enter address line 2 (can null)">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="city" class="form-control" value="{{ $address->city }}" placeholder="Enter city" required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Zip Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="zip_code" class="form-control" value="{{ $address->zip_code }}" placeholder="Enter zip code" required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button class="btn btn-animation btn-md fw-bold ms-auto">Save Address</button>
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
</section>

@endsection
