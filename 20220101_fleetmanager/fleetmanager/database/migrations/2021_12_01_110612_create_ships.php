<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->integer('manufacturer_id')->nullable()->unsigned();
            $table->string('name')->nullable();
            $table->string('built')->nullable();
            $table->string('age')->nullable();
            $table->string('length')->nullable();
            $table->string('height')->nullable();
            $table->string('color')->nullable();
            $table->float('brt')->default(0.0);
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
        Schema::dropIfExists('ships');
    }
}
