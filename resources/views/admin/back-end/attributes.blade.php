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
                            <h5>All Attributes</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('addNewAttributes') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                <tr>
                                    <th>Attribute Name</th>
                                    <th>Attribute Value</th>
                                    <th>Option</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($attributes as $attribute)
                                    <tr>
                                        <td>{{ $attribute->name }}</td>
                                        <td>{{ $attribute->value }}</td>
                                        <td >
                                            <a href="{{ route('Attributesedit', ['id' => $attribute->id]) }}">
                                                <i class="ri-pencil-line"></i>
                                            </a>

                                            <form action="{{ route('Attributesdelete', ['id' => $attribute->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="background: none;
                                                border: none !important;
                                                color: red;
                                                font-size: 1.2rem;" type="submit" onclick="return confirm('Are you sure you want to delete this attribute?')">
                                                    <i class="ri-delete-bin-line" ></i>
                                                </button>
                                            </form>

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
    <!-- All User Table Ends-->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const productForm = document.getElementById('productForm');

        productForm.addEventListener('click', function(event) {
            if (event.target.classList.contains('addAttributeButton')) {
                const button = event.target;
                const attributeRow = button.closest('.attribute-row');
                const clonedRow = attributeRow.cloneNode(true);

                // Reset the select value in the cloned row
                clonedRow.querySelector('select').selectedIndex = 0;

                // Append the cloned row to the form
                productForm.appendChild(clonedRow);
            }
        });
    });

    function showSelectedText() {
        // Example function to show selected text when the "Add Product" button is clicked
        const attributeSelect = document.querySelector('select[name^="attribute"]');
        const selectedOption = attributeSelect.options[attributeSelect.selectedIndex];
        const selectedText = selectedOption.textContent;
        alert("Selected Attribute: " + selectedText);
    }
    </script>
    >
@endsection
