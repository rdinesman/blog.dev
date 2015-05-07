<?php 
	class PostsTableSeeder extends Seeder{
		/**
	*	Fill db with post(s)
	*
	*	@return void
	*/
	public function run(){
			$faker = Faker\Factory::create();
			DB::table('posts')->delete();

			for($i = 0; $i < 101; $i++){
				$title         = implode($faker->words(rand(5,7)), ' ');
				$post          = new Post();
				$post->title   = $title;
				$post->body    = $faker->text();
				$post->slug    = Str::slug($title);
				$post->user_id = rand(1, 2);
				$post->save();
			}
		}
	}
 ?>