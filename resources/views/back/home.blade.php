@extends('back.layout.app')

@section('title')

home page

@endsection

 @push('css') 

 @endpush

@section('content')

@component('back.layout.header' )

@slot('nav_title')


home page


@endslot

@endcomponent



<h1>welcome</h1>

@endsection

@push('js') 

@endpush

