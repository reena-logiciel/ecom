<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<=19; $i++) {
	        $currDate	=	date('Y-m-d H:i:s');
	        DB::table('products')->insert([
	            'name' => str_random(10),
	            'created_at' => $currDate,
				'updated_at' => $currDate,
	        ]);
    	}
    }
}
