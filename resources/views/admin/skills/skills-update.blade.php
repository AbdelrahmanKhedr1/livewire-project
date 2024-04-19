<x-admin.modal id="edit" titleName="Update your skill" buttonName="Update">
    <div class="row mb-3">
        <x-admin.modal-input type="text" label="Name" name="name" placeholder="Enter Skill" />
    </div>
    <div class="row g-2">
        <x-admin.modal-input type="number" label="Progress" name="progress" placeholder="1 : 100" min="1" max="100" />
    </div>
</x-admin.modal>
