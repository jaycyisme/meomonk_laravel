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
                                            <ul>
                                                <li>
                                                    <a href="{{ route('Attributesedit', ['id' => $attribute->id]) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>

                                                </li>

                                                <li>
                                                    <a href="#" class="delete-attribute" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" data-id="{{ $attribute->id }}">
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
    <!-- All User Table Ends-->


</div>
<div class="modal fade theme-modal remove-attribute" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
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
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-attribute');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const attributeId = this.getAttribute('data-id');
            const deleteForm = document.getElementById('delete-form');
            deleteForm.action = `/attributes/${attributeId}`;
        });
    });
});

</script>
{{-- <script> --}}
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
