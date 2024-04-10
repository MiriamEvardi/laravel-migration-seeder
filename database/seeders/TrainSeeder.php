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
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();

            $newTrain->Azienda = $faker->company();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Giorno_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->randomNumber(4, true);
            $newTrain->Numero_Carrozze = $faker->randomDigit();
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();


            $newTrain->save();
        }
    }
}
