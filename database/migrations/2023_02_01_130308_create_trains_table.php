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
            $table-> string('name',32);
            $table-> string('wagon',32);
            $table-> string('passengers',64);
            $table-> string('typology');
            $table-> integer('seats')-> unsigned();
            $table-> string('classes');
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
