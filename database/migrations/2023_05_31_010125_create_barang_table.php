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
        Schema::create('barang', function (Blueprint $table) {
            $table->string('Id_Barang', 15)->primary();
            $table->string('Id_BarangMasuk', 15)->index();
            $table->string('Kode_Barang', 15);
            $table->string('Id_Admin', 15)->index();
            $table->string('Nama_Barang', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
