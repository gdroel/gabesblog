@extends('layout')

@section('content')
<div class="bg1">
      <div class="jumbotron">
        <h1>I MAKE <span id="change" class="red">CLASSY</span> WEBSITES.</h1>
        <br>
          <a class="down"><i class="fa fa-arrow-circle-o-down fa-4x"></i></a>
      </div>
</div>
   <div class="bg2">
      <h1 class="heading red">MY WORK</h1>
      <div class="container">
        <div class="row my-work">
          <div class="col-md-4">
            <div class="card">
             <img class="img-responsive" src="../images/wellsio.png">
             <h3 class="caption"><a href="http://wellsio.com">WELLSIO</a></h3>
             <p class="caption">A crowdsourced database, for water wells. Owners upload well info.</p>
           </div>
          </div>
          <div class="col-md-4">
              <div class="card">
              <img class="img-responsive" src="../images/rhetoric.png">
              <h3 class="caption"><a href="http://rhetoricdebate.com">RHETORIC DEBATE CLUB</a></h3>
              <p class="caption">Reinventing the way debaters interact online.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
            <img class="img-responsive" src="../images/stoaca.png">
            <h3 class="caption"><a href="http://stoaca.org">STOA CALIFORNIA</a></h3>
            <p class="caption">A new information hub for all things debate.</p>
          </div>
          </div>
        </div>
        <div class="row my-work">
            <div class="col-md-4 col-md-offset-2">
              <div class="card">
             <img class="img-responsive" src="../images/stars.png">
             <h3 class="caption"><a href="http://stars.gaberoeloffs.com">ALL THAT GLITTERS IS GOLD</a></h3>
             <p class="caption">A personal project I made, because I wanted to give people gold stars.</p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="card">
             <img class="img-responsive" src="../images/sparclean.png">
             <h3 class="caption"><a href="http://sparcleanlaundromat.com">SPARCLEAN LAUNDROMAT</a></h3>
             <p class="caption">Website created to drive traffic to a local laundromat.</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="container-fluid bg3">
      <div class="row">
      <div class="col-md-8 greeting">
        <h2 class="greeting-heading">Hey, I'm Gabe Roeloffs</h2>
        <p>Congratulations on getting here! My name is Gabe Roeloffs, I'm 16, and I make awesome websites. Want to know some stuff about me? Of course you do. (Well, maybe.) Anyway, I'm passionate about the ocean, tennis, and of course, software development. I'm 5'8, run an 11 minute mile (don't make fun of me) and my favorite sports team is the Arizona Diamondbacks. If you want to work with me on your next software project, don't hesitate to contact me below.</p>
      </div>
      <div class="col-md-4 selfie-box">
        <img class="selfie" src="images/profile.png">
      </div>
    </div>
    </div> 
{{--     <div class="skills-bg container-fluid">
      <h1 class="heading red ">ABOUT ME</h1>
      <div class="col-md-6">
        <h2 class="heading red">Stats</h2>
        <p>Height: 5'9</p>
      
        <p>Favorite Ice Cream Brand: Ben & Jerry's</p>
        <p>Fastest Running Mile: 12 minutes</p>


      </div>
      <div class="col-md-6">
      <h2 class="heading">I WORK LIKE A ROCKSTAR WITH THESE TECHNOLOGIES</h2>
      <hr>
      
        <div class="row best-skills">
          
          <div class="col-sm-3"> 
          <div class="skill">
             <h3 class="skill-caption">Laravel</h3>
          </div>
          </div>
          <div class="col-sm-3"> 
            <div class="skill">
              <h3 class="skill-caption">PHP</h3>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="skill">
              <h3 class="skill-caption">HTML</h3>  
            </div>
          </div>
          <div class="col-sm-3">
            <div class="skill">
              <h3 class="skill-caption">mySQL</h3>  
            </div>
          </div>
       
        </div>
    
      <h2 class="heading">I WORK WELL USING THESE TECHNOLOGIES</h2>
      <hr>
      
        <div class="row best-skills">
          <div class="col-sm-3"> 
          <div class="skill">
             <h3 class="skill-caption">Javascript</h3>
          </div>
          </div>
          <div class="col-sm-3"> 
            <div class="skill">
              <h3 class="skill-caption">jQuery</h3>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="skill">
              <h3 class="skill-caption">CSS</h3>  
            </div>
          </div>
          <div class="col-sm-3">
            <div class="skill">
              <h3 class="skill-caption">Bootstrap</h3>  
            </div>
          </div>
      </div>
    </div>  --}}
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

