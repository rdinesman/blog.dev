@extends("layouts.master")

@section("content")
	@foreach($posts as $post)
		<div>
			<a class="postTitle" href="{{{ action('PostsController@show', [$post['slug']]) }}}">{{{$post->title}}}</a>
			<p class="postInfo">Written by {{{ $post->user->username }}}</p>
			<p class="postInfo">Created: {{{ $post->created_at }}}</p>
			@if(Auth::check() && Auth::id() == $post->user_id)
				<a href="{{{ action('PostsController@edit', [$post['slug']]) }}}">Edit</a>
			@endif

			<p class="postBody">{{{$post['body']}}}</p>

			<br>
			<br>
		</div>
	@endforeach
	{{$posts->links()}}
	@if(Auth::check())
		<a href="{{{action('PostsController@create')}}}">New Post</a>
	@endif
@stop