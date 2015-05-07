<?php 
	class UserTableSeeder extends Seeder{
	/**
	*	Fill db with user(s)
	*
	*	@return void
	*/
		public function run(){
			DB::table('users')->delete();

			$user1           = new User();
			$user1->username = "admin";
			$user1->email    = "admin@mail.com";
			$user1->password = $_ENV['DEFAULT_USER_PASS'];
			$user1->save();

			$user2           = new User();
			$user2->username = 'guest';
			$user2->email    = 'guest@mail.com';
			$user2->password = $_ENV['DEFAULT_USER_PASS'];
			$user2->save();
		}
	}
	
 ?>