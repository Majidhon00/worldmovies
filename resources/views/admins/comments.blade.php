@extends('admins.layout')
<meta name="_token" content="{{ csrf_token() }}" />
<style>
  .tab{
    height: 500px;
  }
</style>
@section('search')
    <form class="my-2 my-lg-0">
        <div class="customize-input customize-input-v4">
            <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
            <i class="form-control-icon" data-feather="search"></i>
        </div>
    </form>
@endsection
@section('content')
    <div class="tab">

        <table class="table tab-content">
            <thead>
                <tr>
                    <th>No</th>
                    <th> Comment</th>
                    <th> kino nomi</th>
                    <th> Amallar </th>
                </tr>
            </thead>
            <tbody class="areagl">
                @foreach ($comments->comment as $tab)
                @if (isset($tab->content))
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $tab->content }}</td>
                  <td>{{ $comments->video_name }}</td>
                  <td><a href="{{ $tab->id }}" class="btn btn-danger del"><i class="fas fa-trash"></i></a></td>
                </tr>
                @endif
                
                @endforeach
              </tbody>
            </table>  
            
            <a href="{{ route('admin2.index') }}" class="btn btn-dark">Orqaga</a>
    </div>
@endsection
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
  $(function(){
    $(".del").click(function (e) { 
      e.preventDefault();
      id = $(this).attr('href'); 
      a = confirm("Rostdan ham o'chirilsinmi");
      if(a==true)
      {
        window.location.href="delcom/"+id;
      }
    });
  })
</script>