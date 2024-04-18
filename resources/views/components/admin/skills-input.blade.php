@props([
    'type' => 'text',
    'label' => null,
    'name',
    'placeholder' => null,
])
<div class="col ">
    <label for="{{$name}}Basic" class="form-label">{{$label}}</label>
    <input type="{{$type}}" id="{{$name}}Basic" class="form-control"
        placeholder="{{$placeholder}}" wire:model='{{$name}}' min="1" max="100"/>
</div>
<x-admin.error name="{{$name}}" />
