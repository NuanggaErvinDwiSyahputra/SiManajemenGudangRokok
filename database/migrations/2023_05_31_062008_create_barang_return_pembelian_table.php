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
        Schema::create('barang_return_pembelian', function (Blueprint $table) {
            $table->string('Id_BarangReturnPembelian', 15)->primary();
            $table->string('Id_Barang', 15)->index();
            $table->date('Tanggal_Return');
            $table->string('Id_Admin', 15)->index();
            $table->integer('Jumlah_BarangReturnPembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_return_pembelian');
    }
};
