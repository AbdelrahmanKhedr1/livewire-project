{{-- <x-admin.modal-show id="show" titleName="show your skill"   >
slot
</x-admin.modal-show> --}}
@props(['titleName',  'buttonColor' => 'primary', 'id'])
<!-- Modal -->
<div class="modal fade" id="{{ $id }}Modal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{ $titleName }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>
