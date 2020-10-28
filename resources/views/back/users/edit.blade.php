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

 

                      
                  
@component('back.shared.edit' )
                       
  <form action="{{route($routeName.'.update' , $row )}}" method="post"> 
  @method('PUT')  




  @include('back.'.$folderName.'.form')

    <button type="submit" class="btn btn-primary pull-right">Update {{$mdulename}} </button>
    <div class="clearfix"></div>

    
  </form>


@endcomponent





@endsection