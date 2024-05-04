@extends('admin.back-end.app')
@section('content')

<!-- Container-fluid starts-->
<div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('addNewCategory') }}"
                                   class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Icon</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->Name }}</td>

                                        <td>
                                            <div class="category-icon">
                                                <img src="{{ asset('back-end/assets/images/store-icons/' . $category->IconUrl) }}" class="img-fluid" alt="">

                                            </div>
                                        </td>

                                        <td>
                                            <ul>
                                                {{-- <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li> --}}

                                                <li>
                                                    <a href="{{ route('editCategory', ['id' => $category->id]) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <li>
                                                        <form action="{{ route('softDeleteCategory', ['id' => $category->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button style="background: none;
                                                            border: none !important;
                                                            color: red;
                                                            font-size: 1.2rem;" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa category này không?')">
                                                                <i class="ri-delete-bin-line" ></i>
                                                            </button>
                                                        </form>
                                                    </li>
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
    <!-- All Category Table Ends-->

<!-- Container-fluid end -->

@endsection

