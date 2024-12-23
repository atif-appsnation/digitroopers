<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('packagetype')->nullable();
            $table->string('slogan')->nullable();
            $table->string('price')->nullable();
            $table->string('duration')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('popular')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('pricings');
    }
}
