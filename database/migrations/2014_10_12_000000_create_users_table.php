<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('name_r');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('position_id')->unsigned()->index();
            $table->string('address');
            
            $table->enum('role', [
                \App\Enums\RolesEnum::EMPLOYEE,
                \App\Enums\RolesEnum::HEAD
            ])->default(\App\Enums\RolesEnum::EMPLOYEE);

            $table->boolean('is_blocked')->default(false);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
