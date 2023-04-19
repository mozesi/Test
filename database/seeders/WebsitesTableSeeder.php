<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Website;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 5; $i++) {
            Website::create([
            'name' => 'Website'.$i,
            'url' => $faker->url
            ]);
        }
    }
}
