@extends('admins.layout')
@section('content')
<style>
  .vid{
    height: 500px;
  }  
</style>    
<div class="vid">
  <div class="container">
    <br>
      <form action="{{ route('rek.update',['rek'=>$rek->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="img">Reklama rasmi kvadrat</label>
        <input type="file" name="src1" class="form-control" id="img"> <br>
        <input type="hidden" name="src11" value="{{ $rek->src1 }}">
        <label for="img2">Reklama rasmi uzun</label>
        <input type="file" name="src2" class="form-control" id="img2"> <br>
        <input type="hidden" name="src12" value="{{ $rek->src2 }}">
        <label for="nomi">Reklama linki</label>
        <input type="text" name="href" class="form-control" value="{{ $rek->href }}"> <br>
        <input type="submit" value="send" class="btn btn-info"> 
        <a href="{{ route('rek.index') }}" class="btn btn-dark">orqaga</a>
      </form>
    </div>
</div>
@endsection