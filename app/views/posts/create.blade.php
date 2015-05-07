@extends('layouts.master')

@section('content')
	{{ Form::open(array('action' => array('PostsController@store'), 'method' => 'POST')) }}
		{{ Form::label('title', 'Title') }}
		<br>
		{{ Form::text('title') }}
		<br>
		{{ Form::label('body', 'Body') }}
		<br>
		{{ Form::textarea('body') }}
		<br>
		{{  Form::submit('Submit') }}
		{{ Form::hidden('userID', Auth::user()->id)}}
	{{ Form::close() }}
@stop