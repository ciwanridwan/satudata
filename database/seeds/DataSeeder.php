<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

    	for($i = 1; $i <= 50; $i++){

    		DB::table('data')->insert([
    			'judul' => $faker->name,
    			'isi' => $faker->text,
    			'file' => $faker->safeColorName . '.xlsx',
    			'ketenagakerjaan_id' => '1',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		]);
    	}
    }
}
