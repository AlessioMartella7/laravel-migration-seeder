<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CanceledTrain;
use App\Models\DelayedTrain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PassengerSeeder::class,
            TrainSeeder::class,
            DelayedTrainSeeder::class,
            CanceledTrainSeeder::class,
        ]);
    }
}
