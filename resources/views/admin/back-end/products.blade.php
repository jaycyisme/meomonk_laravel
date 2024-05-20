@extends('admin.back-end.app')
@section('content')
<!-- Container-fluid starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Products List</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-solid" href="{{ route('addNewProducts') }}">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Animal</th> <!-- Sửa thành "Animal" -->
                                                <th>Price</th> <!-- Sửa thành "Price" -->
                                                <th>Description</th>
                                                <th>Quantity</th> <!-- Sửa thành "Quantity" -->
                                                <th>Product Status</th> <!-- Sửa thành "Product Status" -->
                                                <th>Brand</th>
                                                <th>Supplier</th> <!-- Sửa thành "Supplier" -->
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('front-end/assets/images/product/'. $product->image) }}" class="img-fluid" alt="{{ $product->name }}">

                                                    </div>
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name ?? 'N/A' }}</td>

                                                <td>{{ $product->animal->name?? 'N/A'}}</td>
                                                <td class="td-price">${{ number_format($product->price, 2) }}</td>
                                                <td style="max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                    {{ $product->description }}
                                                </td>
                                                <td>{{ $product->quantity }}</td>

                                                <td>{{ $product->productStatus->name ?? 'N/A' }}</td>
                                                <td>{{ $product->brand->name ?? 'N/A' }}</td>

                                                <td>{{ $product->supplier->name ?? 'N/A' }}</td>


                                                <td>
                                                    <ul>
                                                        <li><a href=" {{ route('productDetail', ['id' => $product->id]) }}"><i class="ri-eye-line"></i></a></li>
                                                        <li><a href="{{ route('product.edit', $product->id) }}"><i class="ri-pencil-line"></i></a></li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" data-id="{{ $product->id }}"class="delete-product">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>




    <div class="modal fade theme-modal remove-product" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
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
                        <p>The permission for the use/group, preview is inherited from the object, object will create a new permission for this object</p>
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
    <!-- Delete Modal Box End -->

    <!-- Success Modal Box Start -->
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
    <!-- Success Modal Box End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-product');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.getAttribute('data-id');
                    const deleteForm = document.getElementById('delete-form');
                    deleteForm.action = `/products/${productId}`;
                });
            });

            @if(session('success'))
                const successModal = new bootstrap.Modal(document.getElementById('exampleModalToggle2'));
                successModal.show();
            @endif
        });
    </script>
@endsection
