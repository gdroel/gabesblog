@extends('layout')

@section('content')
<div class="jumbotron">
</div>

<div class="container">
	<div class="col-md-8">
		<div class="row">
			<div class="show">
			<h2>{{ $post->title }}</h2>
      <p class="gray"><span class="glyphicon glyphicon-time"></span> {{ $post->updated_at->format('g:ia M j') }} | by <a rel="author" href="https://plus.google.com/u/0/+GabeRoeloffs?rel=author">Gabe Roeloffs</a></p>
      <hr>
			<p>{{ $post->body }}</p>
      <div class="addthis_sharing_toolbox"></div>
			</div>
		</div>

		<div class="row" id="disqus">
			 <div id="disqus_thread"></div>
    		<script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
       		 var disqus_shortname = 'gaberoeloffs'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
		</div>
	</div>
	<div class="col-sm-4">
		<div class="row">
        <div class="panel panel-default show-panel">
        <div class="panel-heading">About Gabe</div>
          <div class="panel-body">
            <p>Computer Enthusiast. Minimalist. I blog about PHP, Laravel, and Web Development in general. Don't forget to <a class="serif" href="http://twitter.com/gaberoeloffs">hit me up</a> on Twitter.</p>
          </div>
        </div>
        </div>

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
    
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">Share This</div>
          <div class="panel-body">
         <div class="addthis_sharing_toolbox"></div>
          </div>
        </div>
        </div>

        <div class="row moveright">
        <a class="twitter-timeline" href="https://twitter.com/gaberoeloffs" data-widget-id="495294464449982464">Tweets by @gaberoeloffs</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>

	</div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53dd0fd233906e4b"></script>
@stop