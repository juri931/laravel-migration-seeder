<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->company = 'Trenitalia';
        $new_train->departure_station = 'Milano';
        $new_train->arrival_station = 'Roma';
        $new_train->departure_time = '13:30';
        $new_train->arrival_time = '16:50';
        $new_train->train_code = 'AR234';
        $new_train->slug = 'slug-di-prova';
        $new_train->carriages_number = '6';
        $new_train->is_in_time;
        $new_train->is_cancelled;
        $new_train->save();
    }
}