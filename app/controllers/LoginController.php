<?php

class LoginController extends BaseController {

	

	// public function __construct()
 //    {
 //        $this->beforeFilter('authUser', array('only' => 'showWelcome'));
 //    }

    public function index(){
    	return View::make('login');
    }

	// get route
	public function login(){
		$data = ['email' => ''];
		if (Input::get('email')){
			$data['email'] = Input::get('email');
		}
		return View::make('login', $data);
	}

	// post route
	public function checkLogin(){
		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/');
		} 
		else {
		    return Redirect::action('LoginController@login', ['email' => $email]);
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

}
