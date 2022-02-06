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
            // $table->id();
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->macAddress('last_device_ip')->nullable();
            $table->datetime('last_login_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();  // what about verifying on paying
            $table->rememberToken();
            $table->timestamps();

            $table->string('phone')->nullable()->default(null);
            $table->string('area')->nullable()->default(null);
            $table->string('street')->nullable()->default(null);
            $table->string('block')->nullable()->default(null);
            $table->string('departement')->nullable()->default(null);
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
