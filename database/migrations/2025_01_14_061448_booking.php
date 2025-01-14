<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) { 
            $table->id(); 
            $table->string('namalengkap'); 
            $table->integer('jumlahpeserta'); 
            $table->integer('nomortelpon'); 
            $table->integer(column: 'nomornegara'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pe'); 
    }
};
