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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            // $table->unsignedBigInteger('supplier_id'); <--- HAPUS BARIS INI JIKA ADA!
            $table->unsignedBigInteger('barang_id')->index(); // Stok menempel ke barang
            $table->unsignedBigInteger('user_id')->index();
            $table->integer('stok_jumlah');
            $table->dateTime('stok_tanggal');
            $table->timestamps();

            // Foreign Key ke Barang
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
            
            // Foreign Key ke User
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};