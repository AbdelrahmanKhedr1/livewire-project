@extends('admin.master')
@section('title', 'Subscriber')
@section('subscriber-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Subscriber</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.subscriber.subscriber-data />
                </div>
            </div>
        </div>
        <livewire:admin.subscriber.subscriber-delete />
    </div>
@endsection
