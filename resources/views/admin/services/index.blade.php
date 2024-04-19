@extends('admin.master')
@section('title', 'Services')
@section('services-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Services</h4>
        <livewire:admin.services.services-create />
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.services.services-data />
                </div>
            </div>
        </div>
        <livewire:admin.services.services-update />
        <livewire:admin.services.services-delete />
        <livewire:admin.services.services-show />
    </div>
@endsection
