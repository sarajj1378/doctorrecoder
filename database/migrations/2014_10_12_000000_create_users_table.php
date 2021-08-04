<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('medicalcode');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->binary('gender');
            $table->string('nationalcode');
            $table->string('phonenumber');
            $table->string('takhasos');
            $table->timestamp('birthday')->nullable();
          
            $table->string('password');
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
