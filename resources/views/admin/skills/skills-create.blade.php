<div class="col-lg-4 col-md-6 right-5">
    <div class="mb-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Skill
        </button>
        <x-admin.modal id="create" titleName="Create your skill"  buttonName="Create" >
            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Name" name="name" placeholder="Enter Skill" />
            </div>
            <div class="row g-2">
                <x-admin.modal-input type="number" label="Progress" name="progress" placeholder="1 : 100" min="1" max="100" />
            </div>
        </x-admin.modal>
    </div>
</div>
