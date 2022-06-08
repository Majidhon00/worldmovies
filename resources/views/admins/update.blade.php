@extends('admins.layout')
@section('content')
<div class="container">
<br>
  <form action="{{ route('admin2.update',['admin2'=>$video->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="nomi">Kino nomi</label>
    <input type="text" name="video_name" class="form-control" value="{{ $video->video_name }}"> <br>
    <label for="img">Kino rasmi</label>
    <input type="file" name="video_image" class="form-control" id="img"> <br>
    <input type="hidden" name="video_image2" value="{{ $video->video_image }}">
    <label for="nomi">Kino linki</label>
    <input type="text" name="videos" class="form-control" value="{{ $video->video }}"> <br>
    <label for="cat">Kategoryasi</label>
    <input type="text" name="cat" class="form-control" id="cat" value="{{ $video->cat }}"> <br>
    <label for="sel">Reklamaga qo'yish</label>
    <select name="new" class="form-control" id="sel">
      <option value="">Qo'yilmasin</option>
      @if ($video->new=='new')
      <option value="new" selected>New</option>
      <option value="multik">Multik</option>
      <option value="kino">Kino</option>
      @endif
      @if ($video->new=='multik')
      <option value="multik" selected>Multik</option>
      <option value="new">New</option>
      <option value="kino">Kino</option>
      @endif
      @if ($video->new=='kino')
      <option value="kino" selected>Kino</option>
      <option value="multik">Multik</option>
      <option value="new">New</option>
      @endif
      @if ($video->new=='')
      <option value="kino">Kino</option>
      <option value="multik">Multik</option>
      <option value="new">New</option>
      @endif
    </select>
    <br>
    <label for="ser">serial uchun</label>
    <input type="text" name="serial" class="form-control" id="ser" value="{{ $video->serial}}"> <br>
    <label for="text">Qo'shimcha m'alumot</label>
    <textarea name="desc" cols="30" rows="2" class="form-control" id="text">{{ $video->desc}}</textarea><br>
    <input type="submit" value="send" class="btn btn-info"> 
    <a href="{{ route('admin2.index') }}" class="btn btn-dark">orqaga</a>
  </form>
</div>
@endsection 