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
        Schema::create('barang_return_penjualan', function (Blueprint $table) {
            $table->string('Id_BarangReturnPenjualan', 15)->primary();
            $table->date('Tanggal_Return');
            $table->string('Id_Outlet', 15)->index();
            $table->string('Id_Barang', 15)->index();
            $table->string('Id_Admin', 15)->index();
            $table->integer('Jumlah_Barangreturnpenjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_return_penjualan');
    }
};
