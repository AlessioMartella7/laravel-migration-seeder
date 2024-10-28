<?php

namespace Database\Seeders;

use App\Models\DelayedTrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DelayedTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delayedTrains =[
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

        foreach ($delayedTrains as $delayedTrain) {
            $newDelayedTrain = new DelayedTrain();
            $newDelayedTrain->company = $delayedTrain['company'];
            $newDelayedTrain->from = $delayedTrain['from'];
            $newDelayedTrain->to = $delayedTrain['to'];
            $newDelayedTrain->train_code = $delayedTrain['train_code'];
            $newDelayedTrain->departure = $delayedTrain['departure'];
            $newDelayedTrain->arrival = $delayedTrain['arrival'];
            $newDelayedTrain->carriage_number = $delayedTrain['carriage_number'];
            $newDelayedTrain->save();
        }
    }
}


