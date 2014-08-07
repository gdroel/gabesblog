@extends('layout')

@section('content')

<div class="jumbotron"></div>

<div class="col-md-8 col-md-offset-2" id="create">
{{ Form::open(array('action'=>'HomeController@doEdit')) }}

{{ Form::hidden('slug', $post->slug) }}
{{ Form::text('title',$post->title,array('class'=>'form-control','placeholder'=>'Title')) }}

<br>

<textarea name="body" id="body" value="{{ $post->body }}"></textarea>
<script>
    CKEDITOR.replace( 'body' );
</script>
{{ Form::submit('save') }}
{{ Form::close() }}
</div>



@stop