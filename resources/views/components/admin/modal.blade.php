{{-- <x-admin.modal id="edit" titleName="Update your skill"  buttonName="Update" >
slot
</x-admin.modal> --}}
@props([
    'titleName',
    'buttonName',
    'buttonColor' =>  'primary',
    'id',

])
<!-- Modal -->
<div class="modal fade" id="{{$id}}Modal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{$titleName}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-{{$buttonColor}}">
                        <x-admin.loading name="{{$buttonName}}" />
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
