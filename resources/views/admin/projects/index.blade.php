@extends('admin.master')
@section('title', 'Projects')
@section('projects-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Projects</h4>
        <livewire:admin.projects.projects-create />
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.projects.projects-data />
                </div>
            </div>
        </div>
        <livewire:admin.projects.projects-update />
        <livewire:admin.projects.projects-delete />
    </div>
@endsection
