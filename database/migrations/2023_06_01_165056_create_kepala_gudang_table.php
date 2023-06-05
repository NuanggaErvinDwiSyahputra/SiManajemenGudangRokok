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
        Schema::create('kepala_gudang', function (Blueprint $table) {
            $table->string('Id_KepalaGudang', 15)->primary();
            $table->string('Id_Pegawai', 15);
            $table->string('Email', 50);
            $table->string('Password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_gudang');
    }
};
