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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('santri_id');
            $table->string('nama');
            $table->string('email');
            $table->string('nama_kategori');
            $table->string('kode_transaksi')->nullable();
            $table->string('total_harga')->nullable();
            $table->string('rekening');
            $table->string('status')->default(2);
             // status transaksi
            // 1 = Transaksi sukses
            // 2 = Menunggu Pembayaran
            // 3 = Transaksi gagal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
