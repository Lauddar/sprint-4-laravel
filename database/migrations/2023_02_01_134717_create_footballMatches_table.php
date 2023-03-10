<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_matches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('league_id');
            $table->unsignedBigInteger('local_team');
            $table->unsignedBigInteger('visiting_team');
            $table->unsignedInteger('local_goals')->nullable();
            $table->unsignedInteger('visiting_goals')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->string('location', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('football_matches');
    }
};
