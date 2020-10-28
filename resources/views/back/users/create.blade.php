@extends('back.layout.app')



@section('title')

{{$pageTitle}}


@endsection


@section('content')



@component('back.layout.header' )

@slot('nav_title')

{{$pageTitle}}



@endslot

@endcomponent





@component('back.shared.create' )

<form action="{{route($routeName.'.store')}}" method="post">   
                  

  @include('back.'.$folderName.'.form')


    <button type="submit" class="btn btn-primary pull-right">Add {{$mdulename}} </button>
    <div class="clearfix"></div>

    </form>


@endcomponent





@endsection