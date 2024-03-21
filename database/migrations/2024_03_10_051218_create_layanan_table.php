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
        Schema::create('layanan', function (Blueprint $table) {
            $table->string('kode_layanan', 50);
            $table->string('nama_layanan', 250);
            $table->text('deskripsi')->nullable();
            $table->string('biaya_layanan')->nullable();
            $table->string('durasi_layanan', 50)->nullable();
            $table->string('kategori_layanan', 50)->nullable();
            $table->timestamp('created_at')->default(now());
            $table->unique(array('kode_layanan'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
