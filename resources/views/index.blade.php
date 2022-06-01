    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    @section('meta')
        <meta name="description"
            content="Ability to watch and download movies online,Filmlarni onlayn tomosha qilish va yuklab olish imkoniyati,">
        <meta name="keywords" content="world of movies, kino, movie , movie, mp3 , music, film, world, kino skachat, movie download , kino download, <? foreach($tops as $baza) { echo $baza->video_name .','; }
            ?>
            ">
    @endsection
    <meta name="_token" content="{{ csrf_token() }}" />
    <style>
        .shows {
            margin-top: 15px;
            width: 285px !important;
            height: 437px;
            margin-left: 5px;
        }
        .shows img{
            height: 437px !important;

        }
        @media only screen and (max-width: 600px) {
            .title-in {
                position: relative;
                left: -50px !important;
                bottom: -30px !important;
            }

            .title-in .cate {
                font-size: 15px;
                position: absolute;
                bottom: -18;
                left: 30;
            }

        }

        .wid {
            width: 185px;
            height: 284px;
        }

        .width {
            width: 285px;
            height: 437px;
        }
        @media only screen and (max-width: 800px)
        {
            .width {
            width: 295px;
            height: 387px;
            
            }   
        .show1{
            display: grid ;
            grid-template-columns: 1fr ;
        }
        }
        @media only screen and (min-width: 760px )
        {
           
        .show1{
            display: grid !important;
            grid-template-columns: 1fr 1fr !important;
        }
        }
        @media only screen and (min-width: 1000px )
        {
           
        .show1{
            display: grid !important;
            grid-template-columns: 1fr 1fr 1fr !important;
        }
        }
       
           
    
   
        .title-in {
            color: #fff;
        }
        .abs{
            position: absolute;
            color: #000;
            left: 10px;
            top: 10px;
            background-color: rgba(255, 255, 255, 0.622);
            padding: 4px 10px;
            
        }
        
    </style>
    @extends('layot')
    <!-- END | Header -->
    @section('name')
        <div class="slider movie-items">
            <div class="container">
                <div class="row">

                    <div class="container">
                        <div class="top-searc ">

                            <input type="text" placeholder="Search" class="search" width="300px">
                        </div>
                    </div>
                    <div class="slick-multiItemSlider show2">
                        @foreach ($tops as $top)
                            @if ($top->new == 'new')
                                <div class="movie-item ">
                                    <div class="mv-img">
                                        {{-- <div class="abs">
                                            
                                        <i class="fas fa-eye" style="color:rgb(116, 232, 232)"></i>          
                                    </div> --}}
                                        <img src="{{ $top->video_image }}" alt="" class="width">
                                    </div>
                                    <div class="title-in">
                                        <div class="cate">
                                            <span class="green"><a href="#">{{ $top->cat }}</a></span>
                                        </div>
                                        <h6><a href=" vid/{{ $top->id }}">{{ $top->video_name }}</a>
                                        </h6><br>

                                        <a href="vid/{{ $top->id }}" class="btn btn-info"><i
                                                class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="show1"></div>
                </div>
            </div>
        </div>
        <div class="movie-items">
            <div class="container">
                <div class="row ipad-width">
                    <div class="col-md-8">
                        <div class="title-hd">
                            <h2>Multik </h2>
                        </div>
                        <div class="tabs">

                            <div class="tab-content">
                                <div id="tab1" class="tab active">
                                    <div class="row">
                                        <div class="slick-multiItem">
                                            @foreach ($tops as $top)
                                                @if ($top->new == 'multik')
                                                    <div class="slide-it">
                                                        <a href="vid/{{ $top->id }}">
                                                        <div class="movie-item">
                                                            <div class="mv-img">
                                                                <img src="{{ $top->video_image }}" class="wid"
                                                                    alt="" width="185" height="284">
                                                            </div>
                                                            <div class="hvr-inner">
                                                                <a href="vid/{{ $top->id }}"> Ko'rish <i
                                                                        class="ion-android-arrow-dropright"></i> </a>
                                                            </div>
                                                            <div class="title-in">
                                                                <h6><a href="vid/{{ $top->id }}">{{ $top->video_name }}</a></h6>
                                                                {{-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> --}}
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- <div id="tab3" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		
							
				            	
				            	</div>
				            </div>
			       	 	</div> --}}
                                {{-- <div id="tab4" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            	</div>
				            </div>
			       	 	</div> --}}
                            </div>
                        </div>
                        <div class="title-hd">
                            <h2> Kino </h2>
                            
                        </div>
                        <div class="tabs">

                            <div class="tab-content">

                                <div id="tab22" class="tab active">
                                    <div class="row">
                                        <div class="slick-multiItem">
                                            @foreach ($tops as $top)
                                                @if ($top->new == 'kino')
                                                <div class="slide-it">
                                                        <a href="vid/{{ $top->id }}">
                                                        <div class="movie-item">
                                                            <div class="mv-img">
                                                                <img src="{{ $top->video_image }}" class="wid"
                                                                    alt="" width="185" height="284">
                                                            </div>
                                                            <div class="hvr-inner">
                                                                <a href="vid/{{ $top->id }}"> Ko'rish <i
                                                                        class="ion-android-arrow-dropright"></i> </a>
                                                            </div>
                                                            <div class="title-in">
                                                                <h6><a href="vid/{{ $top->id }}">{{ $top->video_name }}</a></h6>
                                                            
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- <div id="tab23" class="tab">
				       
			       	 	</div>
			       	 	 <div id="tab24" class="tab">
				    		
			       	 	</div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            @foreach ($rek as $re)
                                <div class="ads">
                                    <a class="ads" href="{{ $re->href }}">
                                        <img src="{{ $re->src1 }}" alt="" width="336" height="296">
                                    </a>
                                </div>
                            @endforeach
                           
                            <div class="celebrities">
                                <h4 class="sb-title">Spotlight Celebrities</h4>
                                <div class="celeb-item">
                                    <a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
                                    <div class="celeb-author">
                                        <h6><a href="#">Samuel N. Jack</a></h6>
                                        <span>Actor</span>
                                    </div>
                                </div>
                                <div class="celeb-item">
                                    <a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
                                    <div class="celeb-author">
                                        <h6><a href="#">Benjamin Carroll</a></h6>
                                        <span>Actor</span>
                                    </div>
                                </div>
                                <div class="celeb-item">
                                    <a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
                                    <div class="celeb-author">
                                        <h6><a href="#">Beverly Griffin</a></h6>
                                        <span>Actor</span>
                                    </div>
                                </div>
                                <div class="celeb-item">
                                    <a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
                                    <div class="celeb-author">
                                        <h6><a href="#">Justin Weaver</a></h6>
                                        <span>Actor</span>
                                    </div>
                                </div>
                                <a href="#" class="btn">See all celebrities<i
                                        class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trailers">
            <div class="container">
        <div class="row ipad-width">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>in theater</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="videos">
                    <div class="slider-for-2 video-ft">
                        @foreach ($trs as $tr)
                            
                        <div>
                            <iframe width="560" height="315" src="{{ $tr->v_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach

                    </div>
                    <div class="slider-nav-2 thumb-ft">
                        @foreach ($trs as $tr)
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ $tr->v_image }}"  alt="photo by Barn Images" width="4096" height="2737">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">{{ $tr->v_name }}</h4>
                                <p>{{ $tr->v_time }}</p>
                            </div>
                        </div>
                        @endforeach
                      
                    
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
            <!-- latest new v1 section-->
            <div class="latestnew">
                <div class="container">
                    <div class="row ipad-width">
                        <div class="col-md-8">
                            @foreach ($rek as $re)
                            <a href="{{ $re->href }}">
                                <div class="ads">
                                    <img src="{{ $re->src2 }}" alt="" width="200%" height="106">
                                </div>
                            </a>
                            @endforeach
                            <div class="title-hd">
                                <h2>Latest news</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of latest new v1 section-->
            <!-- footer section-->
            <script src="{{ asset('js/jquery.js') }}"></script>
            <script>
                $(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    $(".search").keyup(function(e) {
                        se = $(".search").val();
                        if (!(se.length == 0)) {
                            $(".show1").empty();
                            $(".show2").hide();
                            $.ajax({
                                method: "post",
                                url: "{{ route('ajaxdata') }}",
                                data: {
                                    bush: $(".bsh").val(),
                                    test: $(this).val()
                                },
                                success: function(result) {
                                    $(".show1").empty();
                                    $(".show2").hide();

                                    result.data.forEach(datav)

                                    function datav(item, index) {
                                        $(".show1").html($(".show1").html() +
                                            "<div class='movie-item shows'><div class='mv-img'><img src='" +
                                            item.video_image +
                                            "' class='width-im'> </div><div class='title-in'><div class='cate'><span class='green'><a href='#''>" +
                                            item.cat + "</a></span> </div> <h6><a href='vid/" + item
                                            .id + "'>" + item.video_name +
                                            "</a></h6><br><a href='vid/" + item.id +
                                            "' class='btn btn-info'><i class='fas fa-eye'></i></a> </div></div>"
                                        )

                                    }
                                }
                            });

                        } else {
                            $(".show2").show();
                            $(".show1").empty();
                        }

                    });
                })
            </script>
        @endsection
