@extends('admins.layout')
<style>
  .wid{
    height: 500px;
  }
</style>
@section('content')
    <div class="wid container-fluid">
<br>
  <form action="{{ route('trailer.update',['trailer'=>$trs->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="nomi">trailer nomi</label>
    <input type="text" name="v_name" class="form-control" value="{{ $trs->v_name }}"> <br>
    <label for="img">trailer rasmi</label>
    <input type="file" name="v_image" class="form-control" id="img"> <br>
    <input type="hidden" name="image" value="{{ $trs->v_image }}">
    <label for="nomi">trailer linki</label>
    <input type="text" name="v_link" class="form-control" value="{{ $trs->v_link }}" > <br> 
    <label for="d">trailer davomiyligi</label>
    <input type="text" name="v_time" class="form-control" id="d" value="{{ $trs->v_time }}"> <br>
  <br>
    <input type="submit" value="send" class="btn btn-info"> 
    <a href="{{ route('trailer.index') }}" class="btn btn-dark">orqaga</a>
  </form>
</div>
@endsection