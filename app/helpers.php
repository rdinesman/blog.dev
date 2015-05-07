<?php 
	function setActive($route, $class = 'activeTab'){
	    return (Request::is($route) || Request::is($route.'\*')) ? $class : '';
	    // return 'test';
	}
 ?>	