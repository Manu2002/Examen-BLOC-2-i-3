<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ganga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangas', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('title');
            $table->string('description');
            $table->string('URL');
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('points');
            $table->string('img');
            $table->float('price', 10, 2);
            $table->float('discount_price', 10, 2)->nullable();
            $table->boolean('available');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gangas');
    }

}
