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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->string('Id_BarangMasuk', 15)->primary();
            $table->string('Jumlah', 15);
            $table->date('Tanggal_Masuk');
            $table->string('Id_Pembelian', 15)->index();
            $table->string('Id_Admin', 15)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
