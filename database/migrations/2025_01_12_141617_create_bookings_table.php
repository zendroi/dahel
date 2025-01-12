<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('trip_id')->constrained()->onDelete('cascade'); // Relasi ke tabel trips
            $table->integer('number_of_people'); // Jumlah orang
            $table->decimal('total_price', 10, 2); // Total harga
            $table->date('booking_date'); // Tanggal pemesanan
            $table->string('status')->default('pending'); // Status pemesanan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
