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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('session_hour')->nullable();
            $table->string('linkedin')->nullable();
            $table->integer('total_client')->nullable();
            $table->string('rating')->nullable();
            $table->string('description')->nullable();
            $table->text('profile')->nullable();
            $table->text('education_background')->nullable();
            $table->text('job_background')->nullable();
            $table->text('award')->nullable();
            $table->string('one_on_one_link')->nullable();
            $table->string('one_to_many_link')->nullable();
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
