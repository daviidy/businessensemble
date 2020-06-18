<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('website')->nullable();
            $table->string('country');
            $table->string('phone');
            $table->string('stage');
            $table->string('investor_role');
            $table->double('previous_raising_amount')->nullable();
            $table->double('raising_amount');
            $table->double('min_investor_amount');
            $table->text('short_description');
            $table->text('company_description');
            $table->text('market_description');
            $table->text('proof_description');
            $table->text('goals_description');
            $table->text('team_description');
            $table->string('logo')->default('image.jpg');
            $table->string('video')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('annonces');
    }
}
