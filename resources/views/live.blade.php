<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('help/css/all.css') }}">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boot.css') }}">
    <title>Document</title>
</head>
<style>
  .wi{
   text-align: center;
   align-items: center;  
  }
  body{
    background-color: #020d18;
  }
  .btn-dark{
    position: relative;
    margin-left:50%; 
  }
  .sel{
    width: 90%; 
    height: 65rem; 
  }
  @media only screen and (max-width: 800px)
  {
    .sel
    {
      margin-left: 0;
      width: 80%; 
      height: 45rem;
    }
  }
</style>
<body>      
  <a href="{{ route('video.show',['video'=>$live->id] ) }}" class="btn btn-dark">Orqaga</a>
    <div class="video wi">
        <div class="slider-for-2 video-ft">

            <div>
                <iframe class="sel" width="80%" height="45rem" src="{{ $live->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


        </div>
    </div>
</div>

</body>

</html>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/plugins2.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
  $(function(){
    $( ".sel" ).click(function() {
      $( this ).slideUp();
    });
  })
</script>
