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
            $table->string('username');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jeniskelamin');
            $table->text('alamat')->nullable();
            $table->text('foto')->nullable();
            $table->text('bio')->nullable();
            $table->integer('reputasi')->nullable();
            $table->integer('userlevel_id')->unsigned();
            $table->foreign('userlevel_id')->references('id')->on('userlevel');
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
