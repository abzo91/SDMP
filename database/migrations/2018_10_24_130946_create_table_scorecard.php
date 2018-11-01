<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableScorecard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecard', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('year');
            $table->string('month');
            $table->string('week');
            $table->integer('totalPoints');
            $table->integer('pointsEntered');
            $table->string('reason_comment');
            $table->string('category');
            $table->string('expireDate');
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
        Schema::dropIfExists('scorecard');
    }
}
