<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statement', function (Blueprint $table) {
            $table->increments('statement_id');
            $table->date('date_submission');
            $table->integer('number');
            $table->integer('count_days');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('own_expense');
            $table->string('reason');
            $table->integer('staff_id');
            $table->boolean('approved');
            $table->integer('leader_id');
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
        Schema::dropIfExists('statement');
    }
}
