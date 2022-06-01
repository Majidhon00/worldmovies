@extends('admins.layout')
@section('content')
<style>
  .vid{
    height: 500px;
  }  
</style>
<table class="table tab-content vid">
  <thead>
      <tr>
          <th>No</th>
          <th>Reklama rasmi</th>
          <th>Reklama rasmi</th>
          <th>Reklama linki</th>
          <th>Amallar</th>
      </tr>
  </thead>
  <tbody>
     @foreach ($rek as $re)
         <tbody>
           <tr>
             <th>{{ $loop->index+1 }}</th>
             <th><img src="{{ $re->src1 }}" alt="" width="100px"></th>
             <th><img src="{{ $re->src2 }}" alt="" width="200px"></th>
             <th>{{ $re->href }}</th>
             <th><a href="{{ route('rek.edit',['rek'=>$re->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i></a></th>
           </tr>
         </tbody>
     @endforeach
  </tbody>
</table>
@endsection