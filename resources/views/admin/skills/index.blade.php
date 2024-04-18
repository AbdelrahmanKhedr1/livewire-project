@extends('admin.master')
@section('title', 'Skills')
@section('skills-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Skills</h4>
        <livewire:admin.skills.skills-create />
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <livewire:admin.skills.skills-data />
                </div>
            </div>
        </div>
        <livewire:admin.skills.skills-update />
        <livewire:admin.skills.skills-delete />
        <livewire:admin.skills.skills-show />
    </div>
@endsection
