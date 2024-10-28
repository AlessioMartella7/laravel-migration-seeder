<?php

namespace Database\Seeders;

use App\Models\CanceledTrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanceledTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $canceledTrains =[
            [
                'company' => 'Trenitalia',
                'from' => 'Roma',
                'to' => 'Milano',
                'train_code' => 'FD5412',
                'departure' => '19:10:46',
                'arrival' => '02:10:10',
                'carriage_number' => '22',

            ],
            [
                'company' => 'Italo',
                'from' => 'Livorno',
                'to' => 'Bologona',
                'train_code' => 'FF5912',
                'departure' => '02:10:46',
                'arrival' => '05:10:19',
                'carriage_number' => '12',

            ],
            [
                'company' => 'Speedotrain',
                'from' => 'Lecce',
                'to' => 'Genova',
                'train_code' => 'AD5282',
                'departure' => '10:10:46',
                'arrival' => '23:30:10',
                'carriage_number' => '28',

            ],
        ];

        foreach ($canceledTrains as $canceledTrain) {
            $newCanceledTrain = CanceledTrain::create($canceledTrain);
        }
    }
}
