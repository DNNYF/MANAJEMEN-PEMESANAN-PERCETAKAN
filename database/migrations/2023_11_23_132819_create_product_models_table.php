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
        Schema::create('productModel', function (Blueprint $table) {
            $table->increments('id_product'); 
            $table->string('nama_product');
            $table->string('jenis');
            $table->unsignedInteger('harga'); 
            $table->string('foto'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productModel');
    }
};