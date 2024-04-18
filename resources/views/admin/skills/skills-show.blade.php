<x-admin.modal-show id="show" titleName="show your skill">
    <div class="row mb-3">
        <div class="col ">
            <label for="nameBasic" class="form-label">Name : </label>
            <span class="text-primary"> {{ $name }} </span>
        </div>
    </div>
    <div class="row g-2">
        <div class="col mb-0">
            <label for="progressBasic" class="form-label">Progress : </label>
            <span class="text-primary"> {{ $progress }} </span>
        </div>
    </div>
</x-admin.modal-show>
