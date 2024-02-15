<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;

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
        for ($i = 0; $i > 20; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->numberFloat(2, 1, 24);
            $new_train->arrival_time = $faker->numberFloat(2, 1, 24);
            $new_train->train_code = $faker->numberBetween(1, 999999);
            $new_train->number_carriages = $faker->numberBetween(1, 10);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
