<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LudiaToTrieda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ludia_to_trieda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ludia_id')->constrained('ludias');
            $table->foreignId('trieda_id')->constrained('triedas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
/*    public function down()
    {
        Schema::create('ludia_to_trieda', function (Blueprint $table) {
            //
        });
    }*/
}
