<div class="col-lg-4 col-md-6 right-5">
    <div class="mb-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Counter
        </button>
        <x-admin.modal id="create" titleName="Create your Counter"  buttonName="Create" >
            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Name" name="name" placeholder="Enter Name" />
            </div>
            <div class="row mb-3">
                <x-admin.modal-input type="number" label="Count" name="count" placeholder="Enter count" />
            </div>
            <div class="row g-2">
                <x-admin.modal-input type="text" label="Icon" name="icon" placeholder="fa fa-certificate text-warning " />
            </div>
        </x-admin.modal>
    </div>
</div>
