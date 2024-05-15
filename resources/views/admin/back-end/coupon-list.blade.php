@extends('admin.back-end.app')
@section('content')

<!-- Coupon list table starts-->
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Coupon List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('create') }}">Add Coupon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package coupon-list-table table-hover theme-table"
                                       id="table_id">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class="form-check user-checkbox m-0 p-0">
                                                <input class="checkbox_animated checkall" type="checkbox" value="">
                                            </span>
                                        </th>
                                        <th>Title</th>
                                        <th>Code</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($coupons as $coupon)
                                            <tr>
                                                <td>
                                                    <span class="form-check user-checkbox m-0 p-0">
                                                        <input class="checkbox_animated check-it" type="checkbox" value="">
                                                    </span>
                                                </td>
                                                <td>{{ $coupon->title }}</td>
                                                <td>{{ $coupon->code }}</td>
                                                <td class="theme-color">{{ $coupon->discount }}</td>
                                                <td class="menu-status">
                                                    <span class="{{ $coupon->status === 'Success' ? 'success' : 'danger' }}">
                                                        {{ $coupon->status }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('edit', $coupon->id) }}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="delete-coupon" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" data-id="{{ $coupon->id }}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
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
                <form id="delete-form" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-animation btn-md fw-bold">Yes</button>
                </form>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-coupon');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const couponId = this.getAttribute('data-id');
            const deleteForm = document.getElementById('delete-form');
            deleteForm.action = `/coupons/${couponId}`;
        });
    });
});
</script>

@endsection
