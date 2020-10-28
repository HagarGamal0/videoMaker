
       <form action="{{route($routeName.'.destroy', $row)}}" method="post">
        @CSRF

        @method('DELETE')

        <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Delete {{$smdulename}}">
          <i class="material-icons">delete</i>
        </button>
      </form>