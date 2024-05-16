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
            <form action=" {{ route('productUpdate', ['id' => $products->id]) }}" method="POST" enctype="multipart/form-data" id="formmain" >
                @csrf
                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                   placeholder="Product Name"  name="name" value="{{ $products->name }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Animal</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="animal_id">>
                                                {{-- {{ $products->productStatus->name ?? 'N/A' }} --}}

                                                <option value="{{ $products->animal->id ?? 'N/A'}}" selected>{{ $products->animal->name ?? 'N/A'}}</option>

                                                    @foreach($Animals as $Animal)
                                                        <option value="{{ $Animal->id }}">{{ $Animal->name }}</option>
                                                    @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Category</label>
                                        <div class="col-sm-9">

                                            <select class="js-example-basic-single w-100" name="category_id">
                                                <option value="{{ $products->category->id ?? 'N/A'}}" selected>{{ $products->category->name ?? 'N/A'}}</option>
                                                @foreach($Categorys as $Category)
                                                    <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Supplier</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="supplier_id">
                                                <option value="{{ $products->supplier->id ?? 'N/A'}}" selected>{{ $products->supplier->name?? 'N/A'}}</option>

                                                @foreach($Suppliers as $Supplier)
                                                    <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Brand</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="brand_id">
                                                <option value="{{ $products->brand->id ?? 'N/A'}}" selected>{{ $products->brand->name?? 'N/A'}}</option>

                                                @foreach($Brands as $Brand)
                                                    <option value="{{ $Brand->id }}">{{ $Brand ->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Quantity
                                            </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number"
                                                   placeholder="Quantity" name="quantity" value="{{ $products->quantity }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Statue</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="product_status_id">
                                                <option value="{{ $products->productStatus->id ?? 'N/A'}}" selected>{{ $products->productStatus->name?? 'N/A'}}</option>
                                                    @foreach($Statues as $Status)
                                                        <option value="{{ $Status->id }}">{{ $Status->name }}</option>
                                                    @endforeach

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Description</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Description</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" placeholder="Enter Product Description" name="description">{{ $products->description }}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Images</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Image</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input formFile" name="image_url" accept="image/*">
                                                <label class="custom-file-label" for="formFile">Choose file</label>
                                            </div>
                                            <img id="currentImage" src="{{ asset('front-end/assets/images/product/' . $products->image) }}" alt="Current Image" class="mt-2 img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    </div>
                                </div>


                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail 1</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input formFile" name="Thumbnail1" accept="image/*">
                                                <label class="custom-file-label" for="thumbnail1File">Choose file</label>
                                            </div>
                                            <img id="currentThumbnail1" src="{{ asset('front-end/assets/images/product/' . $products->thumbnail1) }}" alt="Current Thumbnail 1" class="mt-2 img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail 2</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input formFile" name="Thumbnail2" accept="image/*">
                                                <label class="custom-file-label" for="thumbnail2File">Choose file</label>
                                            </div>
                                            <img id="currentThumbnail2" src="{{ asset('front-end/assets/images/product/' . $products->thumbnail2) }}" alt="Current Thumbnail 2" class="mt-2 img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail 3</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input formFile" name="Thumbnail3" accept="image/*">
                                                <label class="custom-file-label" for="thumbnail3File">Choose file</label>
                                            </div>
                                            <img id="currentThumbnail3" src="{{ asset('front-end/assets/images/product/' . $products->thumbnail3) }}" alt="Current Thumbnail 3" class="mt-2 img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    </div>
                                </div>


                                </div>

                                </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Price</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="0" name="price" value="{{ $products->price }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Inventory</h5>
                                </div>
                                <div id="productForm" class="theme-form theme-form-2 mega-form">
                                    @foreach($attributes as $attribute)
                                    <div class="mb-4 row align-items-center attribute-row">
                                        <div class="col-sm-3 col-form-label form-label-title" >{{ $attribute->name }}</div>
                                        <div class="col-sm-7">
                                            <select class="js-example-basic-single w-100" name="attribute[{{ $attribute->name }}][]">
                                                @foreach($attributeValues as $value)
                                                    @if($value->name == $attribute->name)
                                                        <option value="{{ $value->id }}" data-name="{{$value->value}}">{{ $value->value }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary addAttributeButton">Add</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Attribute</th>
                                            <th>Value</th>
                                            <th>percent</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="attributeTableBody">
                                        @foreach($productAttributes as $productAttribute)
                                        <tr>
                                            <td style="width: 10%;">
                                                <input type="text"class="attribute_id-input"  name="attribute_id[]" value="{{ $productAttribute->attribute_id ?? 'N/A' }}" style="width: 100%; border: none; outline: none; padding: 5px; cursor: default;" readonly>
                                            </td>
                                            <td style="width: 20%;">{{ $productAttribute->attribute->name ?? 'N/A' }}</td>
                                            <td style="width: 20%;">{{ $productAttribute->attribute->value ?? 'N/A' }}</td>
                                            <td style="width: 20%;">
                                                <input type="number" class="form-control" name="percent[]" value="{{ $productAttribute->percent ?? 'N/A' }}" placeholder="Enter percent" style="width: 100%; border: none; outline: none; padding: 5px;">
                                            </td>
                                            <td>
                                                <button style="background: none; border: none !important; color: red; font-size: 1.2rem;" type="button" onclick="deleteRow(this)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
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
            <div style="display: flex;justify-content: flex-end; margin:0 215px 50px 0">
                <button type="submit" class="btn btn-solid" onclick="submitForm()" style="width: 200px; ">Add Product</button>
            </div>
        </form>


        </div>

    </div>

</div>



<script>
        document.addEventListener('DOMContentLoaded', function () {
        var productForm = document.getElementById('productForm');
        var tableBody = document.getElementById('attributeTableBody');

        productForm.addEventListener('click', function(event) {
            if (event.target.classList.contains('addAttributeButton')) {
                var attributeRow = event.target.closest('.attribute-row');

                // Kiểm tra xem attributeRow có tồn tại không
                if (attributeRow) {
                    var attributeNameElement = attributeRow.querySelector('.col-form-label');
                    var attributeSelectElement = attributeRow.querySelector('select');

                    // Kiểm tra xem các phần tử cần thiết có tồn tại không
                    if (attributeNameElement && attributeSelectElement) {
                        var attributeName = attributeNameElement.textContent;
                        var attributeId = attributeSelectElement.value;
                        var attributeValue = attributeSelectElement.options[attributeSelectElement.selectedIndex].dataset.name;

                        // Kiểm tra xem giá trị thuộc tính đã tồn tại trong bảng chưa
                        var attributeExists = false;
                        var tableRows = tableBody.querySelectorAll('tr');
                        tableRows.forEach(function(row) {
                            var rowName = row.cells[1].textContent; // Lấy giá trị của cột thứ hai (index 1) trong hàng
                            var rowValue = row.cells[2].textContent; // Lấy giá trị của cột thứ ba (index 2) trong hàng
                            if (rowName === attributeName && rowValue === attributeValue) {
                                attributeExists = true;
                            }
                        });

                        // Nếu thuộc tính đã tồn tại, hiển thị thông báo và không thêm vào bảng
                        if (attributeExists) {
                            console.log('Thuộc tính đã tồn tại trong bảng.');
                        } else {
                            // Tạo một hàng mới trong bảng
                            var newRow = document.createElement('tr');
                            newRow.innerHTML = `
                                <td style="width: 10%;">
                                    <input type="text" class="attribute_id-input" name="attribute_id[]" value="${attributeId}" style="width: 100%; border: none; outline: none; padding: 5px; cursor: default;" readonly>
                                </td>
                                <td style="width: 20%;">${attributeName}</td>
                                <td style="width: 20%;">${attributeValue}</td>
                                <td style="width: 20%;">
                                    <input type="number" class="percent-input form-control" name="percent[]" value="0" placeholder="Enter percent" style="width: 100%; border: none; outline: none; padding: 5px;">
                                </td>
                                <td>
                                    <button style="background: none; border: none !important; color: red; font-size: 1.2rem;" type="button" onclick="deleteRow(this)">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </td>
                            `;

                            // Thêm hàng mới vào bảng
                            tableBody.appendChild(newRow);


                            var form = document.getElementById('formmain');
                                var hiddenInput = document.createElement('input');
                                hiddenInput.type = 'hidden';
                                hiddenInput.name = 'attribute_id[]';
                                hiddenInput.value = attributeId;

                                form.appendChild(hiddenInput);


                        }
                    } else {
                        console.error('Không thể tìm thấy phần tử .col-form-label hoặc select');
                    }
                } else {
                    console.error('Không thể tìm thấy phần tử .attribute-row');
                }
            }
        });
    });


    // function deleteRow(btn) {
    //     var row = btn.parentNode.parentNode;
    //     row.parentNode.removeChild(row);
    // }
    function deleteRow(btn) {
    var row = btn.parentNode.parentNode;
    var form = document.getElementById('formmain');

    // Lấy giá trị của attributeId từ input trong hàng
    var attributeId = row.querySelector('input[name="attribute_id[]"]').value;

    // Xóa input hidden có cùng giá trị attributeId trong form
    var hiddenInput = form.querySelector('input[name="attribute_id[]"][value="' + attributeId + '"]');
    if (hiddenInput) {
        hiddenInput.parentNode.removeChild(hiddenInput);
    }

    // Xóa hàng trong bảng
    row.parentNode.removeChild(row);
}
    function submitForm() {


        var percentInputs = document.querySelectorAll('.percent-input');
        if (percentInputs.length > 0) {
            var form = document.getElementById('formmain');
            percentInputs.forEach(function(input) {
                var percentValue = input.value;
                var hiddenInputPercent = document.createElement('input');
                hiddenInputPercent.type = 'hidden';
                hiddenInputPercent.name = 'percent[]';
                hiddenInputPercent.value = percentValue;
                form.appendChild(hiddenInputPercent);
            });
        }
    }

</script>

<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Check if there's a success message available in session
        if ("{{ session('success') }}") {
            // Display the success message as an alert
            alert("{{ session('success') }}");
        }
        if ("{{ session('error') }}") {
            // Display the success message as an alert
            alert('{{ session('error') }}');
        }

    }
    );

</script>


<script>
document.querySelector('[name="image_url"]').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(e) {
        // Cập nhật ảnh chính với ảnh mới được chọn
        document.getElementById('currentImage').src = e.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});

// Xử lý cho Thumbnail 1
document.querySelector('[name="Thumbnail1"]').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('currentThumbnail1').src = e.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});

// Xử lý cho Thumbnail 2
document.querySelector('[name="Thumbnail2"]').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('currentThumbnail2').src = e.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});

// Xử lý cho Thumbnail 3
document.querySelector('[name="Thumbnail3"]').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('currentThumbnail3').src = e.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});

</script>
@endsection

