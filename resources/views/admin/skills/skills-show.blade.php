<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>
