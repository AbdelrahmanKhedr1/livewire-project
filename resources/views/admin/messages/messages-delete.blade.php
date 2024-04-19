<x-admin.modal id="delete" titleName="Delete Message" buttonName="Delete" buttonColor="danger">
    <p>Are you sure to delete
        <span class="text-danger font-weight-bold">
            {{ $name }}
        </span>
        Message ?
    </p>
    <p>Email :
        <span class="text-danger font-weight-bold">
            {{ $email }}
        </span>
    </p>
    <p>Subject :
        <span class="text-danger font-weight-bold">
            {{ $subject }}
        </span>
    </p>

</x-admin.modal>
