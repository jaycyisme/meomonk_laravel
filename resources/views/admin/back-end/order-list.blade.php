@extends('admin.back-end.app')

@section('content')
<div class="page-body">
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
                                <form id="delete-form" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
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
                                    @foreach($orders as $order)
                                    <tr data-bs-toggle="offcanvas" href="#order-details">
                                        <td>{{ $order->trading_code }}</td>
                                        <td>{{ $order->create_time }}</td>
                                        <td>{{ $order->paymentMethod->name }}</td>
                                        <td>{{ $order->billStatus->name }}</td>
                                        <td>{{ $order->total_money }}</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('orderDetail') }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('orders.edit', $order->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="delete-order" data-id="{{ $order->id }}">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-sm btn-solid text-white" href="{{ route('orderTracking') }}">
                                                        Tracking
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
                </div>
            </div>
        </div>
    </div>
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
                    <p>The permission for the use/group, preview is inherited from the object, object will create a new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
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
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
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
        const deleteButtons = document.querySelectorAll('.delete-order');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const billId = this.getAttribute('data-id');
                const deleteForm = document.getElementById('delete-form');
                deleteForm.action = `/order-list/${billId}`;
                $('#exampleModalToggle').modal('show');
            });
        });
        $('#exampleModalToggle .btn-md[data-bs-target="#exampleModalToggle2"]').click(function() {
            const deleteForm = document.getElementById('delete-form');
            deleteForm.submit();
        });

        @if(session('success'))
            const successModal = new bootstrap.Modal(document.getElementById('exampleModalToggle2'));
            successModal.show();
        @endif
    });
</script>
@endsection
