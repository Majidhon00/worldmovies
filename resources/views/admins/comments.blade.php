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
                </tr>
            </thead>
            <tbody class="areagl">
                @foreach ($comments->comment as $tab)
                @if (isset($tab->content))
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $tab->content }}</td>
                  <td>{{ $comments->video_name }}</td>
                </tr>
                @endif
                
                @endforeach
              </tbody>
            </table>  
            
            <a href="{{ route('admin2.index') }}" class="btn btn-dark">Orqaga</a>
    </div>
@endsection