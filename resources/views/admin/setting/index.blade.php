@extends('admin.master')
@section('title', 'Setting')
@section('setting-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Setting</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <livewire:admin.setting.update-setting />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
