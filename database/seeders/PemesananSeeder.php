<?php 
 
 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use App\Models\Pemesanan;
 
 class PemesananSeeder extends Seeder
 {
     public function run()
     {
         Pemesanan::create([
             'namalengkap' => 'John Doe',
             'jumlahpeserta' => 3,
             'nomornasional' => '62',
             'nomortelpon' => '8123456789',
         ]);
     }
 }
 