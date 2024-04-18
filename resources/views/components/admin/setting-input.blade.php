{{-- <x-admin.setting-input type="text" label="Name"  name="name" placeholder="Abdelrahman Khedr" icon="bx bx-user" error_wire="setting.name" /> --}}
@props([
    'type' => 'text',
    'label' => null,
    'name',
    'placeholder' => null,
    'icon'  => 'user',
    'error_wire' ,
])
<div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="basic-icon-default-full{{$name}}">{{$label}}</label>
    <div class="col-sm-10">
        <div class="input-group input-group-merge">
            <span id="basic-icon-default-full{{$name}}2" class="input-group-text"><i class="{{$icon}}"></i></span>
            <input type="{{$type}}" class="form-control" id="basic-icon-default-full{{$name}}"
                placeholder="{{$placeholder}}" aria-label="{{$placeholder}}"
                aria-describedby="basic-icon-default-full{{$name}}2" wire:model="{{$error_wire}}" />
        </div>
        <small class="text-danger">
            @error($error_wire)
                {{ $message }}
            @enderror
        </small>
    </div>
</div>
