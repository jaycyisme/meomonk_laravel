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

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Attribute
                                            Value</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Attribute Value</option>
                                                <option>Electronics</option>
                                                <option>TV & Appliances</option>
                                                <option>Home & Furniture</option>
                                                <option>Another</option>
                                                <option>Baby & Kids</option>
                                                <option>Health, Beauty & Perfumes</option>
                                                <option>Uncategorized</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-start">
                                        <label class="col-sm-3 col-form-label form-label-title">Product Name</label>
                                        <div class="col-sm-9">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="state">
                                                        <option disabled>Product Name</option>
                                                        <option>Electronics</option>
                                                        <option>TV & Appliances</option>
                                                        <option>Home & Furniture</option>
                                                        <option>Another</option>
                                                        <option>Baby & Kids</option>
                                                        <option>Health, Beauty & Perfumes</option>
                                                        <option>Uncategorized</option>

                                                        <?php
                                                        // $attributeController = new AttributeController();
                                                        // $attributeController->getAllProductName();
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-sm-2 col-3">
                                                    <button
                                                            class="btn text-danger h-100 w-100">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Percent</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                   placeholder="Percent">
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
    <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0"><a class="btn btn-solid" style="width: 200px;">Add Product Attribute</a></div>

</div>
<!-- Container-fluid End -->
@endsection
