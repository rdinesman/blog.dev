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
			$user1->password = "password";
			$user1->save();

			$user2           = new User();
			$user2->username = 'guest';
			$user2->email    = 'guest@mail.com';
			$user2->password = 'password';
			$user2->save();
		}
	}
	
 ?>