<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('company',100);
            $table->string('from', 100);
            $table->string('to', 100);
            $table->string('train_code', 50);
            $table->time('departure');
            $table->time('arrival');
            $table->tinyInteger('carriage_number')->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
