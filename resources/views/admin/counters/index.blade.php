@extends('admin.master')
@section('title', 'Counters')
@section('counters-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Counters</h4>
        <livewire:admin.counters.counters-create />
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.counters.counters-data />
                </div>
            </div>
        </div>
        <livewire:admin.counters.counters-update />
        <livewire:admin.counters.counters-delete />
    </div>
@endsection
