<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
// § includo il model 'Train'
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $faker->sentence(3);
            $train->arrival_station = $faker->sentence(3);
            $train->departure_time = $faker->time();

            $arrivalTime = $faker->time();
            if (!$train->departure_time > $arrivalTime) {
                $train->arrival_time = $arrivalTime;
            }

            $train->train_code = $faker->randomNumber(5, true);
            $train->number_of_carriages = $faker->numberBetween(2, 13);
            $train->in_time = $faker->numberBetween(0, 1);
            $train->is_deleted = $faker->numberBetween(0, 1);

            $departureDate = $faker->date();
            if ($departureDate >= date('Y-m-d')) {
                $train->departure_date = $departureDate;
            }
        }
    }
}
