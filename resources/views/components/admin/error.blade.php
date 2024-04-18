@props([
    'name',
    'message'
])
@error($name) <span class="error text-danger">{{ $message }}</span>@enderror
