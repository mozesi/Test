<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 5; $i++) {
            User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' =>"12345",
            ]);
        }
    }
}
