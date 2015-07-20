<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
  @if(isset($title))
  {{ $title }}
  @else
  Gabe Roeloffs
  @endif
  </title>

  <!--CSS FILES -->

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  @if(Request::is('/') || Request::is('bruhapp'))
    {{ Minify::stylesheet('/css/home.css') }}
  @else
    {{ Minify::stylesheet('/css/blog.css')}}
  @endif


  <!--FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Average+Sans|Fjalla+One|Roboto:400,700,300' rel='stylesheet' type='text/css'>
  {{-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> --}}


  @if(!Request::is('/'))
  <script src="../../ckeditor/ckeditor.js"></script>
  @endif
</head>
    
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="nav navbar-nav navbar-left">
      <li>
      <a class="navbar-brand" style="font-size:25px" href="{{ URL::to('/') }}">GABE ROELOFFS</a>
      </li>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="hidden-xs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('bruhapp') }}" class="nav-link">BRUH</a></li>
        <li><a href="{{ URL::to('blog') }}" class="nav-link">BLOG</a></li>
        <li><a href="http://github.com/gdroel"><i class="fa fa-github fa-lg"></i></a></li>
        <li><a href="http://twitter.com/gaberoeloffs"><i class="fa fa-twitter fa-lg"></i></a></li>
      </ul>
    </div>
    <div class="hidden-sm hidden-md hidden-lg hidden-xl">
     <ul class="nav navbar-nav navbar-right">
        <li><a href="http://github.com/gdroel"><i class="fa fa-github fa-lg"></i></a></li>
        <li><a href="http://twitter.com/gaberoeloffs"><i class="fa fa-twitter fa-lg"></i></a></li>
      </ul>
    </div>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')


<!-- Javascript Files -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('div');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar-fixed-top').css('background-color', 'white');
       } else {
          $('.navbar-fixed-top').css('background-color', 'transparent');
       }

      $('.bigh1').css({
          'margin-top' : -($(this).scrollTop()/3)+40+"px"
       }); 

   });
 });
</script>

<script>
$(document).ready(function(){

    $('.down').click(function(){
    var y = $(window).scrollTop(); 
    $("html, body").animate({ scrollTop: 580 - y }, 600);
    });

    $(window).scroll(function(){

      if($(window).scrollTop() == 0){

        $('.down').fadeIn();
      }
      else{

        $('.down').fadeOut();
      }
    });
});

</script>
<script>

var words = ['CLASSY','STYLISH','ELEGANT','EFFECTIVE','MODERN','ARTISTIC','SMART'];

for (var i = 1; i < 100; i++) {
    (function(i){

      window.setTimeout(function(){
         document.getElementById('change').innerHTML = words[i%7];
      }, i * 2000);

    }(i));



}


</script>
</body>
</html>