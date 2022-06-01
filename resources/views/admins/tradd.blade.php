@extends('admins.layout')
<style>
  .wid{
    height: 500px;
  }
</style>
@section('content')
    <div class="wid container-fluid">
<br>
  <form action="{{ route('trailer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nomi">trailer nomi</label>
    <input type="text" name="v_name" class="form-control"> <br>
    <label for="img">trailer rasmi</label>
    <input type="file" name="v_image" class="form-control" id="img"> <br>
    <label for="nomi">trailer linki</label>
    <input type="text" name="v_link" class="form-control" > <br> 
    <label for="d">trailer davomiyligi</label>
    <input type="text" name="v_time" class="form-control" id="d"> <br>
  <br>
    <input type="submit" value="send" class="btn btn-info"> 
    <a href="{{ route('trailer.index') }}" class="btn btn-dark">orqaga</a>
  </form>
</div>
@endsection