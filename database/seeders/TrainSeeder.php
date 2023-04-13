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
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {

            $companies = ['Trenitalia', 'Italo', 'Frecciarossa', 'Trenord', 'Intercity'];

            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_date = $faker->dateTimeBetween('now', '+30 days');
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('??-#######');
            $new_train->price = $faker->randomFloat(1, 3, 999);
            $new_train->carriage = $faker->numberBetween(3, 12);
            $new_train->on_time = $faker->randomElement([0, 1]);
            $new_train->canceled = $faker->randomElement([0, 1]);

            $new_train->save();
        }
    }
}
