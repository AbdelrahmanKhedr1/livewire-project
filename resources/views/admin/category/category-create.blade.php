<div class="col-lg-4 col-md-6 right-5">
    <div class="mb-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Category
        </button>
        <x-admin.modal id="create" titleName="Create your Category"  buttonName="Create" >
            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Name" name="name" placeholder="Enter Category" />
            </div>
        </x-admin.modal>
    </div>
</div>
