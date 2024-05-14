<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->company = $faker->words(1, true);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->ean8();
            $new_train->slug = $faker->numerify('slug-######');
            $new_train->carriages_number = $faker->randomDigit();
            $new_train->is_in_time = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}