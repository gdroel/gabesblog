
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gabe Roeloffs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Average+Sans|Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      <a class="navbar-brand" href="#">GABE ROELOFFS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://github.com/gdroel"><i class="fa fa-github fa-lg"></i></a></li>
        <li><a href="http://twitter.com/gaberoeloffs"><i class="fa fa-twitter fa-lg"></i></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
<h1 class="centered bigh1">BLOG</h1>
<p>A collection of my musings</p>

</div>
<div class="container-fluid movedown">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12" id="post">
                <h2 class="title">{{ $post->title }}</h2>
                <p class="gray"><span class="glyphicon glyphicon-time"></span> {{ $post->updated_at->format('g:ia M j') }}</p>
                <p class="body">{{ Str::words($post->body, 200) }}</p>
                <p><a href="{{ action('HomeController@show', $post->slug) }}">Read More →</a></p>
                </div>
                <br>
            @endforeach
           {{ $posts->links(); }}
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.jumbotron');
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
  </body>
</html>
