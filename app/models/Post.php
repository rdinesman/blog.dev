<?php 
	class Post extends BaseModel
	{
	    protected $table = 'posts';
		public function user()
		{
		    return $this->belongsTo('User');
		}
	}

 ?>