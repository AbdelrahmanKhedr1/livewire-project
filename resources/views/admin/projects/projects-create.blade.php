<div class="col-lg-4 col-md-6 right-5">
    <div class="mb-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Project
        </button>
        <x-admin.modal id="create" titleName="Create your Project" buttonName="Create">
            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Name" name="name" placeholder="Enter Project" />
            </div>
            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Link" name="link" placeholder="Link" />
            </div>
            <div class="row mb-3">
                <x-admin.modal-input type="file" label="Image" name="image" placeholder="Image" />
            </div>
            <div wire:loading wire:target="image">
                <span class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </span>
            </div>
            @if ($image)
                <div class="row mb-3">
                    <img src="{{ $image->temporaryUrl() }}" width="100&">
                </div>
            @endif
            <x-admin.select :options="$categories" label="Category" name="category_id" />

            <div class="row mb-3">
                <x-admin.modal-input type="text" label="Description" name="description" placeholder="Description" />
            </div>
        </x-admin.modal>
    </div>
</div>
