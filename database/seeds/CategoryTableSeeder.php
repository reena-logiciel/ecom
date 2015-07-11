<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
	        DB::table('categories')->insert([
	            'name' => str_random(10),
	            'status' => 1,
	            'created_at' => $currDate,
				'updated_at' => $currDate,
	        ]);
    	}
    }
}
