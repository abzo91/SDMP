<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentsRowToVerifiedMisroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('verified_misroutes', function (Blueprint $table) {
            $table->MediumText('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('verified_misroutes', function (Blueprint $table) {
            $table->dropColumn('comments');
        });
    }
}
