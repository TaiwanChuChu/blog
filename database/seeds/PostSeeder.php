<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 100; $i++) { 
	        DB::table('posts')->insert([
	            'Topic' => Str::random(10),
	            'Content' => Str::random(10).'@gmail.com',
	            'user_id' => '1',
	            'created_at'=>date('Y-m-d H:i:s'),
	            'updated_at'=>date('Y-m-d H:i:s'),
	        ]);
        }
    }
}
