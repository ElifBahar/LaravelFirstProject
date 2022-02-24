<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAboutsTable extends Migration
{

    public function up()
    {
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_des');
            $table->text('long_des');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('home_abouts');
    }
}
