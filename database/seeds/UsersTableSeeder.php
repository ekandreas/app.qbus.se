<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for($i=0;$i<500;$i++) {
	    	$faker = Faker\Factory::create('sv_SE');
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => bcrypt('secret'),
	            'updated_at' => $faker->dateTime,
	            'created_at' => $faker->dateTime,
	        ]);
    	}

    }
}
