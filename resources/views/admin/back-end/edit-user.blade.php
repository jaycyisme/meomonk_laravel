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
                                    <h5>Edit User</h5>
                                </div>
                                <form class="theme-form theme-form-2 mega-form" action="{{ route('updateUser', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-header-1">
                                        <h5>User Information</h5>
                                    </div>
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">Username</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="text" name="username" value="{{ $user->username }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="email" name="email" value="{{ $user->email }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Name</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="text" name="name" value="{{ $user->name }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Phone Number</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="text" name="phone_number" value="{{ $user->phone_number }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="password" name="password">
                                                <small>Leave blank to keep the current password</small>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Role id</label>
                                            <div class="col-md-9 col-lg-10">
                                                <select class="form-control" name="role_id" required>
                                                    @foreach ($role_status as $value)
                                                        <option value="{{ $value->id }}" {{ $user->role_id == $value->id ? 'selected' : '' }}>{{ $value->role_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-lg-2 col-md-3"></div>
                                            <div class="col-md-9 col-lg-10">
                                                <button type="submit" class="btn btn-primary">Update user</button>
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
