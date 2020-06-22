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
            $table->string('stage')->nullable();
            $table->string('investor_role')->nullable();
            $table->double('previous_raising_amount')->nullable();
            $table->double('raising_amount')->nullable();
            $table->double('min_investor_amount')->nullable();
            $table->text('short_description')->nullable();
            $table->text('company_description')->nullable();
            $table->text('market_description')->nullable();
            $table->text('proof_description')->nullable();
            $table->text('goals_description')->nullable();
            $table->text('team_description')->nullable();
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
