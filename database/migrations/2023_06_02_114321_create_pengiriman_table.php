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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->string('Id_Pengiriman', 15)->primary();
            $table->date('Tanggal_Pengiriman');
            $table->string('Id_BarangKeluar', 15);
            $table->string('id_penjualan', 15);
            $table->string('id_outlet', 15);
            $table->string('Id_Admin', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
