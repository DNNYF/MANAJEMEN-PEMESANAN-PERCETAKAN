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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->text('alamat'); 
            $table->string('tlp'); 
            $table->integer('qyt'); 
            $table->bigInteger('total'); 
            $table->string('foto_mentah'); 
            $table->string('foto_desain'); 
            $table->enum('status',['Unpaid', 'Paid']); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
