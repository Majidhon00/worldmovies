@extends('admins.layout')
<meta name="_token" content="{{ csrf_token() }}" />

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
                    <th>Video Nomi</th>
                    <th>Video rasmi</th>
                    <th>Kategoryasi</th>
                    <th>linki <button class="btn btn-primary but">show</button> <button
                            class="btn btn-primary but2">hide</button></th>

                    <th>Qo'shimcha</th>
                    <th><a href="{{ route('admin.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a></th>
                </tr>
            </thead>
            <tbody class="areagl">
                @foreach ($videos as $tab)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $tab->video_name }}</td>
                        <td><img src="{{ $tab->video_image }}" alt="rasm" width="50px"></td>
                        <td>{{ $tab->cat }}</td>
                        <td class="area">{{ $tab->video }}</td>
                        <td class="area2"><iframe class='sel' width='200px' height='100px'
                                src='{{ $tab->video }}' title='YouTube video player' frameborder='0'
                                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                                allowfullscreen></iframe></td>
                        <td>{{ substr($tab->desc, 0, 50) }}</td>
                        <td><a href="up/{{ $tab->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a><a
                                href="del/{{ $tab->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $videos->links() }}
    </div>
@endsection
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    $(function() {
        $(".area2").hide();
        $(".but2").hide();
        $(".area").show();
        $(".but").click(function(e) {
            e.preventDefault();
            $(".area").hide();
            $(".area2").show();
            $(".but").hide();
            $(".but2").show();
        });
        $(".but2").click(function(e) {
            e.preventDefault();
            $(".area2").hide();
            $(".area").show();
            $(".but2").hide();
            $(".but").show();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $(".search").keyup(function(e) {
            $('areagl').empty();
            $(".but").hide();
            $(".but2").hide();

            $.ajax({
                method: "post",
                url: "{{ route('ajaxtable') }}",
                data: {
                    search: $(this).val()
                },
                success: function(result) {
                    $('.areagl').empty();

                    result.dbsers.forEach(myfun);

                    function myfun(item, index) {
                      index = index * 1 + 1;

                        $('.areagl').html($('.areagl').html() + "<tr><td>" + index +
                            "</td><td>" + item.video_name + "</td><td><img src='" +
                            item.video_image + "' alt='rasm' width='50px'></td><td>" + item.cat+ "</td><td class='area'>" + item.video + "</td><td>" +
                           item.desc.substring(0, 50) + "</td><td><a href='up/" + item.id +
                            "' class='btn btn-success'><i class='fas fa-edit'></i></a><a href='del/" +
                            item.id +
                            "' class='btn btn-danger'><i class='fas fa-trash'></i></a></td></tr>"   )
                         
                    }
                }
            });
          });

    })
</script>
