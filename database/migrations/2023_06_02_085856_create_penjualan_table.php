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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->string('Id_Penjualan', 15)->primary();
            $table->string('Id_Outlet', 15);
            $table->string('Id_Barang', 15);
            $table->string('Jumlah', 15);
            $table->date('Tanggal_Penjualan');
            $table->integer('Harga_Penjualan');
            $table->string('Id_Admin', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
