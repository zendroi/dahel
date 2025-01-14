<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('pemesanan_id'); // Primary key
            $table->integer('jumlahpeserta'); // Jumlah peserta
            $table->string('namalengkap', 255); // Nama lengkap dengan batas 255 karakter
            $table->string('nomertelpon', 15)->index(); // Nomor telepon dengan batas 15 karakter dan indeks
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
