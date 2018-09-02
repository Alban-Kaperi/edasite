<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = \Faker\Factory::create();
        for($i = 0; $i < 100; $i++) {
        App\Product::create([
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 12, $variableNbWords = true),
            'imagePath' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
            'price'=> $faker->randomNumber(2)
        ]);
        }  

        
        
    }
}
