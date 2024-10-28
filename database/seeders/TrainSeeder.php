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
        for ($i=0; $i <50; $i++) {

        $newTrain = new Train();
        $newTrain->company = $faker->company();
        $newTrain->date = $faker->date();
        $newTrain->from = $faker->city();
        $newTrain->to = $faker->city();
        $newTrain->train_code = strtoupper($faker->randomLetter()) . strtoupper($faker->randomLetter()) . $faker->randomNumber(4, true);
        $newTrain->departure = $faker->time();
        $newTrain->arrival = $faker->time();
        $newTrain->carriage_number = $faker->randomNumber(2, false);
        $newTrain->on_time = $faker->boolean();
        $newTrain->canceled = $faker->boolean();
        $newTrain->save();
        }
    }
}


// $table->id();
// $table->string('company',100);
// $table->string('from', 100);
// $table->string('to', 100);
// $table->string('train_code', 50);
// $table->time('departure');
// $table->time('arrival');
// $table->tinyInteger('carriage_number')->unsigned();
// $table->boolean('on_time')->default(true);
// $table->boolean('canceled')->default(false);
