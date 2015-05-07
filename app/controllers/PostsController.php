<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
    {
        $this->beforeFilter('authUser', array('except' => array('index', 'show')));
    }

	public function index()
	{
		$users = [];
		foreach (User::all() as $user) {
			$users[$user['id']] = $user['username'];
		}
		$posts = Post::with('user')->paginate(5);
		$data = ['posts' => $posts];
		return View::make("posts.index")->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("posts.create");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Input::has('title') || !Input::has('body')){
			return Redirect::back()->withInput();
		}

		$title = Input::get('title');

		$post = new Post();
		$post->title = $title;
		$post->body = Input::get('body');
		$post->slug = Str::slug($title);
		$post->user_id = Input::get('userID');
		$post->save();

		return Redirect::action("PostsController@show", array($post->id));

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		if(is_numeric($id)){
			$post = Post::find($id);
		}
		else{
			$slug = $id;
			$post = Post::where('slug', '=', $slug)->first();
		}

		$data = [
			'post' => $post,
			'author' => User::where('id', '=', $post->user_id)->first()->username
		];
		return View::make("posts.show")->with($data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(is_numeric($id)){
			$post = Post::find($id);
		}
		else{
			$slug = $id;
			$post = Post::where('slug', '=', $slug)->first();
			// dd($post);
		}
		$data = [
			'post' => $post
		];
		return View::make("posts.edit")->with($data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		if(!Input::has('title') || !Input::has('body')){
			return Redirect::back()->withInput();
		}

		$id = Input::get('id');

		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->slug = Str::slug(Input::get('title'));
		$post->body = Input::get('body');
		$post->save();

		return Redirect::action("PostsController@show", array($post->id));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Delete the specified resource.";
	}


}
