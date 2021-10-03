<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sento_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('file')->nullable();
            $table->string('sento_name', 20)->nullable();
            $table->char('gender', 7)->nullable();
            $table->char('birth_year', 4)->nullable();
            $table->char('birth_month', 2)->nullable();
            $table->char('birth_day', 2)->nullable();
            $table->char('carrier_year', 4)->nullable();
            $table->char('carrier_month', 2)->nullable();
            $table->string('home_sento', 30)->nullable();
            $table->string('went_to_go_sento', 30)->nullable();
            $table->string('profile', 65)->nullable();
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
        Schema::dropIfExists('sento_users');
    }
}
