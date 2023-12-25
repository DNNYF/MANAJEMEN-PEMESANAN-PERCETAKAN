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
        Schema::create('daftarpemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA_PELANGGAN');
            $table->string('NAMA_PRODUK');
            $table->string('STATUS');
            $table->string('JENIS/UKURAN');
            $table->string('QTY');
            $table->integer('TOTAL_HARGA');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarpemesanan');
    }
};
