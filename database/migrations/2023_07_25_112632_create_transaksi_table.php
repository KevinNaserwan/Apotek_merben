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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('id_transaksi')->primary();
            $table->string('nama_obat');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->integer('role_transaksi');
            $table->timestamp('waktu_transaksi');
            $table->foreign('role_transaksi')->references('role_transaksi')->on('jenistransaksi');
            $table->foreign('nama_obat')->references('nama_obat')->on('obat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
