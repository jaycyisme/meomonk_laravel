@extends('admin.back-end.app')
@section('content')

<!-- Container-fluid starts-->
<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xxl-8 col-lg-10 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Add Product Attribute</h5>
                                </div>


                                <form class="theme-form theme-form-2 mega-form" action="{{ route('Attributesstore') }}" method="POST">
                                    @csrf



                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Attribute Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="Enter attribute">

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-start">
                                        <label class="col-sm-3 col-form-label form-label-title">Value</label>
                                        <div class="col-sm-9">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-sm-9">
                                                    <input type="text" name="value" class="form-control" placeholder="Enter Value">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Nút submit để gửi form -->
                                    <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0">
                                        <button type="submit" class="btn btn-solid" style="width: 200px;">Add Attribute</button>


                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

</div>
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Check if there's a success message available in session
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
<!-- Container-fluid End -->
@endsection
