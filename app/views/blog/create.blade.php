@extends('layout')

@section('content')

<div class="jumbotron"></div>

<div class="col-md-8 col-md-offset-2 down" id="create">
{{ Form::open(array('action'=>'HomeController@doCreate')) }}
{{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'title')) }}

<br>

<textarea name="body" id="body" class="form-control">
  
</textarea>
<script>
    CKEDITOR.replace('body');
</script>
{{ Form::submit('save') }}
{{ Form::close() }}
</div>


@stop