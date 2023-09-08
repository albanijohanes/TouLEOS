<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicerequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicerequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('porter_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('order_code')->unique();
            $table->date('order_date');
            $table->time('start_time')->nullable();
            $table ->decimal('price', 10, 2)->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();

            $table->foreign('porter_id')->references('id')->on('porters');
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicerequests');
    }
}
