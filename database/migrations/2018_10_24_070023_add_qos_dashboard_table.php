<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQosDashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qos_dashboards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('created_by_id');
            $table->string('category');
            $table->string('title');
            $table->integer('agent_id');
            $table->string('comments', 5000);
            $table->string('date_of_creation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qos_dashboards');
    }
}
