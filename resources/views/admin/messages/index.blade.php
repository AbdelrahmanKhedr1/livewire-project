@extends('admin.master')
@section('title', 'Messages')
@section('messages-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Messages</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.messages.messages-data />
                </div>
            </div>
        </div>
        <livewire:admin.messages.messages-delete />
        <livewire:admin.messages.messages-show />
    </div>
@endsection
