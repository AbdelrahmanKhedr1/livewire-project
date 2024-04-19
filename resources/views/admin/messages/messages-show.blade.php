<x-admin.modal-show id="show" titleName="show your skill">
    <div class="row mb-3">
        <div class="col ">
            <label for="nameBasic" class="form-label">Name : </label>
            <span class="text-primary"> {{ $name }} </span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col ">
            <label for="emailBasic" class="form-label">email : </label>
            <span class="text-primary"> {{ $email }} </span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col ">
            <label for="subjectBasic" class="form-label">subject : </label>
            <span class="text-primary"> {{ $subject }} </span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col ">
            <label for="messageBasic" class="form-label">message : </label>
            <span class="text-primary"> {{ $message }} </span>
        </div>
    </div>
    
</x-admin.modal-show>
