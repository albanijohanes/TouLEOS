<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porters', function (Blueprint $table) {
            $table->id();
            $table->foreign('role_id')->references('role')->on('users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('permanent_token', 64)->unique()->nullable();
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
        Schema::dropIfExists('porters');
    }
}
