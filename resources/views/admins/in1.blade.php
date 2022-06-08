@extends('admins.layout')
@section('content')
<div class="container">
<br>
  <form action="{{ route('admin2.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nomi">Kino nomi</label>
    <input type="text" name="video_name" class="form-control" required> <br>
    <label for="img">Kino rasmi</label>
    <input type="file" name="video_image" class="form-control" id="img" required> <br>
    <label for="nomi">Kino linki</label>
    <input type="text" name="videos" class="form-control" required>
    <input type="hidden" name="kuzatuv" class="form-control" value="0">
    <br>
    <label for="cat">Kategoryasi</label>
    <input type="text" name="cat" class="form-control" id="cat" required> <br>
    <label for="sel">Reklamaga qo'yish</label>
    <select name="new" class="form-control" id="sel" required>
      <option value="">Qo'yilmasin</option>
      <option value="new">New</option>
      <option value="multik">Multik</option>
      <option value="kino">Kino</option>
    </select>
    <br>
    <label for="ser">serial uchun</label>
    <input type="text" name="serial" class="form-control" id="ser"> <br>
    <label for="text">Qo'shimcha m'alumot</label>
    <textarea name="desc" cols="30" rows="2" class="form-control" id="text"></textarea><br>
    <input type="submit" value="send" class="btn btn-info"> 
    <a href="{{ route('admin2.index') }}" class="btn btn-dark">orqaga</a>
  </form>
</div>
@endsection 