<x-admin.modal-show id="show" titleName="show your Service">
    <div class="row mb-3">
        <div class="col ">
            <label for="nameBasic" class="form-label">Name : </label>
            <span class="text-primary"> {{ $name }} </span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col ">
            <label for="descriptionBasic" class="form-label">description : </label>
            <span class="text-primary"> {{ $description }} </span>
        </div>
    </div>
    <div class="row g-2">
        <div class="col mb-0">
            <label for="iconBasic" class="form-label">icon : </label>
            <span class="text-primary"> {{ $icon }} </span>
            <i class="{{ $icon }}"></i>
        </div>
    </div>
</x-admin.modal-show>
