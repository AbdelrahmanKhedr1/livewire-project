@props([
    'type' => 'text',
    'name',
    'label' => null,
    'col' => 'col-12'
])

<div class="{{$col}}">
    <div class="form-floating">
        <input type="{{$type}}" class="form-control" id="{{$name}}" placeholder=" {{$label}}" wire:model='{{$name}}'>
        <label for="{{$name}}"> {{$label}} </label>
    </div>
    <x-admin.error name="{{$name}}" />
</div>
