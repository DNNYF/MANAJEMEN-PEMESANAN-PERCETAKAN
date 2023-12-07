<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adminModel', function (Blueprint $table) {
            $table->increments('id_admin'); 
            $table->string('nama_admin');
            $table->string('no_hp');
            $table->string('email'); 
            $table->string('password'); 
            $table->string('masukan_ulang_password'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminModel');
    }
};
