@extends("layouts.master")

@section("content")
	{{ Form::open(array('action' => array('PostsController@update'), 'method' => 'PUT')) }}

		{{ Form::hidden('id', $post['id']) }}
		<br>
		{{ Form::label('title', 'Title') }}
		<br>
		{{ Form::text('title', $post['title']) }}
		<br>

		{{ Form::label('body', 'Body') }}
		<br>
		{{ Form::textarea('body', $post['body']) }}
		<br>
		{{  Form::submit('Submit', ['id' => 'formSubmit']) }}
		{{  Form::submit('Cancel', ['id' => 'formCancel', 'formaction' => URL::previous()]) }}

	{{ Form::close() }}
		{{-- <button id="cancelUpdate" formaction="{{{ URL::previous() }}}">Cancel</button> --}}
@stop