@extends('layout')

@section('content')
<div class="bg1">
      <div class="jumbotron">
        <h1>I MAKE CLASSY WEBSITES.</h1>
        <br>
          <a class="down"><i class="fa fa-arrow-circle-o-down fa-4x red"></i></a>
      </div>
    </div>
    <div class="bg2">
      <h1 class="heading red">WORK</h1>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
             <img class="img-responsive" src="../images/wellsio.png">
             <h3 class="caption"><a href="http://wellsio.com">WELLSIO</a></h3>
             <p class="caption">A crowdsourced database, for water wells.</p>
          </div>
          <div class="col-sm-4">
              <img class="img-responsive" src="../images/rhetoric.png">
              <h3 class="caption"><a href="http://rhetoricdebate.com">RHETORIC DEBATE CLUB</a></h3>
              <p class="caption">Reinventing the way debaters interact online.</p>
          </div>
          <div class="col-sm-4">
            <img class="img-responsive" src="../images/stars.png">
            <h3 class="caption"><a href="http://stars.gaberoeloffs.com">GOLD STARS</a></h3>
            <p class="caption">A system for giving out virtual gold stars.</p>
          </div>
        </div>
      </div>
    </div>  
    <div class="bg3">
      <div class="container">
      <div class="col-sm-8 about">
        <h2 class="heading">ABOUT ME</h2>
        <p class="big">As you may have guessed by coming to this website, this site is about me. Yep. I bought a domain name,
          and put this site on it. So now you're here. Congratulations. And you're probably wondering, who the heck is this guy, and what the heck does he do? Well, you have scrolled to the right spot in the page because these are all questions about me. So who the heck am I? I'm a 15 year old web developer, who loves chocolate ice cream, and enjoys a competitive game of ping pong. Also foosball. I'm pretty dang good at foosball. And what the heck do I do? Well that's a good question. Most people don't know what the HTML means (Hyper Text Markup Language by the way), or what the difference is between Java and Javascript. Which is the reason I'm here. I know how to work with this crazy tech lingo, and make it into products. I love building, crafting, and deploying websites, in my constant endeavor to make the world wide web a little better. I enjoy working with code, and fixing things that need to be solved. If you want to get in touch, be sure to hit me up on <a href="http://twitter.com/gaberoeloffs">Twitter</a>.
          </p>
      </div>
      <div class="col-sm-4 info">
        <h2 class="heading white">Core Technologies</h2>
        <hr>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
          <p class="progress-text">PHP</p>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
          <p class="progress-text">HTML</p>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
          <p class="progress-text">CSS</p>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
          <p class="progress-text">Javascript</p>
        </div>
      </div>
       <h2 class="heading white">Frameworks</h2>
       <hr>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
          <p class="progress-text">Laravel</p>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
          <p class="progress-text">Bootstrap</p>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <p class="progress-text">Jquery</p>
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="bg4">
    <h1 class="heading red">CONTACT</h1>
    <div class="container">
    {{ Form::open(array('action'=>'HomeController@email')) }}
    <div class="col-md-6">
       {{ Form::text('name',null,array('class'=>'form-control','placeholder'=>'Your Name'))}}
    </div>
    <div class="col-md-6">
       {{ Form::text('email',null,array('class'=>'form-control','placeholder'=>'Your Email'))}}
    </div>
    <div class="col-md-12">
    <br>
    {{ Form::text('subject',null,array('class'=>'form-control','placeholder'=>'Subject'))}}
    <br>
    {{ Form::textarea('body',null,array('class'=>'form-control','placeholder'=>'Write something interesting.'))}}
    <br>
    {{ Form::submit('Send',array('class'=>'btn btn-danger pull-right'))}}
    {{ Form::close() }}
    </div>
    </div>
    <br>
   </div>
@stop