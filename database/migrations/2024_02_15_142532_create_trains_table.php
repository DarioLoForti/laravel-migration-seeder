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
            $table->string('agency', 150);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->float('departure_time', 4, 2);
            $table->float('arrival_time', 4, 2);
            $table->tinyInteger('train_code')->unsigned();
            $table->tinyInteger('number_carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('deleted');
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
