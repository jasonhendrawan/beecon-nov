<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsertesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        for($i=0; $i <= 20 ; $i++){
            DB::table('usertes')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->name,
                'studentId' => $faker->randomNumber(5, true),
                'email' => $faker->email(),
                'password' => $faker->randomNumber(8, true),
                'gender' => $faker->randomElement(['male', 'female']),
                'major' => $faker->randomElement(['comp sci', 'GBM', 'DKV']),
                'region' => $faker->randomElement(['Alam Sutera', 'Kemanggisan', 'Malang', 'Bandung', 'Bekasi', 'Senayan']),
                'image' => $faker->imageUrl($width = 345, $height = 485, 'cats')

            ]);
        } 

    }
}
