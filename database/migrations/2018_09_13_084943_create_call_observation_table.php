<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallObservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_observations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('observer_id');
            $table->integer('observed_agent_id');
            $table->integer('silenceradio');
            $table->integer('plazzaradio');
            $table->integer('techskills');
            $table->integer('shiftradio');
            $table->integer('ticketradio');
            $table->integer('greetings1');
            $table->integer('greetings2');
            $table->integer('greetings3');
            $table->integer('toneradio');
            $table->integer('attituderadio');
            $table->integer('holdradio');
            $table->integer('thankedradio');
            $table->string('comments', 5000);
            $table->string('date_observed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_observations');
    }
}
