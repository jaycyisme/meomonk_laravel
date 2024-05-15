@extends('admin.back-end.app')
@section('content')
<!-- Page Sidebar Start -->
<div class="page-body">
    <!-- New User start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Add New User</h5>
                                </div>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-home"
                                                type="button">Account
                                        </button>
                                    </li>

                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form" action="{{ route('store') }}" method="POST">
                                            @csrf
                                            <div class="card-header-1">
                                                <h5>User Information</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-lg-2 col-md-3 mb-0">Username</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="username" required>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="email" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Name</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Phone Number</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="phone_number" required>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="password" name="password" required>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-lg-2 col-md-3 col-form-label form-label-title">Role id</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <select class="form-control" name="role_id" required>
                                                            @foreach ($role_status as $value)
                                                                <option value="{{ $value->id }}">{{ $value->role_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-3"></div> <!-- Column for spacing -->
                                                    <div class="col-md-9 col-lg-10">
                                                        <button type="submit" class="btn btn-primary">Add user</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                        <div class="card-header-1">
                                            <h5>Product Related Permition</h5>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Add Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Update Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Delete Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Apply Discount</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="card-header-1">
                                            <h5>Category Related Permition</h5>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Add Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Update Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Delete Product</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Apply Discount</label>
                                            <div class="col-md-9">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="opinion" checked>
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="opinion"/>
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
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
    </div>
    <!-- New User End -->

    {{-- <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0"><a class="btn btn-solid"
                                                                                   href="add-new-product.html"
                                                                                   style="width: 200px;">Add User</a>
    </div> --}}

</div>
<!-- Page Sidebar End -->
@endsection
