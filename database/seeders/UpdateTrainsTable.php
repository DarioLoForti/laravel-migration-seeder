<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;
use DataTime;

use App\Models\Train;

class UpdateTrainsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $today = new DateTime();

        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->arrival_time = $faker->dateTimeBetween($today, '+10 days');
            $new_train->train_code = $faker->numberBetween(1, 999999);
            $new_train->number_carriages = $faker->numberBetween(1, 10);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            if ($i < 2) {
                $new_train->departure_time = date('Y-m-d h:i:s');
            } else {
                $new_train->departure_time = $faker->dateTimeBetween($today, '+10 days');
            }

            $new_train->save();
        }
    }
}
