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
  <link href="../css/prism.css" rel="stylesheet" />
  @if(Request::is('/'))
    <link rel="stylesheet" href="../../css/home.css">
  @else
    <link rel="stylesheet" href="../../css/blog.css">
  @endif
  <link rel="stylesheet" href="../../css/navbar.css">


  <!--FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Average+Sans|Fjalla+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


      <script src="../../ckeditor/ckeditor.js"></script>
</head>
    
<body>
<nav class="navbar navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">GABE ROELOFFS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('blog') }}" class="nav-link">BLOG</a></li>
        <li><a href="http://github.com/gdroel"><i class="fa fa-github fa-lg"></i></a></li>
        <li><a href="http://twitter.com/gaberoeloffs"><i class="fa fa-twitter fa-lg"></i></a></li>

      </ul>
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

</body>
</html>