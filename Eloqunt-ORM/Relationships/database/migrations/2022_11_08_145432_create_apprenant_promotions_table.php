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
        Schema::create('apprenant_promotions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('promotions_id');
            $table->unsignedInteger('apprenant_id');
            $table->foreign('promotions_id')->references('id')->on('promotions')->onDelete('cascade');
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');


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
        Schema::dropIfExists('apprenant_promotions');
    }
};
