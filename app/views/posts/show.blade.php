@extends("layouts.master")

@section("content")
		<div>
			<p class="postTitle">{{{$post['title']}}}</p>
			<p class="postInfo">Written by {{{ $author }}}</p>
			<p class="postInfo">Created: {{{ $post['created_at'] }}}</p>
			<p class="postInfo">Last Updated: {{{ $post['updated_at'] }}}</p>
			<p class="postBody">{{{$post['body']}}}</p>

			<br>
			<br>
		</div>
		<br>
		<a href="{{{action('PostsController@index')}}}">Back to Post Index</a>
@stop