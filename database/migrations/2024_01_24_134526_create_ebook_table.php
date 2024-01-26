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
        Schema::create('ebook', function (Blueprint $table) {
            $table->id();
            $table->string('id_kategori')->nullable();
            $table->string('judul');
            $table->string('penulis');
            $table->string('abstrak')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('total_halaman')->nullable();
            $table->string('link')->nullable();
            $table->string('gambar')->nullable();
            $table->string('subject')->nullable();
            $table->string('file')->nullable();
            $table->enum('akses', [1, 2])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ebook');
    }
};
