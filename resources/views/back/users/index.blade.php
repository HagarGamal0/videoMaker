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

@component('back.shared.table' )

@slot('addBotton')

<div class="col-md-4 text-right">

  <a href="{{route($routeName.'.create')}}" class="btn btn-white btn-round">Add {{$smdulename}}  </a>
  
  </div>

@endslot
<div class="table-responsive">
  <table class="table">
    <thead class=" text-primary">
      <tr><th>
        ID
      </th>
      <th>
        Name
      </th>
      <th>
        email
      </th>
    
      <th class="text-right">
      controll
      </th>

    </tr>
  </thead>
    <tbody>
     @foreach ($rows as $row) 
       <tr>
   <td>

  {{$row->id}}

      </td>

    <td>
 {{ $row->name }}

      </td>

   <td>
     {{ $row->email }}
      </td> 

   
       <td class="td-actions text-right">

 @include('back.shared.buttons.edit')
    
 @include('back.shared.buttons.delete')


      </form>

          </td>

    </tr>

   @endforeach
    </tbody>
  </table>

</div>

@endcomponent

@endsection
        
                  









