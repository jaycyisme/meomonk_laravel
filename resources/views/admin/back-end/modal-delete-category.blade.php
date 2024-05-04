<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>Are you sure you want to delete category <span id="categoryName"></span>?</p>
                </div>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="category_id" id="delete_id">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-animation btn-md fw-bold">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
