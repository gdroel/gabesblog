@extends('layout')

@section('content')
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
                <small ><span class="glyphicon glyphicon-time"></span> {{ $post->updated_at->format('g:ia M j') }}</small>
                <p class="body">{{ Str::words($post->body, 200) }}</p>
                <p><a href="{{ action('HomeController@show', $post->slug) }}">Read More →</a></p>
                </div>
                <br>
            @endforeach
           {{ $posts->links(); }}
        </div>
    </div>
</div>
@stop