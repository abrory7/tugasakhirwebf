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
            $table->string('foto')->nullable()->default('default.png');
            $table->text('bio')->nullable();
            $table->integer('reputasi')->nullable()->default('0');
            $table->integer('totalpost')->nullable()->default('0');
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
