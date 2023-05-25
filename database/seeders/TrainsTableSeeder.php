<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    

    public function run(Faker $faker)
    {
        
        for($i = 0; $i<10; $i++){
            $newTrain = new Train();
            $departureTime = $faker->dateTimeBetween('-1 year', '+1 year');
            $arrivalTime =$faker->dateTimeBetween('-1 year', '+1 year');
            $newTrain->company = $faker-> word();
            $newTrain->departure_time = $departureTime;
            $newTrain->arrival_time = $arrivalTime;
            $newTrain->destination = $faker->city();
            $newTrain->departure = $faker->city();
            $newTrain->nr_wagons = $faker->numberBetween(1, 200);
            $newTrain->train_code = $faker->unique()->regexify('[A-Z0-9]{5}');
            $newTrain->late = $faker->boolean(30); // 30% chance of being late
            $newTrain->cancelled = $faker->boolean(10); // 10% chance of being cancelled
            $newTrain->created_at = now();
            $newTrain->updated_at = now();
            $newTrain -> save();
        }
    }
}
