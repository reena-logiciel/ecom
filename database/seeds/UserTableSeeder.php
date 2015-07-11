<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 0; $i<=4; $i++) {
	        $currDate	=	date('Y-m-d H:i:s');
	        DB::table('users')->insert([
	            'name' => str_random(10),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	            'created_at' => $currDate,
				'updated_at' => $currDate,
	        ]);
    	}
    }
}
