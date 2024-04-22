@extends('front.master')
@section('contact-active','active')

@section('title','Contact')
@section('hero')
    @include('front.partials.hero',['name' => 'Contact'])
@endsection
@section('content')
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
                    <h1 class="text-center mb-5">Contact For Any Query</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <livewire:front.components.messages-component />
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection
