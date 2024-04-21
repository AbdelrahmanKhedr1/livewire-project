@props([
    'options' ,
    'label' => null,
    'name',
])
<div class="mb-3">
<label for="exampleFormControlSelect1" class="form-label">{{ $label }} </label>
<select class="form-select" id="exampleFormControlSelect1" wire:model='{{ $name }}'>
    <option  selected>select {{ $label }}</option>
    @if (count($options) > 0 )
        @foreach ($options as $option)
            <option value="{{$option->id}}" wire:key='option-{{$option->id}}'>{{$option->name}}</option>
        @endforeach
    @endif
</select>
<x-admin.error name="{{$name}}" />
</div>

{{-- <div class="mb-3">
    <label for="exampleFormControlSelect1" class="form-label">Example select</label>
    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div> --}}
