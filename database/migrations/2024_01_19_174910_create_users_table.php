<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 1. bigIncrement itu buat ketika kita mau masukin data (CREATE) ga ush pusing soal buat buat id karena udah auto increment
     * 2. picture gua buat 1000 biar gua ambil semua pathnya jadi ga pusing pusing
     * 3. unsignedBigInteger itu biasanya gua pake kalo atribut itu merupakan FK baut table lain
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            $table->unsignedBigInteger('role_id');
            $table->string('picture', 1000);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
