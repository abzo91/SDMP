<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMisroutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misroutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IncidentNumber');
            $table->integer('NbOfMisroutes');
            $table->string('tier1');
            $table->string('tier2');
            $table->string('tier3');
            $table->string('MisroutedBy');
            $table->string('MisroutedTeam');
            $table->string('MisroutedDate');
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
        Schema::dropIfExists('misroutes');    
    }
}
