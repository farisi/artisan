<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertiseArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expertise_artisans', function (Blueprint $table) {
            $table->unsignedBigInteger('expertise_id');
            $table->unsignedBigInteger('artisan_id');
            $table->timestamps();

            $table->foreign('expertise_id')->references('id')->on('expertises');
            $table->foreign('artisan_id')->references('id')->on('artisans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expertise_artisans');
    }
}
