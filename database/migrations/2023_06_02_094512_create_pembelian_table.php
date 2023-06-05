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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('Id_Pembelian', 15)->primary();
            $table->string('Id_Supplier', 15);
            $table->string('Nama_Barang', 25);
            $table->string('Jumlah', 15);
            $table->date('Tanggal_Pembelian');
            $table->integer('Harga_Pembelian');
            $table->string('Id_admin', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
