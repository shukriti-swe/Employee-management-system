<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyClosingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_closing_reports', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('author');
            $table->string('month');
            $table->string('product_name');
            $table->date('equipment_recieve_date')->nullable();;   
            $table->integer('equipment_quantity')->nullable();
            $table->integer('time_duration');
            $table->integer('product_quantity');
            $table->date('delivery_date');
            $table->string('description');

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
        Schema::dropIfExists('monthly_closing_reports');
    }
}
