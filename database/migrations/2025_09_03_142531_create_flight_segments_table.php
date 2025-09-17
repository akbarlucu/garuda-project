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
        Schema::create('flight_segments', function (Blueprint $table) {
            $table->id();
            $table->integer('sequence');
            $table->foreignId('flight_id')->constrained()->cascadeOnDelete();
            $table->foreignId('airport_id')->constrained()->cascadeOnDelete();
            $table->time('time');
            $table->softDeletes();
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
        Schema::dropIfExists('flight_segments');
    }
};
