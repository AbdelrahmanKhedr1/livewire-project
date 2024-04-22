@props([
    'name',
    'label' => null,
    'col' => 'col-12',
    'height' => '150',
])

<div class="{{$col}}">
    <div class="form-floating">
        <textarea wire:model='{{$name}}' class="form-control" placeholder="Leave a {{$name}} here" id="{{$name}}" style="height: {{$height}}px"></textarea>
        <label for="{{$name}}">{{$label}} </label>
    </div>
</div>
<x-admin.error name="{{$name}}" />
