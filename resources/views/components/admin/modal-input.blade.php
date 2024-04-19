@props([
    'type' => 'text',
    'label' => null,
    'name',
    'placeholder' => null,
    'min' => 0,
    'max' => null,
])
<div class="col ">
    <label for="{{$name}}Basic" class="form-label">{{$label}}</label>
    <input type="{{$type}}" id="{{$name}}Basic" class="form-control"
        placeholder="{{$placeholder}}" wire:model='{{$name}}' min="{{$min}}" max="{{$max}}"/>
</div>
<x-admin.error name="{{$name}}" />
