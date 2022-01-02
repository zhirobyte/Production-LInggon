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

        // semua yang ada disini adalah kolom berupa bentuk db
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_admin')->nullable();
            $table->string('name'); //ingat ya masuk MODEL harus dengan variable yang sama
            $table->string('email')->unique();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->string('gender')->nullable(); 
            $table->date('birth_date')->nullable(); 
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone')->nullable();         
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
