@extends('layout')
@section('content')
<div class="jumbotron">
<h1 class="centered bigh1">Blog</h1> 
</div>

<div class="container" id="postscontainer">
    <div class="col-md-8">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12" id="post">
                <h2>{{ $post->title }}</h2>
                <p class="gray"><span class="glyphicon glyphicon-time"></span> {{ $post->updated_at->format('g:ia M j') }}</p>
                <p>{{ Str::words($post->body, 200) }}</p>
                <p><a href="{{ action('HomeController@show', $post->slug) }}">Read More →</a></p>
                </div>
                <br>
            @endforeach
           {{ $posts->links(); }}
        </div>
    </div>
    <div class="col-md-4 hidden-sm">
        
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">About Me</div>
          <div class="panel-body">
            <p>Computer Enthusiast. Minimalist. I blog about PHP, Laravel, and Web Development in general. Don't forget to check out my <a class="serif" href="http://github.com/gdroel">Github.</a> </p>
          </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">All Posts</div>
          <div class="panel-body">
            @foreach($posts as $post)
            <li><a href="{{ action('HomeController@show', $post->slug) }}">{{ $post->title }}</a></li>
            @endforeach
          </div>
        </div>
        </div>

        <div class="row moveright">
        {{ Form::open(array(null,'action'=>'HomeController@postSearch')) }}
        {{ Form::text('search', null, array('class'=>'form-control','placeholder'=>'Search')) }}
        {{ Form::close() }}
        </div>
        <br>
        <div class="row moveright">
        <a class="twitter-timeline" href="https://twitter.com/gaberoeloffs" data-widget-id="495294464449982464">Tweets by @gaberoeloffs</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        

        <div class="row">
            <?php /*<a class="twitter-timeline" href="https://twitter.com/gaberoeloffs" data-widget-id="495294464449982464">Tweets by @gaberoeloffs</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    */?>

        </div>

    </div>
</div>
<script src="../js/style.js"></script>
@stop