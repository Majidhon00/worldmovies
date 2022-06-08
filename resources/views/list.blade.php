<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- movielist07:38-->

<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boot.css') }}">
    <link rel="stylesheet" href="{{ asset('help/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
   
    <style>
        .comment{
    border: 1px solid rgba(16, 46, 46, 1);
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    
}
.form{
        width: 50%;
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        border-radius: 5px;
        padding: 20px;
     }
    
     .sec {
         position: relative;
     }

@media (max-width:800px )
{
    .form{
        margin-left:10%; 
        width: 80%;
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        border-radius: 5px;
        padding: 20px;
     }
     .rek{
         margin-left: 10%;
     }
     .ab{
         position: absolute;
         bottom: -750px;
        right: 230px;
        width: 200px;
     
        
     }
     .for{
        padding-top: 230px; 
     }
 }
 @media(min-width: 760px)
 {
    .ab{
         position: absolute;
         bottom: -300px;
        right: 500px;
        width: 200px;
     
        
     }  
     .for{
        padding-top: 230px; 
     }
 }
 @media (min-width: 1000px)
 {
     .ab{
         position: absolute;
         bottom: -300px;
        right: 500px;
        width: 200px;
     
        
     }  
     .for{
        padding-top: 0px !important; 
     }
 }
    </style>

</head>

<body>
    <!--preloading-->

    <!--end of preloading-->
    <!--login form popup-->

    <!--end of login form popup-->
    <!--signup form popup-->
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="index-2.html"><img class="logo" src="{{ asset('images/logo1.png') }}" alt=""
                            width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
       
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->

        </div>
    </header>
    <!-- END | Header -->

    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> World of movies</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> {{ $list->video_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie_list">
        <div class="container ">
            <div class="row ipad-width2">
                <div class="col-md-6 col-sm-12 col-xs-12">


                    <div class="movie-item-style-2">
                        <div class="abs">
													<h5>{{ $list->kuzatuv }} </h5>
                            <i class="fas fa-eye" style="color:rgb(9, 62, 69)"></i>
                        </div>
                        <img src="../{{ $list->video_image }}" alt="" class="wid">
                        <div class="mv-item-infor">
                            <h6><a href="#">{{ $list->video_name }} </a></h6>
                            <p class="rate"> {{ $list->cat }}</p>
                            <p class="describe"></p>
                            <p class="">{{ $list->desc }}</p>
                            <br>
                            @foreach ($lists as $lis)
                                @if ($lis->serial == $list->video_name)
                                    <a href="{{ $lis->id }}" target="{{ $lis->id }}" class="btn btn-light">
                                        {{ $loop->index+1 }}
                                    </a>
                                @endif
                            @endforeach
                            <br><br>
                            <div class="d-fle">
                                
                                <a href="{{ substr($list->video, 0, 12) }}ss{{ substr($list->video, 12, 10000) }}"
                                    target="{{ substr($list->video, 0, 12) }}ss{{ substr($list->video, 12, 10000) }}"
                                    class="button-56"><i class="fas fa-download"></i> Yuklash</a>
                                  

                                    <br><br>
                                <form action="live/{{ $list->id }}" method="get">
                                  <button class="button-86" role="button" type="submit">Onlayn ko'rish</button>

                                    <input type="hidden" name="video" value="{{ $list->id }}">
                                </form>
                            </div>
                            <br><br>
                            <a href="{{ route('index.index') }}" class="btn btn-dark">
                                <-- ortga </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12  for">

                    <div class="containe ">
  
                     
                        
                        <form action="{{ route('video.store') }}" method="POST">
                          @csrf
                          <div class="group sec">      
                            <input type="text" name="name" required>
                            <input type="hidden" name="v_id" value="{{ $list->id }}">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>
                              <span style="color: #ff0000">N</span><span style="color: #002bff">a</span><span style="color: #7a00ff">m</span><span style="color: #53B2C8">e</span>
                            </label>
                           
                          </div>
                            
                          <div class="group">      
                            <textarea name="content"  cols="30" rows="10" required></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label><span style="color: #ff0000">C</span> <span style="color: #002bff">o</span> <span style="color: #7a00ff">m</span> <span style="color: #53B2C8">m</span> <span style="color:#ff7300">e</span> <span style="color:#48ff00">n</span> <span style="color:#ff00c8">t</span> <span style="color: #53B2C8">a</span> <span style="color:#00ffd5">r</span> <span style="color:#002bff">i</span> <span style="color:#ff0000">a</span></label>
                          </div>
                          <button class="button-85" role="button">Yuborish</button>
                        </form>
                </div>
                </div>
            </div>
            <div >
              @if (isset($list->comment))
              <br>
              <section >
                

                      <div class="container">
                          <h1>Comments</h1>
                    <br>
                    @foreach ($list->comment as $item)
                    <div class="row form">
                        <div class="col-sm-12 col-md-7 col-12 pb-4">
                            <div class="comment mt-4 text-justify float-left">
                                <h4>{{ $item->name }}</h4> <span>{{ substr($item->created_at,0,10) }}</span>
                                <br>
                                <p>{{ $item->content }}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach

                
                <div class="">
                   @foreach ($reks as $rek)
                   <a href="{{ $rek->link }}" class="rek">

                       <img src="../{{ $rek->src2 }}" alt="salom" width="70%" height="10%">
                    </a>
                   @endforeach
                </div>
            </div>
          
            </section>
              @endif
            </div>
        </div>
    </div> 
    

  <!-- Main Body -->
  
                <!-- footer section-->

                <!-- end of footer section-->

                <script src="{{ asset('js/jquery.js') }}"></script>
                <script src="{{ asset('js/plugins.js') }}"></script>
                <script src="{{ asset('js/plugins2.js') }}"></script>
                <script src="{{ asset('js/custom.js') }}"></script>
</body>

<!-- movielist07:38-->

</html>
