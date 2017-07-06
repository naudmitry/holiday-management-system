<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHilidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();

            $table->enum('status', [
                \App\Enums\StatusEnum::AWAITING,
                \App\Enums\StatusEnum::REJECTED,
                \App\Enums\StatusEnum::APPROVED
            ])->default(\App\Enums\StatusEnum::AWAITING)->index();

            $table->date('date_start');
            $table->date('date_end');
            $table->integer('duration')->unsigned();
            $table->string('comment')->nullable()->default(null);

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
        Schema::dropIfExists('holidays');
    }
}
