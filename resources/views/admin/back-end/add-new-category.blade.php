@extends('admin.back-end.app')
@section('content')
<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <form action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="name" placeholder="Category Name">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
                                            <div class="form-group col-sm-9">
                                                <input type="file" name="image_url" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">Select Category Icon</label>
                                            <div class="form-group col-sm-9">
                                                <input type="file" name="icon_url" class="form-control">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Add Category</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    {{-- <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0"><a class="btn btn-solid" href="add-new-product.html" style="width: 200px;">Add Category</a></div> --}}
</div>
<!-- Container-fluid End -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        if ("{{ session('success') }}") {
            // Display the success message as an alert
            alert('{{ session('success') }}');
        }

        if ("{{ session('error') }}") {
            // Display the success message as an alert
            alert('{{ session('error') }}');
        }
    });
</script>

@endsection
