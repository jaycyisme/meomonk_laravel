@extends('admin.back-end.app')
@section('content')


<!-- Container-fluid starts-->
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
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                   placeholder="Product Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Animal</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Animal</option>
                                                <option>Simple</option>
                                                <option>Classified</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Category</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Category Menu</option>
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

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Status</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Status</option>
                                                <option>Ethnic Wear</option>
                                                <option>Ethnic Bottoms</option>
                                                <option>Women Western Wear</option>
                                                <option>Sandels</option>
                                                <option>Shoes</option>
                                                <option>Beauty & Grooming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Brand</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100">
                                                <option disabled>Brand Menu</option>
                                                <option value="puma">Puma</option>
                                                <option value="hrx">HRX</option>
                                                <option value="roadster">Roadster</option>
                                                <option value="zara">Zara</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100">
                                                <option disabled>Unit Menu</option>
                                                <option>Kilogram</option>
                                                <option>Pieces</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Active</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input type="checkbox" checked=""><span
                                                    class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Description</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <label class="form-label-title col-sm-3 mb-0">Product
                                                    Description</label>
                                                <div class="col-sm-9">
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Images</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Images</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file"
                                                   id="formFile" multiple>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                            Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file"
                                                   id="formFileMultiple1" multiple>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Price</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="0">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Inventory</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option>Weight</option>
                                                <option>Color</option>
                                                <option>Size</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <table class="table variation-table table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">Variant</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Red</td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <ul class="order-option">
                                                <li><a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#deleteModal"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <ul class="order-option">
                                                <li><a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#deleteModal"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0"><a class="btn btn-solid" href="add-new-product.html" style="width: 200px;">Add Product</a></div>
</div>
<!-- Container-fluid End -->
@endsection
