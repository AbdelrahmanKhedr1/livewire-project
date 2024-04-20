@extends('admin.master')
@section('title', 'Category')
@section('category-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Category</h4>
        <livewire:admin.category.category-create />
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.category.category-data />
                </div>
            </div>
        </div>
        <livewire:admin.category.category-update />
        <livewire:admin.category.category-delete />
    </div>
@endsection
