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
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->string('Id_BarangKeluar', 15)->primary();
            $table->string('Id_Penjualan', 15)->index();
            $table->date('Tanggal_Keluar');
            $table->string('Jumlah', 15);
            $table->string('Id_Admin', 15)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluar');
    }
};
