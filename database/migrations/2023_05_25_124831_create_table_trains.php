<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->dateTime('departure_time', $precision = 0);
            $table->dateTime('arrival_time', $precision = 0);
            $table->string('destination', 100);
            $table->string('departure', 100);
            $table->string('nr_wagons', 6);
            $table->string('train_code', 10);
            $table->boolean('late');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
