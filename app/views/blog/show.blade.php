@extends('layout')

@section('content')
<div class="jumbotron"></div>
<div class="container movedownless">
	<div class="col-md-10 col-md-offset-1 show">
		<div class="row">
		  <h1 class="title">{{ $post->title }}</h1>
	      <small class="gray"><span class="glyphicon glyphicon-time"></span> {{ $post->updated_at->format('g:ia M j') }} | by <a rel="author" href="https://plus.google.com/u/0/+GabeRoeloffs?rel=author">Gabe Roeloffs</a></small>
	      <hr>
		  <p class="body big">{{ $post->body }}</p>

	      <div class="addthis_sharing_toolbox"></div>
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
</div>
@stop
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53dd0fd233906e4b"></script>
