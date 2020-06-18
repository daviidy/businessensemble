<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_user', function (Blueprint $table) {
            $table->id();
            $table->integer('annonce_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('investing')->default('0');
            $table->boolean('interest')->default('0');
            $table->boolean('saved')->default('0');
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
        Schema::dropIfExists('annonce_user');
    }
}
