<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('lastname')->nullable();
            $table->boolean('restricted')->nullable();
            $table->integer('delayed_returns')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('users','lastname');
        Schema::dropColumns('users','restricted');
        Schema::dropColumns('users','delayed_returns');
    }
}
