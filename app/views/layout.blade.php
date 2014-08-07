<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--If viewing post, title is set to name of post-->
    @if(Request::is('blog/show/*'))
    <title>Gabe Roeloffs | {{$post->title}}</title>
    @else
    <title>Gabe Roeloffs | Blog</title>
    @endif
    <!-- CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../css/prism.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.1/styles/default.min.css">


    <!--JS-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../ckeditor/ckeditor.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53dd0fd233906e4b"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.1/highlight.min.js"></script>
    
    </script>

</head>
    
<body>
<nav class="navbar navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Gabe Roeloffs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@index') }}">Blog</a></li>
        <li><a href="http://github.com/gdroel">Github</a></li>
        <li><a href="http://twitter.com/gaberoeloffs">Twitter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')

<div class="col-md-12" id="footer">
<a class="white" href="#">&copy 2014 Gabe Roeloffs</a> | <a href="http://twitter.com/gaberoeloffs" class="white">Twitter</a> | <a href="http://github.com/gdroel" class="white">Github</a><a href="http://github.com/gdroel/gabesblog" class="pull-right white">Fork this site on Github</a>
</div>

<script>hljs.initHighlightingOnLoad();</script>

</body>

</html>