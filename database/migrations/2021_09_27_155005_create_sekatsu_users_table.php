<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekatsuUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekatsu_users', function (Blueprint $table) {
            $table->id();
            $table->string('visit_name', 100)->nullable();
            $table->date('visit_date')->nullable();
            $table->string('sekatsu_comment', 150)->nullable();
            $table->tinyInteger('visit_temperature_men')->nullable();
            $table->tinyInteger('visit_temperature_woman')->nullable();
            $table->string('file', 300)->nullable();
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
        Schema::dropIfExists('sekatsu_users');
    }
}
