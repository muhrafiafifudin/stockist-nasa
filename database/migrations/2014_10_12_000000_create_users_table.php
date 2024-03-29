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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('google_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(bcrypt('1234'))->nullable();
            $table->integer('provinces_id')->nullable();
            $table->integer('cities_id')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('phone_number')->nullable();
            $table->tinyInteger('is_member')->nullable()->comment('0 for No Member, 1 for Member')->default(0);
            $table->integer('point')->nullable()->default(0);
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
