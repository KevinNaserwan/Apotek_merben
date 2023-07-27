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
        Schema::create('obat', function (Blueprint $table) {
            $table->string('nama_obat')->primary();
            $table->string('gambar_obat');
            $table->string('data_obat');
            $table->integer('role_obat');
            $table->integer('harga');
            $table->integer('stok_obat');
            $table->integer('status');
            $table->foreign('role_obat')->references('role_obat')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
