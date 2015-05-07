<!DOCTYPE html>
<html>
<head>
	<title>Laravel Blog</title>
	<link rel="stylesheet" type="text/css" href="/css/master.css">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="header">
		<span id="headerTitle">The Blog of the Dinesman</span>

		@if(Auth::check())
			<span id='loggedInUser'>Logged In As: {{{ Auth::user()->username }}}</span>
			<a href="{{{ action('LoginController@logout') }}}">Logout</a>
		@else
			<a href="{{{ action('LoginController@login') }}}">Login</a>
		@endif

		<div id='tabContainer'>
			<a href="{{{ action('PortfolioController@portfolio') }}}" class="headerTab port {{{ setActive('portfolio') }}}" value="portfolio">Portfolio</a>
			<a href="{{{ action('ResumeController@resume') }}}" class="headerTab res {{{ setActive('resume') }}}" value="resume">Resume</a>
			<a href="{{{ action('AboutController@about') }}}" class="headerTab abt {{{ setActive('about') }}}" value="about">About</a>
			<a href="{{{ action('PostsController@index') }}}" class="headerTab pst {{{ setActive('posts') }}}" value="posts">Blog</a>
		</div>

	</div>
	<div id="content">
		@yield('content')
	</div>

	<div id="footer">footer</div>
</body>
</html>