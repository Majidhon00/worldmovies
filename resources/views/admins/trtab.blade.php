@extends('admins.layout')
<style>
  .wid{
    height: 500px;
  }
</style>
@section('content')
<div class="wid">

  <table class="table table-bordered">
    <br>
      <thead>
        <tr>
          <th>No</th>
          <th>Tr nomi</th>
          <th>Tr linki</th>
          <th>Tr davomiyligi</th>
          <th>Tr rasmi</th>
          <th><a href="{{ route('trailer.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trailers as $trailer)
            
        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $trailer->v_name }}</td>
          <td>{{ $trailer->v_link }}</td>
          <td>{{ $trailer->v_time }}</td>
          <td><img src="{{ $trailer->v_image }}" alt="" width="70px"></td>
          <td><a href="{{ route('trailer.edit',['trailer'=>$trailer->id]) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="{{ $trailer->id }}" class="btn btn-danger del"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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
        window.location.href="deltr/"+id;
      }
    });
  })
</script>