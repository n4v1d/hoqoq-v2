<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('personel_id');
            $table->integer('month_id');
            $table->integer('group_id');
            $table->integer('branch_id');


            $table->integer('day');
            $table->integer('day_price');
            $table->integer('day_sum');

            $table->integer('hour');
            $table->integer('min');
            $table->integer('ezafekari_price');


            $table->integer('sum')->default(0);
            $table->integer('bon')->default(0);

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
        Schema::dropIfExists('payslips');
    }
}
