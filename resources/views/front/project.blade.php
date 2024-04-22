@extends('front.master')
@section('project-active','active')

@section('title','Project')
@section('hero')
    @include('front.partials.hero',['name' => 'Project'])
@endsection
@section('content')
    <livewire:front.components.projects-component />
@endsection
