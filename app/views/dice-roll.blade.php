@extends('layouts.master')

@section('content')
	<p>You rolled a {{{ $roll }}}!</p>
	<p>You guessed {{{ $guess }}}!</p>
	<p>
		You guessed 
		@if($roll != $guess)
			incorrectly!
		@else
			correctly!
		@endif
	</p>
@stop
