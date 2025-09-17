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
        Schema::create('flight_class_facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_class_id')->references('id')->on('flight_classes')->onDelete('cascade');
            $table->foreignId('facility_id')->references('id')->on('facilities')->on('flight_classes')->onDelete('cascade');
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
        Schema::dropIfExists('flight_class_facility');
    }
};
