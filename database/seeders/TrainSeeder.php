<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();

            $newTrain->company = $faker->company();
            $newTrain->departure_time = $faker->time();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->carriage_number = $faker->randomDigit();
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();


            $newTrain->save();
        }
    }
}
