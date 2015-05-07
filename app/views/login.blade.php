@extends('layouts.master')

@section('content')
	{{ Form::open(array('action' => array('LoginController@checkLogin'), 'method' => 'POST')) }}
		{{ Form::label('email', 'Email') }}
		<br>
		{{ Form::text('email', $email) }}
		<br>
		{{ Form::label('password', 'Password') }}
		<br>
		{{ Form::password('password') }}
		<br>
		{{ Form::submit('Log In') }}
	{{ Form::close() }}
@stop