<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20 ; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->name = $faker->name;
            $newPassenger->surname = $faker->unique()->name;
            $newPassenger->age = $faker->numberBetween(3, 110);
            $newPassenger->save();
        }
    }
}
