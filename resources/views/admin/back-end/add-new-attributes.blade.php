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

                                <form class="theme-form theme-form-2 mega-form"  >
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Attribute Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="attributename" class="form-control" placeholder="Enter attribute">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-start">
                                        <label class="col-sm-3 col-form-label form-label-title">Value</label>
                                        <div class="col-sm-9">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-sm-9">
                                                    <input type="text" name="value" class="form-control" placeholder="Enter Value">
                                                </div>

                                                <div class="col-sm-2 col-3">
                                                    <button
                                                            class="btn text-danger h-100 w-100">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!--                                <button class="btn ms-auto theme-bg-color text-white">Add Product Attribute</button>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->
    <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0"><a class="btn btn-solid" style="width: 200px;">Add Attribute</a></div>

</div>
<!-- Container-fluid End -->
@endsection
